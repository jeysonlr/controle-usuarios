<?php
header('Content-Type: text/html; charset=utf-8; lang="pt-br"');
require 'config.php';

?>
<a href="adicionar.php">
    <button type="submit">Adicionar Novo Usuario</button>
</a>

<table border ="1" width="100%">
    <tr>
        <th>Nome</th>
        <th>E-mail</th>
        <th>Ações</th>
    </tr>
    <?php

    $sql = "SELECT * FROM usuarios";
    $sql = $pdo->query($sql);
    
    if ($sql->rowCount() > 0) {
       foreach ($sql->fetchAll() as $usuario) {
          echo '<tr>';
          echo '<th>'.$usuario['nome'].'</th>';
          echo '<th>'.$usuario['email'].'</th>';
          echo '<th><a href="editar.php?id='.$usuario['id'].'">Editar</a> - <a href="excluir.php?id='.$usuario['id'].'">Excluir</a></td>';
          echo '</tr>'; 
       }
    }
    ?>

</table>
  