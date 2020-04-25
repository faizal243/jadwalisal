<!DOCTYPE html>
<html>
<head>
	<title>Login</title>
	<link rel="stylesheet" type="text/css" href="datadiri.css">
</head>
<body>
	<div class="kotaklogin">
		<h1 align="center" >Aplikasi Kinerja Diri Peserta didik smk wikrama bogor</h1>
	<div class="login">
		<div class="fromlogin"></div>
		
	
	<?php
	include "config/koneksi.php";
	session_start();
	if (isset($_GET['delete'])){
		$sql = mysqli_query($con,"DELETE from tb_login where username = '$_GET[username]'");
		if ($sql){
		    echo "<script>alert('data berhasil di hapus');document.location.href= 'login.php'</script>";
			
		}else{
		    echo "<script>alert('data gagal di hapus');document.location.href= 'login.php'</script>";
		}
	}

	if (isset($_GET['edit'])){
		$sql = mysqli_query($con,"SELECT * from tb_login where username = '$_GET[username]'");
		$row_edit = mysqli_fetch_array($sql);
 
		
	}else{
		$row_edit = null;
	}

	if (isset($_POST['update'])){
		$sql = mysqli_query($con,"UPDATE tb_login set username = '$_POST[username]', password = '$_POST[password]'
			where username = '$_GET[password]'");
		if ($sql){
			echo "<script>alert('data berhasil diupdate');document.location.href='login.php'</script>";
		}else{
			echo "<script>alert('data gagal diupdate');document.location.href='login.php'</script>";
		}
		
	}
?>
 <form method= "post">
 	<table align= "center">
 		<tr>
 			<td>
 				username
 			</td>
 			<td>
 				<input type= "text" name= "username" value= "<?php echo $row_edit['username']?>">
 			</td>
 		</tr>
 		<tr>
 			<td>
 				password
 			</td>
 			<td>
 				<input type= "password" name= "password" value= "<?php echo $row_edit['password']?>">
 			</td>
 		</tr>
 		<tr>
 			<td>
 				
 				<?php
 				if (isset($_GET['edit'])){
 					?>
 					<input type= "submit" name= "update" value= "update">
 					<a href="login.php"> batal </a>
	
 			<?php }else{ ?>
                   
                   <input type= "submit" name= "login" value= "login">
 			<?php } ?>
 			</td>
 		</tr>
 	</table>
 	
 </form>
 <table border= "1" align= "center" >
 	<tr>
 		<th> username </th>
 		<th> password </th>
 	</tr>
 	<tr>
 		<?php
 		$sql = mysqli_query($con,"SELECT * from tb_login");
 		while ($row = mysqli_fetch_array($sql)){
 			

 			?>
 			<td><?php echo $row['username']?></td>
 			<td><?php echo $row['password']?></td>
 			
 			<td><a href="?delete&username=<?php echo $row ['username'];?>"onClick= "retrun confrim('apakah anda yakin 
 		    ingin menghapus data ini ')">Hapus</a>></td>
 		    <td><a href="?edit&username=<?php echo $row ['username'];?>"onClick= "retrun confrim('apakah anda yakin 
 		    ingin mengedit data ini ')">edit</a>></td>
 	</tr>
 <?php
            }

       ?>
 </table>
</div>
</div>
</body>
</html>