<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Denuncia;
use App\Models\Motivo;
use App\Models\Oficina;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Validator;
use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request as Psr7Request;

class DenunciaController extends Controller
{
    public function getDenuncia()
    {
        $denuncias = DB::table('denuncias')
            ->join('motivos', 'motivos.id', '=', 'denuncias.motivo_id')
            ->join('personals', 'personals.id', '=', 'denuncias.personal_id')
            ->join('oficinas', 'oficinas.id', '=', 'personals.oficina_id')
            ->where('denuncias.respuesta', null)
            ->select('denuncias.*', 'motivos.titulo', 'motivos.descripcion', 'personals.apenombres as apenombresdenunciado', 'personals.cargo as cargodenunciado', 'oficinas.name', 'personals.oficina_id')
            ->latest('denuncias.id')
            ->paginate(10);

        return response()->json($denuncias, 200);
    }

    public function getMotivo()
    {
        return response()->json(Motivo::all(), 200);
    }

    public function getOficina()
    {
        return response()->json(Oficina::orderBy('name')->get(), 200);
    }

    public function getPersonalxOficina($id)
    {
        $personal = DB::table('personals')
            ->join('oficinas', 'oficinas.id', '=', 'personals.oficina_id')
            ->where('oficinas.id', $id)
            ->select('personals.*', 'oficinas.id as idoficinas', 'oficinas.name')
            ->latest('personals.id')
            ->get();

        if (is_null($personal)) {
            return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
        }
        return response()->json($personal, 200);
    }

    public function getDenunciaRespuesta()
    {
        $denuncias = DB::table('denuncias')
            ->join('motivos', 'motivos.id', '=', 'denuncias.motivo_id')
            ->join('personals', 'personals.id', '=', 'denuncias.personal_id')
            ->join('oficinas', 'oficinas.id', '=', 'personals.oficina_id')
            ->where('denuncias.respuesta', '!=', null)
            ->select('denuncias.*', 'motivos.titulo', 'motivos.descripcion', 'personals.apenombres as apenombresdenunciado', 'personals.cargo as cargodenunciado', 'oficinas.name', 'personals.oficina_id')
            ->latest('denuncias.id')
            ->paginate(10);

        return response()->json($denuncias, 200);
    }

