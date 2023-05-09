<h2>List Kontak</h2>
<table border="1">
	<tr>
		<th>id</th>
    	<th>Nama</th>
	    <th>jkel</th>
	    <th>Email</th>
	    <th>Alamat</th>
	    <th>Kota</th>
	    <th>Pesan</th>
	</tr>
	<?php
	include 'koneksi.php';
	$kontak = mysqli_query($koneksi, "SELECT * FROM kontak");
	$no = 1;
	foreach ($kontak as $row) {
		echo "<tr>";
		echo "<td>".$row['id']."</td>";		
		echo "<td>".$row['Nama']."</td>";
		echo "<td>".$row['jkel']."</td>";
		echo "<td>".$row['Email']."</td>";
		echo "<td>".$row['Alamat']."</td>";
		echo "<td>".$row['Kota']."</td>";
		echo "<td>".$row['Pesan']."</td>";
		echo "</tr>";
		$no++;
	}
	?>
</table>
