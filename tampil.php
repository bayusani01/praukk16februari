<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Document</title>
</head>
<body>
      <center>
      <table border="1";>
        <button>
          <a href="index.php">Menu Utama</a>
        </button>
        <tr>
          <td>no</td>
          <td>nama user</td>
          <td>jabatan</td>
          <td>nama bahan</td>
          <td>jenis bahan</td>
          <td>stok</td>
          <td>harga</td>
          <td>kondisi</td>
          <td>tgl masuk</td>
          <td>mengubah</td>
        </tr> 
    
   <?php
     include("koneksi.php");
     $sql="SELECT * FROM tb_user INNER JOIN tb_bahan ON tb_user.id_bahan=tb_bahan.id_bahan";
     $query=mysqli_query($db, $sql);
     while($user=mysqli_fetch_array($query)){
      echo "<tr>";
                 echo "<td>".$user['id_user']."</td>";
                 echo "<td>".$user['nama_user']."</td>";
                 echo "<td>".$user['jabatan']."</td>";
                 echo "<td>".$user['nama_bahan']."</td>";
                 echo "<td>".$user['jenis_bahan']."</td>";
                 echo "<td>".$user['stok']."</td>";
                 echo "<td>".$user['harga']."</td>";
                 echo "<td>".$user['kondisi']."</td>";
                 echo "<td>".$user['tgl_masuk']."</td>";
                 echo "<td>";
                 echo "<a href='edit.php?id=".$user['id_user']."'>Edit</a> |";
                 echo "<a href='hapus.php?id=".$user['id_user']."'>hapus</a>";
                 echo "</td>";
      echo "</tr>";
     }
  ?>
  <button>
    <a href="tambah.php">Tambah</a>
  </button>

  </center>

</body>
</html>