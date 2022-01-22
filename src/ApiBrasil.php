<?php

namespace ApiGratis;

class ApiBrasil extends Base
{

    public static function WhatsAppService(string $action = '', array $data = []) {

        try {
            
            //validate inputs obrigatory fields for good request
            $check = self::validateWhatsAppService($action, $data);
            if(isset($check['error'])){
                //loop error
                foreach($check['error'] as $error){
                    echo "<strong>Error: </strong>". $error . "<br/>";
                }
                exit();
            }
            
            //init curl
            $curl = curl_init();

            //validate inforequest
            $method = $data['method'] ?? 'POST';
            $serverhost = $data['serverhost'] ?? '';
            $sessionkey = $data['sessionkey'] ?? '';
            $apitoken = $data['apitoken'] ?? '';
            $session = $data['session'] ?? '';
            $serverhost = $serverhost."/".$action;

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
            }
            
            //send parameters qrcode get
            if(isset($action) and $action === 'qrcode'){
                $serverhost = $serverhost."/".$action."?session=$session&sessionkey=$sessionkey";
            }

            //request default
            curl_setopt_array($curl, array(
                CURLOPT_URL => $serverhost,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_SSL_VERIFYHOST => false,
                CURLOPT_SSL_VERIFYPEER => false,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => $method,
                CURLOPT_POSTFIELDS => json_encode($body),
                CURLOPT_HTTPHEADER => $header,
            ));
            
            $callback = curl_exec($curl);
            curl_close($curl);

            //return callback json
            return $callback;

        } catch (\Throwable $th) {

            // return error
            return ['error' => $th->getMessage()];
        }

    }

}
