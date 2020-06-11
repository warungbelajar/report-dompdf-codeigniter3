<h2><center>Data Siswa</center></h2>
<hr/>
<table border="1" width="100%" style="text-align:center;">
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Kelas</th>
		<th>Jenis Kelamin</th>
		<th>Alamat</th>
	</tr>
	<?php 
	$no = 1;
	foreach($siswa as $row)
	{
		?>
		<tr>
			<td><?php echo $no++; ?></td>
			<td><?php echo $row->nama; ?></td>
			<td><?php echo $row->kelas; ?></td>
			<td><?php echo $row->jenis_kelamin; ?></td>
			<td><?php echo $row->alamat; ?></td>
		</tr>
		<?php
	}
	?>
</table>
