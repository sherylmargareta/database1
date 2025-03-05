<!DOCTYPE html>
<html>
<head>
<style>
.card-header {
  background-color: #33ACFF;
  color:  white;
}
.card-footer {
  background-color: #33ACFF;
  color:  white;
}
</style>
</head>

<body>
<div class="container">
    <div class="row">
      <div class="col-sm-2">
        <?php 
        if($_GET['edit']=='edit-menu'){
          $sqledit = $conn -> query("SELECT * FROM barang_masuk WHERE id='$_GET[id]'");
          $rview=$sqledit -> fetch_array();
        ?>

        <div class="card">
          <div class="card-header">Edit Data Aset Masuk</div>
          <div class="card-body">
              <form action="" method="POST">
                <input type="text" class="form-control" name="idaset" value="<?=$rview['id']?>" hidden>
                <div class="form-group">
                  <label>Nomor Label</label>
                  <input type="text" name="no" value="<?=$rview['kode_brg']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" name="nm"value="<?=$rview['nama']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="text" name="jenis" value="<?=$rview['jenis']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tanggal Masuk</label>
                  <input type="date" name="tgl" value="<?=$rview['tgl']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Thn Perolehan</label>
                  <input type="text" name="thn" value="<?=$rview['thn']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jml Brg (unit)</label>
                  <input type="number" name="jml" value="<?=$rview['jumlah']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Harga Satuan (Rp)</label>
                  <input type="text" name="hrg" value="<?=$rview['hrg']?>" class="form-control">
                </div>
                <div class="form-group">
                  <label>Lokasi</label>
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
                <div class="form-group">
                  <label>Kondisi</label>
                  <select name="condt" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="Hilang">Hilang</option>
                    <option value="Rusak">Rusak</option>
                    <option value="Baik">Baik</option>
                  </select>
                </div>
                <button type="submit" class="btn btn-primary" name="btnedit">Edit</button>
              </form>
          </div>
          <div class="card-footer"></div>
        </div>

<?php 
if(isset($_POST['btnedit'])){

$sql = "UPDATE barang_masuk 
    SET kode_brg='$_POST[no]', 
        nama='$_POST[nm]',
        jenis='$_POST[jenis]', 
        tgl='$_POST[tgl]',
        thn='$_POST[thn]',  
        jumlah='$_POST[jml]',
        hrg='$_POST[hrg]', 
        loc='$_POST[loc]', 
        condi='$_POST[condt]' 
    WHERE id='$_POST[idaset]'";

  $sqlpro = $conn -> query($sql);
  if($sqlpro){
    echo"<script>alert('Data berhasil diedit');document.location.href='?page=menu'</script>";
  }else{
    echo"<script>alert('Data gagal diedit');document.location.href='?page=menu'</script>";
  }

    echo $sql;
}
}else{
?>
        <div class="card">
          <div class="card-header">Input Data Aset Masuk</div>
          <div class="card-body">
              <form action="" method="POST">
                <div class="form-group">
                  <label>Nomor Label</label>
                  <input type="text" placeholder="No. Label" name="no" class="form-control">
                </div>
                <div class="form-group">
                  <label>Nama Barang</label>
                  <input type="text" placeholder="Nama barang" name="nm" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jenis Barang</label>
                  <input type="text" placeholder="Jenis barang" name="jenis" class="form-control">
                </div>
                <div class="form-group">
                  <label>Tgl Masuk</label>
                  <input type="date" name="tgl" class="form-control">
                </div>
                <div class="form-group">
                  <label>Thn Perolehan</label>
                  <input type="text" name="thn" placeholder="Thn perolehan" class="form-control">
                </div>
                <div class="form-group">
                  <label>Jml Brg (unit)</label>
                  <input type="number" placeholder="Jumlah" name="jml" class="form-control">
                </div>
                <div class="form-group">
                  <label>Harga Satuan (Rp)</label>
                  <input type="text" placeholder="Harga" name="hrg" class="form-control">
                </div>
                <div class="form-group">
                  <label>Lokasi</label>
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
                <div class="form-group">
                <label>Kondisi</label>
                  <select name="condt" class="form-control">
                    <option value="">--Pilih--</option>
                    <option value="Hilang">Hilang</option>
                    <option value="Rusak">Rusak</option>
                    <option value="Baik">Baik</option>
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
          $e = $_POST['thn'];
          $f = $_POST['jml'];
          $g = $_POST['hrg'];
          $h = $_POST['loc'];
          $i = $_POST['condt'];

          $sql = $conn -> query("INSERT INTO barang_masuk VALUES('','$a','$b','$c','$d','$e','$f','$g','$h','$i')");
          //$sql = $conn -> query("CALL barangmasuk('$kode_brg','$nama')");

          if($sql){
            echo"<script>alert('Data Berhasil Masuk');</script>";
          } else{
            echo"<script>alert('Data Gagal Masuk');</script>";
          }
        }
      ?>

      <div class="col-sm-10">
        <div class="card">
          <div class="card-header">Output Data Aset Masuk</div>
          <div class="card-body">
            <table class="table">
              <thead>
                <tr>
                  <th>No.</th>
                  <th>No. Label</th>
                  <th>Nama Brg</th>
                  <th>Jenis Brg</th>
                  <th>Tgl Masuk</th>
                  <th>Thn Perolehan</th>
                  <th>Jml Brg (unit)</th>
                  <th>Harga @</th>
                  <th>Lokasi</th>
                  <th>Kondisi</th>
                  <th>Aksi</th>
                </tr>
              </thead>
              <tbody>

                  <?php
                    
                    $no = 0;
                    $query = $conn -> query("SELECT * FROM barang_masuk");
                    while ($res = $query->fetch_array()) {
                  ?>
                      <tr>
                        <td><?=$no=$no+1?></td>
                        <td><?=$res['kode_brg']?></td>
                        <td><?=$res['nama']?></td>
                        <td><?=$res['jenis']?></td>
                        <td><?=$res['tgl']?></td>
                        <td><?=$res['thn']?></td>
                        <td><?=$res['jumlah']?></td>
                        <td><?=$res['hrg']?></td>
                        <td><?=$res['loc']?></td>
                        <td><?=$res['condi']?></td>
                        <td><a href="?page=menu&edit=edit-menu&id=<?=$res['id']?>" class="btn btn-primary btn-sm">Ubah</a> &nbsp; 
                            <a href="?page=menu&hapus=hapus-menu&id=<?=$res['id']?>" class="btn btn-danger btn-sm">Hapus</a></td>
                      </tr>
            <?php 
            } 
            if($_GET['hapus']=='hapus-menu'){
              $sqlhapus = $conn -> query("DELETE FROM barang_masuk WHERE id='$_GET[id]'");
              if($sqlhapus){
                echo "<script>document.location.href='?page=menu';</script>";
              }else{
                echo "<script> document.location.href='?page=menu';</script>";
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