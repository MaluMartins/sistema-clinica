<?php
require_once 'conexao/conexao.php'; 
require_once 'model/patologia.model.php'; 
require_once 'service/patologia.service.php'; 

@$acaoPato = isset($_GET['acaoPato'])?$_GET['acaoPato']:$acaoPato;
@$id = isset($_GET['id'])?$_GET['id']:$id;


if($acaoPato=='inserir'){
	$patologia = new Patologia();
	$patologia->__set('nome',$_POST['nome']);

	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologiaService->inserir();
	header('location: index.php?link=3');
}else if($acaoPato=='recuperar'){
	$patologia = new Patologia();
	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologia = $patologiaService->recuperar();

}else if($acaoPato=='recuperarPatologia'){
	$patologia = new Patologia();
	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologia = $patologiaService->recuperarPatologia($id);
	
}else if($acaoPato=='alterar'){
	$patologia = new Patologia();
	$patologia->__set('nome',$_POST['nome']);
	$patologia->__set('id', $_POST['id']);

	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologiaService->alterar();
	header('location: index.php?link=3');

}else if($acaoPato=='remover'){
	$patologia = new Patologia();
	$patologia->__set('id',$_POST['id']);
	
	$conexao = new Conexao();
	
	$patologiaService = new PatologiaService($patologia, $conexao);
	$patologiaService->remover();
	header('location: index.php?link=3');
}

?>