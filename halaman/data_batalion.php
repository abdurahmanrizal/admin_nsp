<?php
    include('config/koneksi.php');
    $tingkat=$_POST['tingkat'];
    $pleton = $_POST['pleton'];
?>
<h4 class="text-center">DANTON PLETON</h4>
<a href="#" class="btn btn-success mb-2" data-toggle="modal" data-target="#ModalGantiDanton">
    <i class="fas fa-user-plus"></i>
    <span>GANTI DANTON</span>
</a>
<!-- Modal -->
<div class="modal fade" id="ModalGantiDanton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GANTI DANTON</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
            <table id="tabel_danton" class="table table-striped display" style="width:100%;">
                <thead>
                    <tr>
                        <th scope="col">Checklist</th>
                        <th scope="col">NO NRP</th>
                        <th scope="col">NAMA</th>
                        <th scope="col">PANGKAT</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $sql    = "SELECT * FROM danton ";
                        $query  = mysqli_query($db,$sql);

                        while($danton_ganti = mysqli_fetch_array($query)){
                            echo "<tr>";
                            echo "<td>";
                            echo "<div class='form-check'>";?>
                            <input class="form-check-input" type="checkbox" value="<?php echo $danton_ganti['nrp'];?>" id="defaultCheck1">
                            </div>
                            <?
                            echo "</td>";
                            echo "<td>".$danton_ganti['nrp']."</td>";
                            echo "<td>".$danton_ganti['nama_danton']."</td>";
                            echo "<td>".$danton_ganti['pangkat']."</td>";

                            echo "</tr>";
                        }
                
                    ?>
                </tbody>
            </table>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>
<div class="table-responsive">
    <table class="table table-striped">
        <thead>
            <th scope="col">NRP</th>
            <th scope="col">NAMA</th>
            <th scope="col">PANGKAT</th>
        </thead>
        <tbody>
            <?php
                $sql    = "SELECT * FROM danton WHERE tingkat= $tingkat AND pleton= $pleton";
                $query  = mysqli_query($db,$sql);

                while($danton = mysqli_fetch_array($query)){
                    echo "<tr>";

                    echo "<td>".$danton['nrp']."</td>";
                    echo "<td>".$danton['nama_danton']."</td>";
                    echo "<td>".$danton['pangkat']."</td>";

                    echo "</tr>";
                }
            
            ?>
        </tbody>
    </table>
</div>
<br>
<h4 class="text-center">Taruna</h4>
<a href="#" class="btn btn-success">
    <i class="fas fa-user-plus"></i>
    <span>TAMBAH TARUNA</span>
</a>
<a href="#" class="btn btn-danger">
    <i class="fas fa-trash"></i>
    <span>HAPUS TARUNA</span>
</a>
<br>
<div class="table-responsive mt-3">
    <table id="tabel_taruna" class="table table-striped">
        <thead>
            <th scope="col">NO AK</th>
            <th scope="col">NAMA</th>
            <th scope="col">NILAI AWAL</th>
        </thead>
        <tbody>
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
        $('#tabel_taruna, #tabel_danton').DataTable();
    });
</script>

