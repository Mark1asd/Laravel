<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use GuzzleHttp\Client;
/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

// class about. extends Controller {

//     public function saveApiData()
//     {
//         $client = new Client();
//         $res = $client->request('POST', 'https://url_to_the_api/', [
//             'form_params' => [
//                 'client_id' => 'test_id',
//                 'secret' => 'test_secret',
//             ]
//         ]);
//         echo $res->getStatusCode();
//         // 200
//         echo $res->getHeader('content-type');
//         // 'application/json; charset=utf8'
//         echo $res->getBody();
//         // {"type":"User"...'
// }