<?php

namespace App\webService;

class ViaCEP
{
    /**
     * Método responsavel por consultar  um CEP no VIACEP
     * @param $cep
     * @return bool|null
     */
    public static function consultarCEP($cep)
    {
        //Iniciando o CURL
        $curl = curl_init();

        //Configurações do CURL
        curl_setopt_array($curl,[
                CURLOPT_URL => 'https://viacep.com.br/ws/'.$cep.'/json/',
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_CUSTOMREQUEST => 'GET'
            ]);

        //response
        $response = curl_exec($curl);

        //fecha a conexao aberta
        curl_close($curl);


        //convert o json para array
        $reponseArray = json_decode($response,true);


        //Retorna o conteudo em array
        return isset($reponseArray['cep']) ? $reponseArray : null;

    }



}