<!DOCTYPE html>
<html>
<head>
<style>
.card-header {
  background-color: #900C3F;
  color:  white;
}
.card-footer {
  background-color: #900C3F;
  color:  white;
}
</style>
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-sm-2">
        <?php 
        if($_GET['edit']=='edit-rusak'){
          $sqledit = $conn -> query("SELECT * FROM barang_rusak WHERE id='$_GET[id]'");
          $rview=$sqledit -> fetch_array();
        ?>
        <div class="card">
          <div class="card-header">Edit Data Aset Keluar (Buang)</div>
          <div class="card-body">
              <form action="" method="POST">
                <input type="text" class="form-control" name="idaset" value="<?=$rview['id']?>" hidden>
                <div class="form-group">
                  <label>Nomor Label</label>
                  <input type="text" name="no" value="<?=$rview['kode_brg']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nm" value="<?=$rview['nama']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="text" name="jenis" value="<?=$rview['jenis']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tanggal Buang</label>
                  <input type="date" name="tgl" value="<?=$rview['tgl']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jumlah Buang</label>
                  <input type="number" name="jml" value="<?=$rview['jml']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Lokasi Akhir</label>
                  <select name="loc" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="Aula">Aula</option>
                    <option value="Lab. Komputer">Lab. Komputer</option>
                    <option value="Kantin">Kantin</option>
                    <option value="Parkiran">Parkiran</option>
                    <option value="Toilet">Toilet</option>
                    <option value="Kelas 10">Kelas 10</option>
                    <option value="Kelas 11">Kelas 11</option>
                    <option value="Kelas 12">Kelas 12</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="btnedit">Edit</button>
              </form>
          </div>
          <div class="card-footer"></div>
        </div>
<?php 
if(isset($_POST['btnedit'])){

  $sql="UPDATE barang_rusak 
    SET kode_brg='$_POST[no]', 
        nama='$_POST[nm]',
        jenis='$_POST[jenis]', 
        tgl='$_POST[tgl]', 
        jml='$_POST[jml]', 
        lok='$_POST[loc]' 
    WHERE id='$_POST[idaset]'";

  $sqlpro = $conn -> query($sql);
  if($sqlpro){
    echo "<script>alert('Data berhasil diedit');document.location.href='?page=rusak';</script>";
  }else{
    echo "<script>alert('Data gagal diedit');document.location.href='?page=rusak';</script>";
  }
  echo $sql;
}
}else{
?>
        <div class="card">
          <div class="card-header">Input Data Aset Keluar (Buang)</div>
          <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <label for="nolabel">Nomor Label</label>
                  <input type="text" class="form-control" placeholder="No. Label" name="no">
                </div>
                <div class="form-group">
                  <label for="nama">Nama Barang</label>
                  <input type="text" class="form-control" placeholder="Nama barang" name="nm">
                </div>
                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="text" name="jenis" placeholder="Jenis barang" value="<?=$rview['jenis']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label for="tgl">Tanggal Buang</label>
                  <input type="date" class="form-control" name="tgl">
                </div>
                <div class="form-group">
                  <label for="jml">Jumlah Buang</label>
                  <input type="number" class="form-control" placeholder="Jumlah" name="jml">
                </div>
                <div class="form-group">
                  <label for="loc">Lokasi Akhir</label>
                  <select name="loc" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="Aula">Aula</option>
                    <option value="Lab. Komputer">Lab. Komputer</option>
                    <option value="Kantin">Kantin</option>
                    <option value="Parkiran">Parkiran</option>
                    <option value="Toilet">Toilet</option>
                    <option value="Kelas 10">Kelas 10</option>
                    <option value="Kelas 11">Kelas 11</option>
                    <option value="Kelas 12">Kelas 12</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="btn">Submit</button>
              </form>
          </div>
          <div class="card-footer"></div>
        </div>
      <?php } ?>
      </div>

      <?php
      if(isset($_POST['btn'])){
          $a = $_POST['no'];
          $b = $_POST['nm'];
          $c = $_POST['jenis'];
          $d = $_POST['tgl'];
          $e = $_POST['jml'];
          $f = $_POST['loc'];

          $sql = $conn -> query("INSERT INTO barang_rusak VALUES('','$a','$b','$c','$d','$e','$f')");
          //$sql = $conn -> query("CALL barangrusak('$kode_brg','$nama')");

          if($sql){
            echo"<script>alert('Data Berhasil Masuk');</script>";
          } else{
            echo"<script>alert('Data Gagal Masuk');</script>";
          }
        }
        ?>
      
      <div class="col-sm-10">
        <div class="card">
          <div class="card-header">Output Data Aset Keluar (Buang)</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Label</th>
                  <th>Nama Barang</th>
                  <th>Jenis Barang</th>
                  <th>Tgl Buang</th>
                  <th>Jml Buang</th>
                  <th>Lok. Akhir</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

            <?php 
              $no = 0;
              $sqli = $conn->query("SELECT * FROM barang_rusak");
              while ($res = $sqli->fetch_array())
              {
            ?>
                <tr>
                  <td><?=$no=$no+1?></td>
                  <td><?=$res['kode_brg']?></td>
                  <td><?=$res['nama']?></td>
                  <td><?=$res['jenis']?></td>
                  <td><?=$res['tgl']?></td>
                  <td><?=$res['jml']?></td>
                  <td><?=$res['lok']?></td>
                  <td><a href="?page=rusak&edit=edit-rusak&id=<?=$res['id']?>" class="btn btn-primary btn-sm">Ubah</a> &nbsp; 
                      <a href="?page=rusak&hapus=hapus-rusak&id=<?=$res['id']?>" class="btn btn-danger btn-sm">Hapus</a>
                  </td>
                </tr>
            <?php 
            } 
            if($_GET['hapus']=='hapus-rusak'){
              $sqlhapus = $conn -> query("DELETE FROM barang_rusak WHERE id='$_GET[id]'");
              if($sqlhapus){
                echo "<script>document.location.href='?page=rusak';</script>";
              }else{
                echo "<script> document.location.href='?page=rusak';</script>";
                }
            }
            ?>

              </tbody>
            </table>
          </div>
          <div class="card-footer"></div>
        </div>

      </div>
    </div>
</div> 
</body>
</html>
