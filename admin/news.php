<?php
  include "../koneksi.php";
?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Buat Informasi Terkini</title>

  <!-- Bootstrap CSS -->
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">

</head>
<body>

  <section class="row">
    <div class="col-md-6 offset-md-3 align-self-center"> 
      <h1 class="text-center mt-4">Informasi Terkini</h1>
      <form method="POST">
        <div class="mb-3">
          <label for="inputJudul" class="form-label">Judul</label>
          <input type="text" class="form-control" id="inputJudul" name="judul" placeholder="Masukan Judul agenda">
        </div>
        <div class="mb-3">
          <label for="inputIsi" class="form-label">Keterangan</label>
          <textarea type="text" class="form-control" id="inputIsi" name="isi" placeholder="Masukan Keterangan agenda"></textarea>
        </div>
        <input name="submit" type="submit" class="btn btn-primary" value="Tambah">
        <a href="index.php" type="button" class="btn btn-info text-white">Kembali</a>
      </form>
    </div>
  </section>

  <?php
    
    // Buat kondisi jika tombol data di klik
    if(isset($_POST['submit'])){
      // Membuat variable setiap field inputan agar kodingan lebih rapi.
      $judul = $_POST['judul'];
      $isi = $_POST['isi'];
      $create_at = $_POST['create_at'];

      // Membuat Query
      $query = "INSERT INTO tbl_informasi (judul, isi, create_at) VALUES('".$judul."', '".$isi."', '".$create_at."')";

      $result = mysqli_query($link, $query);

      if($result){
        header("location: news.php");
      } else {
        echo "<script>alert('Data Gagal di tambahkan!')</script>";
      }

    }    

  ?>

</body>
</html>