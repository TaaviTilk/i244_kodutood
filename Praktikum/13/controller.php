<?php

function controller_add($nimetus, $kogus)
{
    // kontrollime kas sisendväärtused on oodatud kujul või mitte
    if ($nimetus == '' || $kogus <= 0) {
        return false;
    }

    return model_add($nimetus, $kogus);
}

function controller_delete($id)
{
    if ($id <= 0) {
        return false;
    }

    return model_delete($id);
}
function controller_register($kasutajanimi, $parool){
    if($kasutajanimi=="" || $parool == ""){
        return FALSE;
    }
    return model_user_add($kasutajanimi, $parool);
}
function controller_user(){
    if(empty($_SESSION['login'])){
        return FALSE;
    }
    return $_SESSION['login'];
}