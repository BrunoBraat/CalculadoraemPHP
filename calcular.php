<?php

	require_once 'Classes/Calculadora.php';

	$numero1 = $_POST['numero1'];//recupera o valor inserido no input numero 1
	$numero2 = $_POST['numero2'];//recupera o valor inserido no input numero 2
	$operacao = $_POST['operacao'];//recupera o valor inserido no input operacao

	$calculadora = new Calculadora();

	//setar os valores
	$calculadora->setNumero1( $numero1 );
    $calculadora->setNumero2( $numero2 );

    

    switch ($operacao) {

    	case 'somar':
    	$calculadora->somar();
    	break;

    	case 'subtrair':
    	$calculadora->subtrair();
    	break;

    	case 'multiplicar':
    	$calculadora->multiplicar();
    	break;

    	case 'dividir':
    	$calculadora->dividir();
    	break;


    }

    echo $calculadora->getTotal();


?>