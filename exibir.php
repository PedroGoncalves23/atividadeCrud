<table border="1" width="100%">
  <tr>
    <th>Nome</th>
    <th>E-mail</th>
    <th>Celular</th>
    <th>Deletar</th>
  </tr>
  <?php
  try {
    require 'conexao.php';
    require 'Crud.class.php';
    global $conexao;
    $query = 'select * from admin';

    $stmt = $conexao->prepare($query);

    if ($stmt->execute()) {
      $carros = $stmt->fetchAll(PDO::FETCH_ASSOC);
      foreach ($carros as $car) {
        echo "<tr>";
        echo '<td>' . $car['nome'] . '</input>' . "</td><td>" . $car['email'] . "</td><td>" . $car['tel']
          . '</td><td><center><a href=""></a>'
          . "&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
        echo '<a href="excluiradm.php?id=' . $car['id'] . '">Excluir</a><br><br>';
      }
      echo "</tr>";
    } else {
      echo "Erro: Não foi possível recuperar os dados do banco de dados";
    }
  } catch (PDOException $erro) {
    echo "Erro: " . $erro->getMessage();
  }
  ?>
</table>