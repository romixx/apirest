<?php
 defined('BASEPATH') OR exit('No direct script access allowed');
class Soapservice extends CI_Controller
{

    public function index()
    {    
        $ns = base_url().'soapserver';  
        $this->load->library("Nusoap_library"); // cargar libreria
        $this->nusoap_server = new soap_server(); //instanciamos soap server
        $this->nusoap_server->configureWSDL("SOAP Server", $ns); // wsdl cinfiguration
        $this->nusoap_server->wsdl->schemaTargetNamespace = $ns; // server namespace 
        
        function addnumbers($a,$b)
        {
            $c = $a + $b;
            return $c;
        }

        $input_array = array ('a' => "xsd:string", 'b' => "xsd:string"); // "addnumbers" method parameters
        $return_array = array ("return" => "xsd:string");
        $this->nusoap_server->register('addnumbers', $input_array, $return_array, "urn:SOAPServerWSDL", "urn:".$ns."addnumbers", "rpc", "encoded", "Suma de dos numeros");
        $this->nusoap_server->service(file_get_contents("php://input")); // read raw data from request body
    }
    
    
}
?>