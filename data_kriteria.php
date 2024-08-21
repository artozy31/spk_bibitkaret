<div class="box-header">
    <h5 class="box-title">Data Kriteria</h5>
</div>
<div class="table-responsive">
<table class="table table-bordered table-striped">
<thead>
<tr>
<th>Id Kriteria</th>
<th>Nama Kriteria</th>
<th>Bobot</th>
<th>Sifat Kriteria</th>
</tr>
</thead>
<tbody>
<?php
include ("config/connection.php");

$s=mysqli_query($k21,"select * from kriteria order by id_kriteria ASC");
while($d=mysqli_fetch_assoc($s)){
?>
<tr>
<td><?php echo $d['id_kriteria']; ?></td>
<td><?php echo $d['nama_kriteria']; ?></td>
<td><?php echo $d['bobot']; ?></td>
<td><?php echo $d['sifat']; ?></td>
</tr>
<?php
}
?>
</tbody>
</table>
</div>