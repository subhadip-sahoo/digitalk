<?php
defined('BASEPATH') OR exit('No direct script access allowed');

require_once dirname(__FILE__) . '/Twilio/Services/Twilio.php';

class Twilio extends Base_Services_Twilio {
    
    protected $sid = 'ACe6ba1b54768c057f24094b4da695d9ce';
    protected $token = '0cb6d9cbc55f5c9a9d8456f998f5e8fd';
    protected $service_sid = 'ISf533e5e2edb541d8ae11359ce6529d3a';
    protected $service;

    public function __construct() {
        $client = new IPMessaging_Services_Twilio($this->sid, $this->token);
        $service = $client->services->get($this->service_sid);
        $this->service = $service;
    }
    
    public function DBUG($var){
        echo '<pre>';
        print_r($var);
        echo '</pre>';
        die();
    }
    
    public function create_channel(){
        $args = array(
            'UniqueName' => '1-2',
            'FriendlyName' => 'Gargi & Sudipta'
        );
        try{
            $channel = $this->service->channels->create($args);
            return $channel;
            $this->DBUG($channel);
        }catch(Services_Twilio_RestException $e){
            $response = array(
                'status' => 'error',
                'message' => $e->getMessage(),
                'statusCode' => $e->getStatus(),
                'errorCode' => $e->getCode(),
            );
            return $response;
        }
    }
}