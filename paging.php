<?php
$conn = mysql_connect("localhost", "root", "");
mysql_select_db("carikode");


//pagging
$per_hal=5;
$jumlah_record=mysql_query("SELECT COUNT(*) from paging");
$jum=mysql_result($jumlah_record, 0);
$halaman=ceil($jum / $per_hal);
$page = (isset($_GET['page'])) ? (int)$_GET['page'] : 1;
$start = ($page - 1) * $per_hal;
echo "Jumlah record :".$jum."<br/>";
echo "Jumlah halaman :".$halaman."<br/>";
//
?>
<table>
	<tr>
		<th>No</th>
		<th>Nama</th>
		<th>Alamat</th>
	</tr>

	<?php
	$query=mysql_query("select * from paging limit $start, $per_hal");
	while($q=mysql_fetch_array($query)){
		?>
		<tr>
			<td><?php echo $q['id']?></td>
			<td><?php echo $q['nama']?></td>
			<td><?php echo $q['alamat']?></td>
		</tr>
		<?php
	}
	?>
</table>
<a href="?page=<?php echo $page -1 ?>"> < </a>
<?php

for($x=1;$x<=$halaman;$x++){
	?>
	<a href="?page=<?php echo $x ?>"><?php echo $x ?></a>
	<?php
}

?>
