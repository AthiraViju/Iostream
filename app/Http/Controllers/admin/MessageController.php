<?php

namespace App\Http\Controllers\admin;

use App\Http\Controllers\Controller;
use App\Notifications\MessageNotification;
use Illuminate\Http\Request;
use Twilio\Rest\Client;

class MessageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin/message/create');


    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Twilio\Rest\Api\V2010\Account\MessageInstance
     */
    public function store(Request $request)
    {


        $sid    = env('TWILIO_AUTH_SID');
        $token  = env('TWILIO_AUTH_TOKEN');
        $wa_from= env('TWILIO_WHATSAPP_FROM');
        $twilio = new Client($sid, $token);

        $body = "Hi Guyz, Please use the below link to join" .' '.'https://api.whatsapp.com/send/?phone=918594042036&text&app_absent=0';
        $twilio->messages->create("whatsapp:+919656887895",["from" => "whatsapp:$wa_from", "body" => $body,"StatusCallback" => "https://evntr.co/callback.php"]);
        return redirect()->route('home');
//        $order = \App\Models\User::factory()->create();
//        $request->user()->notify(new MessageNotification($order));
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
