<?php 
require_once('../conexion.php');
if (isset($_GET['padredelet'])) {
      $sql = 'DELETE FROM User_Padres where id_padre = ?';
      $id = $_GET['padredelet'];
      $statement = $pdo -> prepare($sql);
      $statement -> execute(array($id));
      $result = $statement->fetchAll();
      header('Location: ../padres.php');
}  ?>