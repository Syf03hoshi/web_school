<?php

  include "../koneksi.php";

  $id = $_GET['id'];
  $query = "DELETE FROM tbl_informasi WHERE id = $id";
  $result = mysqli_query($link, $query);
  if($result){
    header("location: tables.inf.php");
  }

?>