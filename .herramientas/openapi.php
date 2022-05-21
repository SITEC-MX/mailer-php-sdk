<?PHP

/* Este archivo es generado automáticamente por la herramienta generar_openapi_json ### NO MODIFICAR MANUALMENTE ### */

$OPENAPI = array
(
	"/^enviar$/U" => array("script_php_ruta"=>"enviar", "variables"=>array(), "metodos"=>array("POST"=>array("autenticar"=>TRUE, "get"=>array(), "body"=>array("remitente"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("nombre"=>array("tipo"=>6, "requerido"=>FALSE), "email"=>array("tipo"=>6, "requerido"=>TRUE))), "destinatarios"=>array("tipo"=>12, "requerido"=>TRUE, "arreglo"=>array("nombre"=>array("tipo"=>6, "requerido"=>FALSE), "email"=>array("tipo"=>6, "requerido"=>TRUE))), "copias"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("nombre"=>array("tipo"=>6, "requerido"=>FALSE), "email"=>array("tipo"=>6, "requerido"=>TRUE))), "copiasocultas"=>array("tipo"=>12, "requerido"=>FALSE, "arreglo"=>array("nombre"=>array("tipo"=>6, "requerido"=>FALSE), "email"=>array("tipo"=>6, "requerido"=>TRUE))), "asunto"=>array("tipo"=>6, "requerido"=>TRUE), "cuerpo"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("html"=>array("tipo"=>6, "requerido"=>FALSE), "txt"=>array("tipo"=>6, "requerido"=>FALSE), "url"=>array("tipo"=>6, "requerido"=>FALSE)))), "body_tipo"=>"application/json", "respuesta"=>array("estado"=>array("tipo"=>3, "requerido"=>TRUE), "mensaje"=>array("tipo"=>6, "requerido"=>TRUE), "resultado"=>array("tipo"=>11, "requerido"=>TRUE, "propiedades"=>array("id"=>array("tipo"=>6, "requerido"=>FALSE)))), "respuesta_tipo"=>"application/json")))
);
