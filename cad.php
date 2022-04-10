<?php
    require 'conexao.php';
    require 'Crud.class.php';

    $cad = new Crud();
    $cad->cadastro();

        echo "<h1>Médico cadastrado com sucesso!</h1>";
        echo '<a href="cadastroTela.php">Cadastrar novo médico</a>'."<br>";
        echo '<a href="index.php">Voltar para login</a>';
   // } catch(PDOException $error) {
    //    echo "Erro na conexão com MySql: ".$error->getMessage();
    //}