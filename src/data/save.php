<?php

//cod
if( isset($_POST['cod']) ) {
    $cod = $_POST['cod'];
} else {
    $cod = null;
}

//ingredientes
if( isset($_POST['ingredientes']) ) {
    $ingredientes = $_POST['ingredientes'];
} else {
    $ingredientes = null;
}

//qtde
if( isset($_POST['qtde']) ) {
    $qtde = $_POST['qtde'];
} else {
    $qtde = null;
}

//pgto
if( isset($_POST['pgto']) ) {
    $pgto = $_POST['pgto'];
} else {
    $pgto = null;
}

//card_flag
if( isset($_POST['card-flag']) ) {
    $cardFlag = $_POST['card-flag'];
} else {
    $cardFlag = null;
}

var_dump($cod);
var_dump($ingredientes);
var_dump($qtde);
var_dump($pgto);
var_dump($cardFlag);