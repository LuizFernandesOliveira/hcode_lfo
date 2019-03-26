<?php



try{

    throw new Exception("Error", 400);

}catch (Exception $e){

    echo json_encode(array(
        "messege"=>$e->getMessage(),
        "line"=>$e->getLine(),
        "file"=>$e->getFile(),
        "code"=>$e->getCode()
    ));

}

function trataNome($nome){

    if(!$nome){
        throw new Exception("nenhum nome foi informado.", 1);
    }

    echo ucfirst($nome)."<br/>";

}

try{

    trataNome("Luiz");
    trataNome("");

}catch (Exception $e){

    echo $e->getMessage();

}finally{

    echo "Executou o Try";

}