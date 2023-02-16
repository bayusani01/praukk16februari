<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Bahan</title>
</head>
<body>
  <center>
    <h1>Tambah Data</h1>
    </center>
        <table border="1">
          <form action="proses_tambah.php"method="POST">
        <fieldset>
           <p>
             <label for="id_user>"></label>
           </p>
           <p>
            <label for="nama_user">nama user</label>
            <input type="text"name="nama_user">
           </p>
           <p>
            <label for="jabatan">jabatan</label>
            <input type="text"name="jabatan">
           </p>
           <p>
            <label for="nama_bahan">nama bahan</label>
            <input type="text"name="nama_bahan">
           </p>
           <p>
            <label for="jenis_bahan">jenis bahan</label>
            <input type="text"name="jenis_bahan">
           </p>
           <p>
            <label for="stok">stok</label>
            <input type="number"name="stok">
           </p>
           <p>
            <label for="harga">harga</label>
            <input type="number"name="harga">
           </p>
           <p>
            <label for="kondisi">kondisi</label>
            <select name="kondisi" id="">
              <option value="baik">baik</option>
              <option value="rusak">rusak</option>
            </select>
           </p>
           <p>
            <label for="tgl_masuk">tgl_masuk</label>
            <input type="date"name="tgl_masuk">
           </p>
           <p>
            <input type="submit" name="kirim" value="kirim">
           </p>

        </fieldset>
        </form>
   
    <button>
      <a href="tampil.php">back</a>
    </button>
</body>
</html>