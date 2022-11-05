<?php

namespace ApiGratis;

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
            $serverhost = $data['serverhost'] ?? '';
            $sessionkey = $data['sessionkey'] ?? '';
            $apitoken = $data['apitoken'] ?? '';
            $session = $data['session'] ?? '';
            
            $host = $serverhost."/".$action;

            //clear data after send body
            $clear = ['serverhost', 'apitoken', 'method'];
            $body = array_diff_key($data, array_flip($clear));
            $header = array(
                'Content-Type: application/json',
                'sessionkey:'.$sessionkey
            );

            //verify is a start, is true, add new apitoken in header
            if(isset($action) and $action === 'start'){

                $header = array(
                    'Content-Type: application/json',
                    'apitoken:'.$apitoken,
                    'sessionkey:'.$sessionkey
                );
                
                $body = array(
                    'session' => $session,
                    'wh_status' => $data['wh_status'],
                    'wh_message' => $data['wh_message'],
                    'wh_connect' => $data['wh_connect'],
                    'wh_qrcode' => $data['wh_qrcode']
                );

            }
            
            //send parameters qrcode get
            if(isset($action) and $action === 'qrcode'){
                $host = $serverhost."/".$action."?session=$session&sessionkey=$sessionkey";
            }

            //guzzle json request post with header
            $response = self::defaultRequest($method, $host, $header, $body);
            
            //return response json
            return $response;

        } catch (\Throwable $th) {
            return ['error' => $th->getMessage()];
        }

    }

}
