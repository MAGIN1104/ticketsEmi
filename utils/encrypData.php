<?php
$develop=["turno1","192.168.1.107:8080"];
$production=["diego","34.125.59.98:8080"];

function cuname(){
    return base64_encode("diego");
}
function cpwd(){
    return base64_encode("diego");
}
function cip(){
    return base64_encode("http://34.125.59.98:8080");
}