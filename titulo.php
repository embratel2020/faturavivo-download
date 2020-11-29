<?php
//Atualizado em: 24.11.2020//
//kelly.software@hotmail.com// 
  
function pussy1($qtd) {
    $alphabet = "ABCDEFGHIJLMNOPQRSTUVXZWYKABCDEFGHIJLMNOPQRSTUVXZWYKABCDEFGHIJLMNOPQRSTUVXZWYKABCDEFGHIJLMNOPQRSTUVXZWYKABCDEFGHIJLMNOPQRSTUVXZWYKABCDEFGHIJLMNOPQRSTUVXZWYK"; 
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < $qtd; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}


function pussy2($qtd) {
    $alphabet = "ABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзузABCDEFGHIJLMNOPQRSTUVXZWKYгциамсзуз"; 
    $pass = array(); 
    $alphaLength = strlen($alphabet) - 1; 
    for ($i = 0; $i < $qtd; $i++) {
        $n = rand(0, $alphaLength);
        $pass[] = $alphabet[$n];
    }
    return implode($pass); 
}

  $nafrente = "FATUR4.";
  $titulo1 = $nafrente.pussy2(35);
  $titulo2 = $nafrente.pussy1(4)."".pussy1(6)."".pussy1(8)."".pussy1(10);
 
?>