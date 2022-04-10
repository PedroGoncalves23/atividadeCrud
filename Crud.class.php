<?php
class crud
{
    public function cadastro()
    {
        $query = 'insert into admin values (null,:nome,:email,:senha,:tel,:cpf);';

        global $conexao;
        $stmt = $conexao->prepare($query);

        $stmt->bindValue(':nome', $_POST['nome']);
        $stmt->bindValue(':email', $_POST['email']);
        $stmt->bindValue(':senha', $_POST['senha']);
        $stmt->bindValue(':tel', $_POST['tel']);
        $stmt->bindValue(':cpf', $_POST['cpf']);

        $stmt->execute();
    }

    public function login()
    {
        if (isset($_POST['email']) && !empty($_POST['email']) && isset($_POST['senha']) && !empty($_POST['senha'])) {

            require 'conexao.php';
            require 'Usuario.class.php';

            $u = new Usuario();

            $email = addslashes($_POST['email']);
            $senha = addslashes($_POST['senha']);

            if ($u->login($email, $senha) == true) {
                if (isset($_SESSION['idUser'])) {
                    header("location: exibir.php");
                } else {
                    header("location: login.php");
                }
            } else {
                header("location: login.php");
            }
        } else {
            header("location: login.php");
        }
    }


    public function excluir(){
        $query = 'delete from admin  where id = :id;';

        global $conexao;
        $stmt = $conexao->prepare($query);

    
        $stmt->bindValue(':id',$_GET['id']);

        $stmt->execute();

        echo "<h1>Administrador excluido com sucesso!</h1>";
        echo '<a href="exibir.php">aaaa</a>';
    }
}
