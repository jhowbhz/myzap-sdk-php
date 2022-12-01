<?php

namespace ApiGratis;

use GuzzleHttp\Client;
use GuzzleHttp\Psr7\Request;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Exception\RequestException;

class Base
{

    public static function defaultRequest(String $method, String $base_uri, String $action, Array $headers, Array $body)
    {
        try {

            // create new client
            $client = new Client([
                'timeout' => 300, // timeout 5 minutes
                'verify' => false, // disable ssl verify
                'base_uri' => $base_uri // base uri
            ]);

            $headers['Content-Type'] = 'application/json'; // set content type json
            $headers['Accept'] = 'application/json'; // set accept json

            $request = new Request($method, $action, $headers, json_encode($body)); // create request
            $response = $client->send($request); // send request

            if(isset(explode("?", $action)[0]) and explode("?", $action)[0] === 'getQrCode'){
                return $response->getBody()->getContents();
            }
            
            return json_decode($response->getBody()->getContents()); // return response object

        } catch (ClientException $e) {

            // return exception error
            $response = $e->getResponse();
            return json_decode((string)($response->getBody()));

        }
    }

    public static function validateWhatsAppService($action, Array $data, $error = [])
    {
        // validate inputs obrigatory fields for good request
        try {

            //validate action and data is exist
            if(!isset($action) and !isset($data)){
                $error['error'][] = 'action and data are empty';
            }

            //validate action or data is not empty
            if(empty($action) and empty($data)){
                $error['error'][] = 'action and data are not empty';
            }

            //validate action or data is not empty or not null or diff empty
            if($action == '' and $data == '' or $action == null or $data == null){
                $error['error'][] = 'action and data are not empty or null';
            }

            //validate action is a string and serverhost is not empty
            if($action == '' and $data['serverhost'] == ''){
                $error['error'][] = 'action and data or serverhost are not empty or null';
            }

            //validate action is a string and data is array
            if( !is_string($action) or !is_array($data)){
                $error['error'][] = 'data bad request, format action is string and data is array[]';
            }

            //validate sessionkey is not empty
            if( isset($data['sessionkey']) and !is_string($data['sessionkey']) or empty($data['sessionkey'])){
                $error['error'][] = 'sessionkey must be a string or diff of null';
            }

            //validate session is not empty
            if( isset($data['session']) and !is_string($data['session']) or empty($data['session'])){
                $error['error'][] = 'session must be a string or diff of null';
            }

            //validate number exist if number is integer
            if( isset($data['number']) ){

                if( strlen($data['number']) < 10 ) {
                    $error['error'][] = 'number must be a number and length is 10';
                }

            }

            // validate apitoken is not empty
            return isset($error['error']) ? $error : true;

        } catch (\Exception $e) {
            return $e;
        }
    }

}
