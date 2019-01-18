<?php
    include('config/koneksi.php');
    $tingkat=$_POST['tingkat'];
    $pleton = $_POST['pleton'];
?>

<div class="table-responsive">
    <table id="data_penilaian" class="table">
        <thead>
            <!-- <th scope="col">NO</th> -->
            <th scope="col">NO AK</th>
            <th scope="col">NAMA</th>
            <th scope="col">NILAI AKHIR</th>
            <!-- <th scope="col">AKSI</th> -->
        </thead>
        <tbody>
            <!-- <tr>
                <th scope="row">1</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr>
            <tr>
                <th scope="row">2</th>
                <td>Mark</td>
                <td>Otto</td>
                <td>@mdo</td>
            </tr> -->
            <?php
                $sql    = "SELECT * FROM taruna WHERE tingkat= $tingkat AND pleton= $pleton";
                $query  = mysqli_query($db,$sql);

                while($taruna = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$taruna['no_ak']."</td>";
                    echo "<td>".$taruna['nama_taruna']."</td>";
                    echo "<td>".$taruna['nilai_awal']."</td>";

                    echo "</tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>

<script>
    $(document).ready(function(){
        $('#data_penilaian').DataTable();
    });
</script>