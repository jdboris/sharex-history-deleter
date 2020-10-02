<?php
header("Access-Control-Allow-Origin: *");
header("Access-Control-Allow-Methods: POST,GET,PUT,DELETE");
header("Access-Control-Allow-Headers: Origin, X-Requested-With, Content-Type, Accept");

if ($_SERVER["REQUEST_METHOD"] == "PUT") {
    $data = json_decode( file_get_contents("php://input") );

    if(is_file("../History.json") && property_exists( $data, "history" ) && count( $data->history ) > 0){
        
        file_put_contents("../History.json", trim( json_encode($data->history), "[]" ));
    }
}

?>