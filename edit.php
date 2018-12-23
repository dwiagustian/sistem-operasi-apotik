
<?php include 'koneksi.php';    ?>
<?php
	$raka=$_GET['raka'];
	$x = "SELECT * FROM produkgalinggis WHERE namabarang='$raka'";
    $a = mysql_query($x);
	$row = mysql_fetch_assoc($a);

?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<form id="form1" name="form1" method="post" action="simpan.php?ket=edit&jkl=<?php echo $row['namabarang']; ?>">
 <p><strong>Edit Data Produk</strong></p>
 <p>&nbsp; </p>
 <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="142" height="30"> Nama Barang</td>
      <td width="358" height="30"><label for="namabarang"></label>
      <input type="text" name="namabarang" id="namabarang" value="<?php echo $row['namabarang']; ?>" /></td>
    </tr>
    <tr>
      <td height="30">Harga Barang</td>
      <td height="30"><label for="hargabarang">
        <input type="text" name="hargabarang" id="hargabarang" value="<?php echo $row['hargabarang']; ?>" />
      </label></td>
    </tr>
    <tr>
      <td height="30">Jenis Barang</td>
      <td height="30"><input type="text" name="jenisbarang" id="jenisbarang" value="<?php echo $row['jenisbarang']; ?>"/></td>
    </tr>
    <tr>
      <td height="30">Batch</td>
      <td height="30"><label for="batch">
        <input type="text" name="batch" id="batch" value="<?php echo $row['batch']; ?>"/>
      </label></td>
    </tr>
  </table>
  <p>
    <input type="submit" name="Submit" id="button" value="Simpan" />
    <input type="reset" name="button2" id="button2" value="Reset" />
  </p>
  <table width="4" border="1">
    <tr>
      <th width="3" height="3" scope="row"><a href="tampil.php">Batal</a></th>
    </tr>
  </table>
  <p>
    <label for="checkbox"></label>
  </p>
</form>
</body>
</html>