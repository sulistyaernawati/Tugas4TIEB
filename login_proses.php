
<?php
	session_start();
	include 'config/koneksi.php';
	
	$user = @$_POST['usernames'];
	$pass = md5(@$_POST['passwords']);
	
	$query=mysqli_query($conn,"select * from user where usernames='$user' and passwords='$pass'");
	$jumlahdata =mysqli_num_rows($query);
	
	if ($jumlahdata == 0 ) {
		echo "<script>alert('usernames dan passwords tidak sesuai !');
				window.location.href='login.php';</script>";
	} else{
		$data= mysqli_fetch_array($query);
		// cek jika user login sebagai admin
		if($data['level']=="1"){
	 
			// buat session login dan username
			$_SESSION['username'] = $data['nama_user'];
			$_SESSION['level'] = "Admin";
			// alihkan ke halaman dashboard admin
				echo "<script>alert('Login Sukses !');
				</script>";
			header("location:index.php?pages=home");
		
		// cek jika user login sebagai akuntan
		}else if($data['level']=="2"){
			// buat session login dan username
			$_SESSION['username'] = $data['nama_user'];
			$_SESSION['level'] = "Akuntan";
			// alihkan ke halaman dashboard akuntan
			echo "<script>alert('Login Sukses !');
				</script>";
			header("location:index.php?pages=home");
			
		}
		else if($data['level']=="3"){
			// buat session login dan username
			$_SESSION['username'] = $data['nama_user'];
			$_SESSION['level'] = "Owner";
			// alihkan ke halaman dashboard Owner
				echo "<script>alert('Login Sukses !');
				</script>";
			header("location:index.php?pages=home"); 
		}
		
	}
?>
<meta http-equiv="refresh" content="3,URL=index.php">