<?php

namespace ApiGratis;

class ApiBrasil extends Base
{

    public static function WhatsAppService(string $action = '', array $data = []) {

        try {
            
            //validate inputs obrigatory fields for good request
            $check = self::validateWhatsAppService($action, $data);
            if(isset($check['error'])){
                foreach($check['error'] as $error){
                    echo "<strong>Error: </strong>". $error . "<br/>";
                }
            }

            $curl = curl_init();

            //validate inforequest
            $method = $data['method'] ?? 'POST';
            $server_host = $data['server_host'] ?? '';
            $sessionkey = $data['sessionkey'] ?? '';
            $apitoken = $data['apitoken'] ?? '';
            $server_host = $server_host."/".$action;

            //clear data after send body
            $clear = ['server_host', 'apitoken', 'method'];
            $body = array_diff_key($data, array_flip($clear));
            $header = array(
                'Content-Type: application/json',
                'sessionkey:'.$sessionkey
            );

            if(isset($action) and $action === 'start'){
                $header = array(
                    'Content-Type: application/json',
                    'apitoken:'.$apitoken,
                    'sessionkey:'.$sessionkey
                );
            }

            curl_setopt_array($curl, array(
                CURLOPT_URL => $server_host,
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

            return $callback;

        } catch (\Throwable $th) {
            return ['error' => $th->getMessage()];
        }

    }

}
