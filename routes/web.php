<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DenunciaController;
use Illuminate\Support\Facades\Redirect;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as Psr7Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;

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

// Route::get('/', function () {
//     return view('welcome');
// });

Route::post('token', function (Request $request) {
    $data = json_encode(Session::all());
    $data = json_decode($data);

    if (!isset($data->uid)) {
        $code = $request->getContent();
        $client_id_oauth = env('CLIENT_ID_OAUTH');
        // $client_id_oauth = 'DDc3q7V6rIKj4rdQlrg8yT2R';
        // return $client_id_oauth;
        if (!isset($code)) {
            return Redirect::to('http://web.regionancash.gob.pe/api/oauth/authorize?response_type=code&client_id=' . $client_id_oauth);
        } else {
            try {
                $client = new Client();
                $headers = [
                    'Content-Type' => 'text/plain'
                ];
                $request = new Psr7Request('POST', 'http://web.regionancash.gob.pe/api/auth/token', $headers, $code);
                $res = $client->sendAsync($request)->wait();
                $token = json_decode($res->getBody());
                if (isset($token)) {
                    $token = $token->token;
                    $data = str_replace('_', '/', str_replace('-', '+', explode('.', $token)[1]));
                }

                $users = json_decode(base64_decode($data));
                // return $users;
                $uidSession = $users->uid;

                if (isset($users->fullName)) {
                    $fullNameSession = $users->fullName;
                } else {
                    $fullNameSession = 'User';
                }

                if (isset($users->directory)) {
                    $directorySession = $users->directory;
                } else {
                    $directorySession = null;
                }

                $userSession = $users->user;

                if ($user = User::where('name', $users->user)->first()) {
                    Auth::login($user);
                    Session(['uid' => $uidSession]);
                    Session(['fullName' => $fullNameSession]);
                    Session(['directory' => $directorySession]);
                    Session(['user' => $userSession]);
                } else {

                    $newUser = new User();

                    $newUser->nombres = $fullNameSession;
                    $newUser->name = $userSession;
                    $newUser->email = $userSession;
                    $newUser->password = Hash::make($userSession);
                    $newUser->remember_token = Hash::make($userSession);
                    $newUser->save();
                }
                return $res->getBody();
            } catch (\Throwable $th) {
                return $th->getMessage();
            }
        }
    } else {
        return 'No esta logeado';
    }
});


// Listado de Denuncias
Route::get('denuncia', 'App\Http\Controllers\DenunciaController@getDenuncia');

// Listado de Denuncias con respuestas
Route::get('respuesta', 'App\Http\Controllers\DenunciaController@getDenunciaRespuesta');

// Listado de Motivos
Route::get('motivo', 'App\Http\Controllers\DenunciaController@getMotivo');

// Registro de Denuncia
Route::post('addDenuncia', 'App\Http\Controllers\DenunciaController@addDenuncia');

// Registro de Respuesta a una Denuncia
Route::put('updateDenuncia', 'App\Http\Controllers\DenunciaController@updateDenuncia');

// Listado de Oficinas
Route::get('oficina', 'App\Http\Controllers\DenunciaController@getOficina');

// Busqueda de Personal por Oficina
Route::get('personal/{id}', 'App\Http\Controllers\DenunciaController@getPersonalxOficina');


Route::get('sendmail', 'App\Http\Controllers\DenunciaController@sendEmail');
