<?php
include ("config/connection.php");
$s=mysqli_query($k21,"select * from kriteria");
$h=mysqli_num_rows($s);


?>

<div class="box-header">
    <h5 class="box-title " >Nilai Matriks</h5>
</div>
<div class="table table-striped table-bordered">
    <table class="table table-striped table-bordered">
        <thead>
        <tr>
            <th rowspan="2">No</th>
            <th rowspan="2">Nama</th>
            <th colspan="<?php echo $h; ?>"> <center>Kriteria</center></th>
        </tr>
        <tr>
            <th>Bentuk Daun</th>
            <th>Bentuk Payung</th>
            <th>Posisi Tangkai Daun</th>
            <th>Ketebalan Daun</th>
            <th>Tulang Daun</th>
            <th>Warna Helai Daun</th>
            <th>Panjang Tangkai Daun</th>
        </tr>
        </thead>
    <tbody>
    <?php
    $i=0;
    $a=mysqli_query($k21,"select * from alternatif order by id_alternatif asc;");


    
    while($da=mysqli_fetch_assoc($a)){
        echo "<tr>
            <td>".(++$i)."</td>
            <td>".$da['nm_alternatif']."</td>";
            $idalt=$da['id_alternatif'];
            //ambil nilai
                $n=mysqli_query($k21,"select * from nilai_matrik where id_alternatif='$idalt' order by id_matrik asc");
                
            while($dn=mysqli_fetch_assoc($n)){
            
                echo "<td align='center'>$dn[nilai]</td>";
            }
            echo "</tr>\n";

    }

    ?>

    </tbody>
    </table>
</div>