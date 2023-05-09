<h2>List mahasiswa</h2>
<table border="1">
	<tr>
		<th>NO</th>
		<th>NIM</th>
		<th>Nama</th>
		<th>Gender</th>
		<th>Jurusan</th>
	</tr>
	<?php
	include 'koneksi.php';
	$mahasiswa = mysqli_query($koneksi, "SELECT * FROM mahasiswa");
	$no = 1;
	foreach ($mahasiswa as $row) {
		$jenis_kelamin = $row['jenis_kelamin'] == 'p' ? 'Perempuan' : 'Laki laki';
		echo "<tr>";
		echo "<td>".$no."</td>";
		echo "<td>".$row['nim']."</td>";		
		echo "<td>".$row['nama']."</td>";
		echo "<td>".$jenis_kelamin."</td>";
		echo "<td>".$row['jurusan']."</td>";
		echo "</tr>";
		$no++;
	}
	?>
</table>
