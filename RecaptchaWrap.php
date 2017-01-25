<?php

class RecaptchaWrap
{

    public function verifyCaptcha($response, $secret){



            $url = "https://www.google.com/recaptcha/api/siteverify";
            $params_string = '';
            $params = array(

                'secret' => urlencode($secret),
                'response' => urlencode($response)


            );
            foreach($params as $key=>$value){

                $params_string .= $key.'='.$value.'&';

            }
            $curl = curl_init();

            curl_setopt($curl, CURLOPT_URL, 'https://www.google.com/recaptcha/api/siteverify');
            curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
            curl_setopt($curl, CURLOPT_HEADER, false);
            curl_setopt($curl, CURLOPT_POST, count($params_string));
            curl_setopt($curl, CURLOPT_POSTFIELDS, $params_string);

            $output = curl_exec($curl);
            curl_close();
            if (strpos($output, 'true')){
                return true;

            }else{
                return false;


            }


        }






}
