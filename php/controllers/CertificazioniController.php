<?php
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class CertificazioniController
{
  public function index(Request $request, Response $response, $args){
    $db = Db::getInstance();

    //$order = isset($args["order"])?$args["order"]:"ASC";
    if (!isset($args["id_cert"])) {
        $results = $db->select("certificazioni", " alunno_id =" . $args['id'] . ""); // non ho l'id del certificato
    }else{
        $results = $db->select("certificazioni", " alunno_id =" . $args['id'] . " and  id =" . $args['id_cert']); //
    }
    

    $response->getBody()->write(json_encode($results));
    return $response->withHeader("Content-type", "application/json")->withStatus(200);
    
  }
}
