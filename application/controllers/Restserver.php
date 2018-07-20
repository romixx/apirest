<?php
    defined('BASEPATH') OR exit('No direct script access allowed');
    //use Restserver\Libraries\REST_Controller;
    require(APPPATH.'libraries\REST_Controller.php');
    class Restserver extends REST_Controller {
    /*
        public function __construct() {
            parent::__construct();
            // cargo los modelos comunes
            //$this->load->database();
            $this->load->helper('url');
            $this->load->library('session');
            //$this->load->model('Users');
    
            if ($_SERVER['PHP_AUTH_USER'] == "root" && $_SERVER['PHP_AUTH_PW'] == "12345") {
                return true;
            }
    
            $this->error();
            exit;
        }
    
        private function error() {
            echo json_encode(["status" => "Bad authentication"]);
        }*/
        
        // se accede con http://miservidor/apirest/Restserver/prueba?format=json
        public function prueba_get() {
            $res=array("Respuesta"=>"Hola mundo");
            $this->response($res);
        }


    }
?>