<?php
namespace ApiBrasil;

class ApiGratis extends Base
{

    public static function WhatsAppService(string $action = '', array $data = []) {

        try {
            
            $check = self::validateWhatsAppService($action, $data);
            return isset($check['error']) ?? $check['error'];

            $curl = curl_init();
            
            $server_host = $data['server_host'] ?? '';
            $sessionkey = $data['sessionkey'] ?? '';
            $server_host = $server_host."/".$action;

            $clear = ['server_host', 'apitoken'];
            $body = array_diff_key($data, array_flip($clear));

            curl_setopt_array($curl, array(
                CURLOPT_URL => $server_host,
                CURLOPT_RETURNTRANSFER => true,
                CURLOPT_ENCODING => '',
                CURLOPT_MAXREDIRS => 10,
                CURLOPT_TIMEOUT => 0,
                CURLOPT_FOLLOWLOCATION => true,
                CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
                CURLOPT_CUSTOMREQUEST => 'POST',
                CURLOPT_POSTFIELDS => json_encode($body),
                CURLOPT_HTTPHEADER => [ 
                    'sessionkey' => $sessionkey,
                    'Content-Type' => 'application/json'
                ],
            ));
            
            $callback = curl_exec($curl);
            curl_close($curl);

            return $callback;

        } catch (\Throwable $th) {
            throw $th;
        }

    }

}