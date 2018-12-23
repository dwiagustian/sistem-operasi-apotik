<?php include 'koneksi.php';    ?>
<?php
	$ket=$_GET['ket'];
	if ($ket=='tambah')			//rumus untuk menambah data input
	{
		$r=$_POST['namabarang'];
		$a=$_POST['hargabarang'];
		$k=$_POST['jenisbarang'];
		$aa=$_POST['batch'];
		$g=$_POST['stokraka'];
			
			$x=mysql_query("INSERT INTO produkgalinggis VALUES ('$r','$a','$k','$aa','$g')");
			echo "<script language='JavaScript'> alert ('Anda Berhasil menambah produk') </script>";
			echo "<script>window.location=('tampil.php') </script>";
	}
	else if ($ket=='edit')
	{
		$jkl=$_GET['jkl'];			//rumus edit
		
		$ra=$_POST['namabarang'];
		$ka=$_POST['hargabarang'];
		$gal=$_POST['jenisbarang'];
		$aa=$_POST['batch'];
		$inggis=$_POST['stokraka'];
			
			$x=mysql_query("UPDATE produkgalinggis  
			                SET namabarang='$ra', hargabarang='$ka', jenisbarang='$gal', batch='$aa', stokraka='$inggis'
							WHERE namabarang='$jkl'   ");
			echo "<script language='JavaScript'> alert ('Anda Berhasil Mengubah Data Produk $jkl') </script>";
			echo "<script>window.location=('tampil.php') </script>";
	}
	else
	{
		$a=$_GET['z'];		//rumus simpan tampil tulisan yg harus di ok
		$x=mysql_query("DELETE FROM produkgalinggis WHERE namabarang='$a'");
			echo "<script language='JavaScript'> alert ('Anda Berhasil Menghapus Data Produk') </script>";		
			echo "<script>window.location=('tampil.php') </script>";
	}



?>