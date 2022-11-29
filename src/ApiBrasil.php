<?php

namespace ApiGratis;

use GuzzleHttp\Exception\ClientException;

class ApiBrasil extends Base
{
    // construct
    public function __construct()
    {
        parent::__construct();
    }

    public static function WhatsAppService(String $action = '', Array $data = []) {

        try {

            //validate inputs obrigatory fields for good request
            $check = self::validateWhatsAppService($action, $data);

            if(isset($check['error'])){
                //loop error
                foreach($check['error'] as $error){
                    echo "<strong>Error: </strong>". $error . "<br/>";
                }
                die;
            }

            //validate inforequest
            $method = $data['method'] ?? 'POST';
            $base_uri = $data['serverhost'] ?? '';
            $sessionkey = $data['sessionkey'] ?? '';
            $apitoken = $data['apitoken'] ?? '';
            $session = $data['session'] ?? '';

            //clear data after send body
            $clear = ['serverhost', 'apitoken', 'method'];
            $body = array_diff_key($data, array_flip($clear));

            $headers = [
                'sessionkey' => $sessionkey
            ];

            //verify is a start, is true, add new apitoken in headers
            if(isset($action) and $action === 'start'){

                $headers = [
                    'apitoken' => $apitoken,
                    'sessionkey' => $sessionkey
                ];

                $body = [
                    'session' => $session,
                    'wh_status' => $data['wh_status'] ?? '',
                    'wh_message' => $data['wh_message']  ?? '',
                    'wh_connect' => $data['wh_connect']  ?? '',
                    'wh_qrcode' => $data['wh_qrcode'] ?? '',
                ];

            }

            //send parameters qrcode get
            if(isset($action) and $action === 'qrcode'){
                $action = $action."?session=$session&sessionkey=$sessionkey";
            }

            //guzzle json request post with headers
            $response = self::defaultRequest($method, $base_uri, $action, $headers, $body);

            //return response json
            return $response;

        } catch (ClientException $e) {

            // return exception error
            $response = $e->getResponse();
            return json_decode((string)($response->getBody()));

        }

    }

}
