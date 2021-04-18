<?php

namespace App\Http\Controllers;

use App\Flow;
use App\Mail\DonationMail;
use App\Models\Donation;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Str;
use SimpleSoftwareIO\QrCode\Facades\QrCode;

class DonationController extends Controller
{

    public function index()
    {
        //
    }

    public function donar(){
        $token = Str::random(15);
        $optional = array(
            "rut" => Auth::user()->rut,
            "nombre" => Auth::user()->name,
            "user_id" => Auth::user()->id
        );
        $optional = json_encode($optional);
        $params = array(
            "commerceOrder" => $token,
            "subject" => "Dona una piscola",
            "currency" => "CLP",
            "amount" => 3000,
            "email" => Auth::user()->email,
            "paymentMethod" => 9,
            "urlConfirmation" => env('APP_URL').'/donations/result',
            "urlReturn" => env('APP_URL').'/donations/result',
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


    public function suc2(){
        return view('admin.donations.success');
    }

    public function result(){
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
            if($response['status'] === 2){
                $oldDonation = Donation::where('token', $response['commerceOrder'])->first();
                //dd(!$oldDonation);
                if(!$oldDonation){
                    $donation = new Donation();
                    $donation->user_id = $response['optional']['user_id'];
                    $donation->flow_order = $response['flowOrder'];
                    $donation->token = $response['commerceOrder'];
                    $donation->precio = $response['amount'];
                    //$donation->save();

                    QrCode::size(150)->format('png')->generate($response['commerceOrder'],'images/uploads/qr/'.$response['commerceOrder'].'.png');

                    $mailData = [
                        'response'=> $response,
                    ];
                    $subject = '¡Gracias por donar una piscola!';
                    Mail::to($response['payer'])->send(new DonationMail($mailData, $subject));

                    return view('admin.donations.success',$response);
                }
                return redirect('/cuenta');
            }else{
                return view('admin.donations.failed');
            }


        } catch (Exception $e) {
            return redirect('/');
        }
    }

    public function create()
    {
        //
    }

    public function mail(){
        $subject = '¡Gracias por donar una piscola!';
        $response = [
            'optional' => ['rut' => '16000000-1', 'user_id' => 1, 'nombre' => 'chavah'],
            'flowOrder' => 123456,
            'commerceOrder' => 'P5n0WFuajM0B89g',
            'amount' => 3000,
            'requestDate' => '01/01/2021',
            'payer'=>'freddy.perez.trabajos@gmail.com'
        ];

        $emailData = [
            'response' => $response
        ];
        Mail::to($response['payer'])->send(new DonationMail($emailData, $subject));
        return view('mail.mail-donation', ['data'=>$emailData]);
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
