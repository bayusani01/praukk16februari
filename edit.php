<?php
include("koneksi.php");
if(!isset($_GET['id'])){
    header("location:tampil.php?");
}
   $id=$_GET['id'];
   $sql="SELECT * FROM tb_user INNER JOIN tb_bahan WHERE tb_user.id_user ='$id'";
   $query= mysqli_query($db, $sql);
   $user= mysqli_fetch_assoc($query);

   if(mysqli_num_rows($query) < 1){
    die ("Data tidak ditemukan");
   }
   ?>

<html>
<head>
</head>
<body>
    <h1>Edit </h1>
    <form action="proses_edit.php" method="POST">
        <fieldset>
        <input type="hidden" name="id_user" value="<?php echo $user['id_user']?>" />
            <p>
                <label for="nama_user">nama user </label>
                <input type="text" name="nama_user" value="<?php echo $user['nama_user']?>"/>
           </p>
           <p>
           <label for="jabatan">jabatan :</label>
                <input type="text" name="jabatan"  value="<?php echo $user['jabatan']?>"/>
           </p>
           <p>
                <label for="nama_bahan">nama bahan</label>
                <input type="text" name="nama_bahan" value="<?php echo $user['nama_bahan']?>"/>
           </p>
           <p>
                <label for="jenis_bahan">jenis bahan</label>
                <input type="text" name="jenis_bahan" value="<?php echo $user['jenis_bahan']?>"/>
           </p>
           <p>
                <label for="stok">stok</label>
                <input type="number" name="stok" value="<?php echo $user['stok']?>"/>
           </p>
           <p>
                <label for="harga">harga  :</label>
                <input type="number" name="harga" value="<?php echo $user['harga']?>"/>
           </p>
           <p>
                <label for="kondisi">kondisi</label>
                <input type="radio" name="kondisi" value="<?php echo $user['kondisi']?>"/>baik
                <input type="radio" name="kondisi" value="<?php echo $user['kondisi']?>"/>rusak
           </p>
           <p>
                <label for="tgl_masuk">tgl masuk</label>
                <input type="date" name="tgl_masuk" value="<?php echo $user['tgl_masuk']?>"/>
           </p>
           
           <input type="submit" value="Edit" name="edit" />
</p>
        </fieldset>
</form>
</body>
</html>