    public function addDenuncia(Request $request)
    {

        $anonimo = $request->anonimo;
        $tipopersona = $request->tipopersona;
        $tipodocumento = $request->tipodocumento;
        $nrodocumento = $request->nrodocumento;
        $apenombres = $request->apenombres;
        $razonsocial = $request->razonsocial;
        $representante = $request->representante;
        $domicilio = $request->domicilio;
        $telefono = $request->telefono;
        $email = $request->email;
        $funcionario = $request->funcionario;
        $organo = $request->organo;
        $cargo = $request->cargo;
        $vinculo = $request->vinculo;
        // $apenombresdenunciado = $request->apenombresdenunciado;
        // $cargodenunciado = $request->cargodenunciado;
        $deschechos = $request->deschechos;
        $documentacion = $request->documentacion;
        $motivo_id = $request->motivo_id;
        $personal_id = $request->personal;
        $tempFile = $request->tempFile;

        $result = '1';
        $msj = '';
        $selector = '';

        // if ($request->hasFile('file')) {
        //     $url = Storage::put('denuncias', $request->file('file'));
        // } else {
        //     $url = "";
        // }

        // $path = "https://web.regionancash.gob.pe/fs/temp/" . $tempFile;


        $input1  = array('anonimo' => $anonimo);
        $reglas1 = array('anonimo' => 'required');

        $input2  = array('telefono' => $telefono);
        $reglas2 = array('telefono' => 'required');

        $input3  = array('email' => $email);
        $reglas3 = array('email' => 'required');

        $input4  = array('funcionario' => $funcionario);
        $reglas4 = array('funcionario' => 'required');

        // $input5  = array('apenombresdenunciado' => $apenombresdenunciado);
        // $reglas5 = array('apenombresdenunciado' => 'required');

        // $input6  = array('cargodenunciado' => $cargodenunciado);
        // $reglas6 = array('cargodenunciado' => 'required');

        $input7  = array('deschechos' => $deschechos);
        $reglas7 = array('deschechos' => 'required');

        $input8  = array('motivo_id' => $motivo_id);
        $reglas8 = array('motivo_id' => 'required');

        $input9  = array('personal_id' => $personal_id);
        $reglas9 = array('personal_id' => 'required');

        $validator1 = Validator::make($input1, $reglas1);
        $validator2 = Validator::make($input2, $reglas2);
        $validator3 = Validator::make($input3, $reglas3);
        $validator4 = Validator::make($input4, $reglas4);
        // $validator5 = Validator::make($input5, $reglas5);
        // $validator6 = Validator::make($input6, $reglas6);
        $validator7 = Validator::make($input7, $reglas7);
        $validator8 = Validator::make($input8, $reglas8);
        $validator9 = Validator::make($input9, $reglas9);

        if ($validator1->fails()) {
            $result = '0';
            $msj = 'Seleccione si la denuncia será anonima.';
            $selector = 'cbuanonimo';
        } elseif ($validator2->fails()) {
            $result = '0';
            $msj = 'Ingrese su número de celular para recibir notificaciones del avance de su denuncia.';
            $selector = 'txttelefono';
        } elseif ($validator3->fails()) {
            $result = '0';
            $msj = 'Ingrese su correo electrónico para recibir notificaciones del avance de su denuncia.';
            $selector = 'txtemail';
        } elseif ($validator4->fails()) {
            $result = '0';
            $msj = 'Seleccione si es funcionario del Gobierno Regional de Áncash.';
            $selector = 'cbufuncionario';
        } elseif ($validator7->fails()) {
            $result = '0';
            $msj = 'Ingrese una descripción detallada de los hechos suscitados.';
            $selector = 'txtdeschechos';
        } elseif ($validator8->fails()) {
            $result = '0';
            $msj = 'Seleccione el motivo de la denuncia.';
            $selector = 'cbumotivo';
        } elseif ($validator9->fails()) {
            $result = '0';
            $msj = 'Seleccione el nombre del personal a denunciar.';
            $selector = 'cbupersonal';
        } else {

            $newDenuncia = new Denuncia();

            $newDenuncia->anonimo = $anonimo;
            $newDenuncia->tipopersona = $tipopersona;
            $newDenuncia->tipodocumento = $tipodocumento;
            $newDenuncia->nrodocumento = $nrodocumento;
            $newDenuncia->apenombres = $apenombres;
            $newDenuncia->razonsocial = $razonsocial;
            $newDenuncia->representante = $representante;
            $newDenuncia->domicilio = $domicilio;
            $newDenuncia->telefono = $telefono;
            $newDenuncia->email = $email;
            $newDenuncia->funcionario = $funcionario;
            $newDenuncia->organo = $organo;
            $newDenuncia->cargo = $cargo;
            $newDenuncia->vinculo = $vinculo;
            // $newDenuncia->apenombresdenunciado = $apenombresdenunciado;
            // $newDenuncia->cargodenunciado = $cargodenunciado;
            $newDenuncia->deschechos = $deschechos;
            $newDenuncia->documentacion = $tempFile;
            $newDenuncia->motivo_id = $motivo_id;
            $newDenuncia->personal_id = $personal_id;
            $newDenuncia->activo = '1';
            $newDenuncia->borrado = '0';
            $newDenuncia->save();

            // $msj = 'Su Denuncia fue registrada con éxito, se le estará notificando el avance de su caso a traves del correo electrónico.';

            $msj = '<p>Su denuncia de un acto de corrupción en el Gobierno Regional de Ancash fue registrado con éxito, así mismo en el transcurso de los días se le estará enviando un correo con lo actuado. <i><strong>"Por un gobierno de Integridad y Transparencia”</strong></i>.</p><p><strong>Gobierno Regional de Ancash</strong></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';

            $client = new Client();
            $headers = [
                'Content-Type' => 'application/json'
            ];
            $body = '{
                "toList": [
                    "' + $email + '"
                ],    
                "subject": "REGISTRO DE DENUNCIA DE UN ACTO DE CORRUPCIÓN",
                "from": "denuncias@regionancash.gob.pe",
                "body": "' + $msj + '"
                }';
            $request = new Psr7Request('POST', 'https://regionancash.gob.pe/sendtoenvio.php', $headers, $body);
            $res = $client->sendAsync($request)->wait();
            $res->getBody();
        }

        return response()->json(["result" => $result, 'msj' => $msj, 'selector' => $selector]);
    }

    public function updateDenuncia(Request $request)
    {
        $respuesta = $request->respuesta;
        $id = $request->id;

        $email = Denuncia::where('id', $id)->first();
        $email = $email->email;

        $result = '1';
        $msj = '';
        $selector = '';

        $input1  = array('respuesta' => $respuesta);
        $reglas1 = array('respuesta' => 'required');

        $validator1 = Validator::make($input1, $reglas1);

        if ($validator1->fails()) {
            $result = '0';
            $msj = 'Ingrese el procedimiento que se realizo con la denuncia, para el seguimiento del denunciante.';
            $selector = 'txtrespuesta';
        } else {

            $updateDenuncia = Denuncia::find($id);
            if (is_null($updateDenuncia)) {
                return response()->json(['Mensaje' => 'Registro no encontrado'], 404);
            }
            $updateDenuncia->respuesta = $respuesta;
            $updateDenuncia->save();

            $msj = 'Se registro el procedimiento de la denuncia con Éxito.';

            $msj2 = '<p>Su denuncia de un acto de corrupción en el Gobierno Regional de Ancash fue actualizado con éxito. <br>Se actualizo con lo siguiente:' + $respuesta + '<i><strong>"Por un gobierno de Integridad y Transparencia”</strong></i>.</p><p><strong>Gobierno Regional de Ancash</strong></p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p><p>&nbsp;</p>';

            $client = new Client();
            $headers = [
                'Content-Type' => 'application/json'
            ];
            $body = '{
                "toList": [
                    "' + $email + '"
                ],    
                "subject": "ACTUALIZACIÓN DE DENUNCIA DE UN ACTO DE CORRUPCIÓN",
                "from": "denuncias@regionancash.gob.pe",
                "body": "' + $msj2 + '"
                }';
            $request = new Psr7Request('POST', 'https://regionancash.gob.pe/sendtoenvio.php', $headers, $body);
            $res = $client->sendAsync($request)->wait();
            $res->getBody();
        }

        return response()->json(["result" => $result, 'msj' => $msj, 'selector' => $selector]);
    }
}
