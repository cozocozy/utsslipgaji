<?php 
//septian hadi prakoso 10918001

if (isset($_POST['submit'])) {
	$nama= $_POST['nama'];
	$golongan= $_POST['golongan'];
	$status= $_POST['status'];
	$jumlah= $_POST['jumlah'];

 if ($golongan== 'I') { 
 	$gapok=1000000;
	} elseif ($golongan== 'II') {
		$gapok=1500000;
	} else {
		$gapok=2000000;}
  
	if ($status== 'Menikah') { 
		$pasangan=300000;
	} else {
		$pasangan=0;}
		
		if ($jumlah== '1') { 
			$anak=150000;
		} elseif ($jumlah>= '1') {
			$anak= $jumlah*150000;}
		else {
			$anak= 0;}
			
  $beras= 110000;
  $kesehatan= 150000;
  $kesejahteraan = 0.5*$gapok;
  $total = $gapok+$kesejahteraan+$pasangan+$anak+$beras+$kesehatan;
} 
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>OUTPUT SLIP GAJI</title>
<body>
	<br>
<h3 align="center" style="height:40px;">Slip Gaji</h3>
<table align="center" border="1">
	<tr>
		<td colspan="5">Nama : <?php echo $nama; ?> </td>
	</tr>
<tr>
	<td colspan="5">Status : <?php echo $status;?> </td>
<tr>
	<td colspan="5">Golongan : <?php echo $golongan;?> </td>
<tr>
	<td colspan="5">Jumlah Anak : <?php echo $jumlah;?> </td>
</tr>
<tr>
	<td colspan="4">Gaji Pokok</td>
	<td><?php echo $gapok;?> </td>
</tr>
<tr>
	<td  colspan="4">Kesejahteraan</td>
	<td><?php echo $kesejahteraan;?></td>
</tr>
<tr>
	<td colspan="4">Tunjangan Pasangan</td>
	<td><?php echo $pasangan;?> </td>
<tr>
	<td colspan="4">Tunjangan Anak</td>
	<td><?php echo $anak;?> </td>

<tr>
	<td colspan="4">Tunjangan Beras</td>
	<td><?php echo $beras;?> </td>
<tr>
	<td colspan="4">Tunjangan Kesehatan</td>
	<td><?php echo $kesehatan;?> </td>
<tr>
	<td colspan="4">Total Gaji</td>
	<td><?php echo $total;?> </td>
</tr>
</table>
</body>
</html>