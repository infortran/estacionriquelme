<?php

namespace App;

class Flow{
    private $url;
    protected $apiKey;
    protected $secretKey;

    public function __construct()
    {
        if(env('APP_ENV') === 'productio'){
            $this->url = env('FLOW_URL_PRODUCCION');
            $this->apiKey = env('FLOW_API_KEY');
            $this->secretKey = env('FLOW_SECRET_KEY');
        }else{
            $this->url = env('FLOW_URL_SANDBOX');
            $this->apiKey = env('FLOW_API_KEY_SANDBOX');
            $this->secretKey = env('FLOW_SECRET_KEY_SANDBOX');
        }
    }

    public function send( $service, $params, $method = "GET") {
        $method = strtoupper($method);
        $url = $this->url . "/" . $service;
        //dd($url);
        $params = array("apiKey" => $this->apiKey) + $params;
        $params["s"] = $this->sign($params);
        if($method == "GET") {
            $response = $this->httpGet($url, $params);
        } else {
            $response = $this->httpPost($url, $params);
        }

        if(isset($response["info"])) {
            $code = $response["info"]["http_code"];
            if (!in_array($code, array("200", "400", "401"))) {
                throw new Exception("Unexpected error occurred. HTTP_CODE: " .$code , $code);
            }
        }
        $body = json_decode($response["output"], true);
        //dd($body);
        return $body;
    }

    //Fijar nuevas claves
    public function setKeys($apiKey, $secretKey) {
        $this->apiKey = $apiKey;
        $this->secretKey = $secretKey;
    }

    //Firmar los parametros
    private function sign($params){
        $keys = array_keys($params);
        sort($keys);
        $toSign = "";
        foreach ($keys as $key) {
            $toSign .= $key . $params[$key];
        }
        if(!function_exists("hash_hmac")) {
            throw new Exception("function hash_hmac not exist", 1);
        }
        return hash_hmac('sha256', $toSign , $this->secretKey);
    }

    //GET
    private function httpGet($url, $params) {
        $url = $url . "?" . http_build_query($params);
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        $output = curl_exec($ch);
        if($output === false) {
            $error = curl_error($ch);
            throw new Exception($error, 1);
        }
        $info = curl_getinfo($ch);
        curl_close($ch);
        return array("output" =>$output, "info" => $info);
    }

    //POST
    private function httpPost($url, $params ) {
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
        curl_setopt($ch, CURLOPT_POST, TRUE);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
        $output = curl_exec($ch);
        if($output === false) {
            $error = curl_error($ch);
            throw new Exception($error, 1);
        }
        $info = curl_getinfo($ch);
        curl_close($ch);
        return array("output" =>$output, "info" => $info);
    }
}