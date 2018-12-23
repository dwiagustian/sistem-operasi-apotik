<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body,td,th {
	font-size: 14px;
}
</style>
</head>

<body>
<form id="form1" name="form1" method="post" action="simpan.php?ket=tambah">
  <p><strong>MASUKAN DATA PRODUK OBAT</strong></p>
  <table width="500" border="0" cellspacing="0" cellpadding="0">
    <tr>
      <td width="142" height="30">Nama Barang</td>
      <td width="358" height="30"><label for="namabarang"></label>
      <input type="text" name="namabarang" id="namabarang" /></td>
    </tr>
    <tr>
      <td height="30">Harga Barang</td>
      <td height="30"><label for="hargabarang"></label>
      <input type="text" name="hargabarang" id="hargabarang" /></td>
    </tr>
    <tr>
      <td height="30">Jenis Barang</td>
      <td height="30"><label for="jenisbarang">
        <input type="text" name="jenisbarang" id="jenisbarang" />
      </label></td>
    </tr>
    <tr>
      <td height="30">Batch</td>
      <td height="30"><input type="text" name="batch" id="batch" /></td>
    </tr>
    <tr>
      <td height="30">S.O</td>
      <td height="30"><label for="stokraka">
        <input type="text" name="stokraka" id="stokraka" />
      </label></td>
    </tr>
    <tr>
      <td height="30"><input type="submit" name="button" id="button" value="Simpan" />
      <input type="reset" name="button2" id="button2" value="Reset" /></td>
      <td height="30"><label for="button2"></label></td>
    </tr>
  </table>
  <p>&nbsp;</p>
</form>
</body>
</html>