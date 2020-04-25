<?php
	include "config/koneksi.php";
	if(isset($_POST['simpan'])){
		$sql = mysqli_query($con, "INSERT INTO tb_jadwal(id,username,tanggal,waktu,kegiatan,set_jadwal) values ('$_POST[id]',
			'$_POST[username]','$_POST[tanggal]'
			,'$_POST[waktu]','$_POST[kegiatan]','$_POST[set_jadwal]')");
		if ($sql) {
			echo "<script>alert('Data berhasil di simpan');</script>";
			
		}else{
			echo "<script>alert('Data gagal di simpan');</script>";
		}
}

?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
	<link rel="stylesheet" type="text/css" href="jadwal.css">
</head>
<body class="bg-gradient-primary">
	<div class="kotaklogin">
      <h1 align="center">Aplikasi Kinerja Diri Peserta didik smk wikrama bogor </h1>
     <div class="login">
      <div class="fromlogin"></div>
  <div class="container">

    <!-- Outer Row -->
    <div class="row justify-content-center">

      <div class="col-xl-10 col-lg-12 col-md-9">

        <div class="card o-hidden border-0 shadow-lg my-5">
          <div class="card-body p-0">
            <!-- Nested Row within Card Body -->
            <div class="row">
              <div class="col-lg-6 d-none d-lg-block">
                <!-- <img src="image/foto2.jfif" style="display: block; margin: auto;"> -->                
              </div>
              <div class="col-lg-6">
                <div class="p-5">
                  <div class="text-center">
                    <h1 class="h4 text-gray-900 mb-4" align="center"></h1>
                  </div>
                  <form method="post" class="user" name="pendaftaran" action="" align="center">
                    <div class="form-group">
                      <input type="text" name="id" class="form-control form-control-user" placeholder="id">
                    </div>
                    <div class="form-group">
                      <input type="text" name="username" class="form-control form-control-user" placeholder="username">
                    </div>
                    <div class="form-group">
                    	<input type="date" name="tanggal" class="form-control form-control-user" placeholder="tanggal">
                    </div>
                    <div class="form-group">
                    	<input type="time" name="waktu" class="form-control form-control-user" placeholder="waktu">
                    </div>
                    <div >
                    	<input type="text" name="kegiatan" class="form-control form-control-user" placeholder="kegiatan">
                    </div>
                    <div>
                    	<input type="text" name="set_jadwal" class="form-control form-control-user" placeholder="set_jadwal">
                    </div>
                    <input type="submit" name="simpan" value="simpan" class="btn btn-primary btn-user btn-block">
                  </form>
     
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </div>

  </div>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin-2.min.js"></script>

</body>
</html>