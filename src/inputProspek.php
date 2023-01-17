<?php
require 'conn.php';
if (isset($_POST["submit"])) {
  $query = "INSERT INTO `tb_data`(`tujuanPerusahaan`, `namaClient`, `tanggal`, `jam`, `prospek`, `keterangan`, `status`) VALUES ('".$_POST['perusahaan']."','".$_POST['clientName']."','".$_POST['tanggalPelaksanaan']."','".$_POST['waktuPelaksanaan']."','".$_POST['prospek']."','".$_POST['keterangan']."','0')";
  mysqli_query($mysqli,$query);
  if(mysqli_affected_rows($mysqli) > 0){
    echo "<script>alert('Input Berhasil')</script>";
  }
}
$query = "SELECT `id_prospek`, `jenisProspek` FROM `tb_prospek`";
$prospek = mysqli_query($mysqli,$query);
$data = [];
    while ($row = mysqli_fetch_array($prospek)) {
        $data[] = $row;
    }
?>

<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>
* {
  box-sizing: border-box;
}
input[type=time]{
    padding: 8px;
    font: 1em sans-serif;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type=date]{
    padding: 8px;
    font: 1em sans-serif;
    border: 1px solid #ccc;
    border-radius: 4px;
}
input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #04AA6D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;
}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;
}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
</style>
</head>
<body>

<h2>Prospek Form</h2>
<p>Input data Prospek yang akan anda lakukan.</p>

<div class="container">
  <form action="" method="post">
    <div class="row">
      <div class="col-25">
        <label for="fname">Tujuan Perusahaan</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="perusahaan" placeholder="Masukkan Tujuan Perusahaan yang akan anda kunjungi...">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname">Nama Client</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="clientName" placeholder="Masukkan nama client yang akan di temui...">
      </div>
    </div>
    <div class="row">
        <div class="col-25">
          <label for="date">Tanggal Pelaksanaan</label>
        </div>
        <div class="col-75">
          <input type="date" name="tanggalPelaksanaan">
        </div>
      </div>
      <div class="row">
        <div class="col-25">
          <label for="date">Jam</label>
        </div>
        <div class="col-75">
          <input type="time" name="waktuPelaksanaan">
        </div>
      </div>
    <div class="row">
      <div class="col-25">
        <label for="prospek">Jenis Propek</label>
      </div>
      <div class="col-75">
        <select id="prospek" name="prospek">
          <?php
          foreach($data as $d){
            ?>
            <option value="<?= $d['id_prospek'] ?>"><?= $d['jenisProspek'] ?></option>
            <?php
          }
           ?>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="keterangan">Keterangan</label>
      </div>
      <div class="col-75">
        <textarea id="keterangan" name="keterangan" placeholder="Tambahkan ringsakan singkat yang akan lakukan..." style="height:200px"></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" value="Submit" name="submit">
    </div>
  </form>
</div>

</body>
</html>
