<?php

namespace App\Http\Controllers;

use App\Flow;
use App\Models\Donation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;

class DonationController extends Controller
{

    public function index()
    {
        //
    }

    public function donar(){
        $token = Str::random(15);
        Session::put('token_flow', $token);
        $optional = array(
            "rut" => Auth::user()->rut
        );
        $optional = json_encode($optional);
        $params = array(
            "commerceOrder" => $token,
            "subject" => "Dona una piscola",
            "currency" => "CLP",
            "amount" => 3000,
            "email" => Auth::user()->email,
            "paymentMethod" => 9,
            "urlConfirmation" => env('APP_URL').'/donations/success',
            "urlReturn" => env('APP_URL').'/donations/success2',
            "optional" => $optional
        );
        $serviceName = 'payment/create';

        try{
            $flow = new Flow();
            $response = $flow->send($serviceName, $params, 'POST');
            //dd($response);
            $redirect = $response['url'] . '?token=' .$response['token'];
            //dd(Session::get('token_flow'));
            return redirect($redirect);
        }catch(Exception $e){
            return $e->getCode() . '-' . $e->getMessage();
        }
    }

    public function success(){
        /*try {
            //Recibe el token enviado por Flow
            if(!isset($_POST["token"])) {
                throw new Exception("No se recibio el token", 1);
            }
            $token = filter_input(INPUT_POST, 'token');
            $params = array(
                "token" => $token
            );
            //Indica el servicio a utilizar
            $serviceName = "payment/getStatus";
            $flow = new Flow();
            $response = $flow->send($serviceName, $params, "GET");

            print_r($response);

        } catch (Exception $e) {
            echo "Error: " . $e->getCode() . " - " . $e->getMessage();
        }*/
        return view ('admin.donations.success');
    }

    public function success2(Request $request){
        try {
            //Recibe el token enviado por Flow
            if(!isset($_POST["token"])) {
                throw new Exception("No se recibio el token", 1);
            }
            $token = filter_input(INPUT_POST, 'token');
            $params = array(
                "token" => $token
            );
            //Indica el servicio a utilizar
            $serviceName = "payment/getStatus";
            $flow = new Flow();
            $response = $flow->send($serviceName, $params, "GET");

            print_r($response);

        } catch (Exception $e) {
            echo "Error: " . $e->getCode() . " - " . $e->getMessage();
        }
    }

    public function failed(){

    }

    public function create()
    {
        //
    }


    public function store(Request $request)
    {
        //
    }


    public function show(Donation $donation)
    {
        //
    }


    public function edit(Donation $donation)
    {
        //
    }


    public function update(Request $request, Donation $donation)
    {
        //
    }


    public function destroy(Donation $donation)
    {
        //
    }
}
