<?php

use App\Http\Controllers\UserController;
use App\Http\Controllers\admin\MessageController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\admin;
use Symfony\Component\HttpFoundation\Request;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::resource('upload', 'App\Http\Controllers\admin\UploadController');
Route::resource('message', 'App\Http\Controllers\admin\MessageController');
Route::get('file-export', [admin\UploadController::class, 'fileExport'])->name('file-export');

Route::post('/message', function(Request $request) {
    // TODO: validate incoming params first!
    $url = "https://messages-sandbox.nexmo.com/v0.1/messages";
    $params = ["to" => ["type" => "whatsapp", "number" => $request->input('number')],
        "from" => ["type" => "whatsapp", "number" => "14157386170"],
        "message" => [
            "content" => [
                "type" => "text",
                "text" => "Hello from Vonage and Laravel :) Please reply to this message with a number between 1 and 100"
            ]
        ]
    ];

    $headers = ["Authorization" => "Basic " . base64_encode(env('NEXMO_API_KEY') . ":" . env('NEXMO_API_SECRET'))];
    $client = new \GuzzleHttp\Client();



    $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);

    $data = $response->getBody();





    Log::Info($data);


    return view('thanks');
})->name('send.message');





Route::post('/webhooks/inbound', function(Request $request) {
    $data = $request->all();

    $text = $data['message']['content']['text'];
    $number = intval($text);
    Log::Info($number);
    if($number > 0) {
        $random = rand(1, 8);
        Log::Info($random);
        $respond_number = $number * $random;
        Log::Info($respond_number);
        $url = "https://messages-sandbox.nexmo.com/v0.1/messages";
        $params = ["to" => ["type" => "whatsapp", "number" => $data['from']['number']],
            "from" => ["type" => "whatsapp", "number" => "14157386170"],
            "message" => [
                "content" => [
                    "type" => "text",
                    "text" => "The answer is " . $respond_number . ", we multiplied by " . $random . "."
                ]
            ]
        ];
        $headers = ["Authorization" => "Basic " . base64_encode(env('NEXMO_API_KEY') . ":" . env('NEXMO_API_SECRET'))];


        $client = new \GuzzleHttp\Client();
        $response = $client->request('POST', $url, ["headers" => $headers, "json" => $params]);
        $data = $response->getBody();
    }
    Log::Info($data);
});

Route::post('/webhooks/status', function(Request $request) {
    $data = $request->all();
    Log::Info($data);
});

//Route::get('file-import-export', [UserController::class, 'fileImportExport']);
//Route::post('file-import', [UserController::class, 'fileImport'])->name('file-import');

Route::post('/send/messages', 'App\Http\Controllers\admin\MessageController@store')->name('send.messages');
