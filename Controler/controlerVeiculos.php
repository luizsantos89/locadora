<?php
    require_once('../Model/VeiculoDAO.php');
    session_start();
    
    $opcao = (int)$_REQUEST['opcao'];
    
    if($opcao == 1){		
        $veiculoDAO = new VeiculoDAO();

        $veiculos = $veiculoDAO->getVeiculos();
        
        if(isset($_SESSION['veiculos'])) {
            unset($_SESSION['veiculos']);
        }
       
        
        $_SESSION['veiculos'] = $veiculos;

        Header("Location:../Acervo.php");
    }
