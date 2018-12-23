<?php include 'koneksi.php';    ?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
</head>

<body>
<table width="328" height="91" border="5" align="center" cellpadding="5" cellspacing="15">
  <tr>
    <th width="276" height="51" scope="row"><h2>ISI PRODUK APOTIK</h2></th>
  </tr>
</table>
<p>
  <?php
			$x = "SELECT * FROM produkgalinggis";
            $a = mysql_query($x);
			
?>
</p>
<p>&nbsp; </p>
<table width="999" border="5" align="center" cellpadding="0" cellspacing="1">
  <tr>
    <th width="161" height="25">Nama Barang</th>
    <th height="25">Harga Barang</th>
    <th width="274" height="25">Jenis Barang</th>
    <th width="132" height="25">Batch</th>
    <th width="85" height="25">S.O</th>
    <th height="25" colspan="2">Akses</th>
  </tr>
  <?php while($row = mysql_fetch_assoc($a)){ ?>
  <tr>
    <td height="25"><?php echo $row['namaprodukraka'];   ?></td>
    <td width="212" height="25"><?php echo $row['hargajualraka'];   ?></td>
    <td width="274" height="25"><?php echo $row['namaprodukraka'];   ?></td>
    <td height="25"><?php echo $row['namaprodukraka'];   ?></td>
    <td height="25"><?php echo $row['namaprodukraka'];   ?></td>
    <th width="42" height="25"><a href="edit.php?raka=<?php echo $row['namaprodukraka'];   ?>">Edit</a></th>
    <th width="61"><a href="simpan.php?ket=hapus&amp;z=<?php echo $row['namaprodukraka'];   ?>">Hapus</a></th>
  </tr>
  <?php  } ?>
</table>
<p>&nbsp;</p>
<p>&nbsp;</p>
<table width="153" border="5" cellpadding="2">
  <tr>
    <th width="133" height="24" bgcolor="#FFFFFF" scope="row"><a href="input.php">Input Data Produk</a></th>
  </tr>
</table>
<p>&nbsp;</p>
</body>
</html>