<?php

class Usuario
{
	public function login($email, $senha)
	{
		global $conexao;

		$sql = "SELECT * FROM admin WHERE email = :email AND senha = :senha";
		$sql = $conexao->prepare($sql);
		$sql->bindValue("email", $email);
		$sql->bindValue("senha", $senha);
		$sql->execute();

		if ($sql->rowCount() > 0) {
			$dado = $sql->fetch();

			$_SESSION['idUser'] = $dado['id'];

			return true;
		} else {
			return false;
		}
	}
	function setNome($nome)
    {
        $this->nome = $nome;
    }

    function getNome()
    {
        return $this->nome;
    }
}
