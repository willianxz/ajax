<?php

if(isset($_GET['id'])){
	
	$id = $_GET['id'];
	
	switch ($id) {
		case 0:
			echo "Cadastro realizado com sucesso!";			
			break;
			//Executa os procedimentos de cadastrar e imprimi a menssagem de cadastrado com sucesso ou não.
			
		case 1:
			echo "Exclusão realizada com sucesso!";
			break;
			//Executa os procedimentos de excluir e imprimi a menssagem de excluido com sucesso ou não.
		case 2:
			echo "Edição habilitada com sucesso!";
			break;
		   //Executa os procedimentos de habilitar a edição e imprimi a menssagem de edição habilitada com sucesso ou não.
		  
		case 3:
			echo "Pesquisa realizada com sucesso!";
			break;
		   //Executa os procedimentos de pesquisar e imprimi a menssagem de tantos cadastros encontrados ou não.
	}
	
	echo "</br>"; //Aqui da uma quebra de linha, fluflu
	echo "ID passado: ".$_GET['id']; //Aqui mostra o id do botão clicado.
}


?>