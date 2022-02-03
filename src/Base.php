<?php

namespace ApiGratis;

class Base
{

    public static function validateWhatsAppService($action, array $data, $error = [])
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

            return isset($error['error']) ? $error : true;
            
        } catch (\Exception $e) {
            return $e;
        }
    }
    
}
