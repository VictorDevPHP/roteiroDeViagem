<?php

namespace App\Http\Controllers;

use App\Http\Controllers\InputDados;
use Illuminate\Http\Request;

class ControllerAI extends Controller
{
    public function chamadaApi(Request $request)
    {
        $apiKey = env('KEY_GPT');
        $paramFinal = $request->input('paramFinal');
        // dd($request['paramFinal']);

        // Define os dados para a chamada da API
        $data = array(
            'model' => 'gpt-3.5-turbo',
            'messages' => array(
                array(
                "role" => "user",
                "content" => 'Me mostre um roteiro de viagem de '. $paramFinal['param1'].' a '. $paramFinal['param2']. ' nas datas '. $paramFinal['param3']. ' atraves do meio de transporte '. $paramFinal['param4'])
            )
        );

        $apiUrl = "https://api.openai.com/v1/chat/completions";
        $ch = curl_init($apiUrl);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, json_encode($data));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_HTTPHEADER, array(
            "Content-Type: application/json",
            "Authorization: Bearer $apiKey"
        ));

        $response = curl_exec($ch);
        curl_close($ch);

        $responseData = json_decode($response, true);
        $reply = $responseData["choices"][0]["message"]["content"];
        

        return view('chamadaApi', ['reply' => $reply]);
    }
}
