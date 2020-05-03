<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>INPUT SLIP GAJI</title>
    <style>
        tr {
            height: 25px;
        }
    </style>
</head>
<body>
    <h2 align="center">SEPTIAN HADI PRAKOSO 10918001</h2>
	<h1>UTS Pemrograman Web</h1>
<form action="output.php" method="POST" name="input">
    <table width="300" border="0">
        <h2>Penggajian</h2>
        <tr>
            <td> </td>
            <td>Nama</td>
            <td><input type="text" name="nama" size="20"></td>
		<tr >
            <td> </td>
            <td>Golongan</td>
            <td><select name="golongan">
                    <option value="I">I</option>
                    <option value="II">II</option>
					<option value="III">III</option>
                </select></td>
        </tr>
        <tr>
            <td> </td>
            <td>Status</td>
            <td><select name="status">
                    <option value="Menikah">Menikah</option>
                    <option value="Belum Menikah">Belum Menikah</option>
                </select></td>
        <tr>
            <td> </td>
            <td>Jumlah Anak</td>
            <td><input type="text" name="jumlah" size="20"></td>
        </tr>
        <tr>
            <td> </td>
            <td> </td>
            <td><input type="submit" name="submit" value="proses">   
                <input type="reset" name="reset" value="reset"></td>
        </tr>
    </table>
</form>
</body>
</html>