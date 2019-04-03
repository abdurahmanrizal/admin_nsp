<?php
    session_start();
    $tingkat = $_SESSION['tingkat_user'];
?>
<div class="container-fluid">
     <!-- Breadcrumbs-->
        <ol class="breadcrumb">
            <li class="breadcrumb-item">
            <a href="#">Halaman History Penilaian</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
        </ol>
        <form class="form-inline">
            <label class="my-1 mr-2" for="tingkatan">BULAN</label>
            <select class="custom-select my-1 mr-sm-2" id="bulan" name="bulan">
                <option selected>Pilih Bulan....</option>
                <option value="1">JANUARI</option>
                <option value="2">FEBRUARI</option>
                <option value="3">MARET</option>
                <option value="4">APRIL</option>
                <option value="5">MEI</option>
                <option value="6">JUNI</option>
                <option value="7">JULI</option>
                <option value="8">AGUSTUS</option>
                <option value="9">SEPTEMBER</option>
                <option value="10">OKTOBER</option>
                <option value="11">NOVEMBER</option>
                <option value="12">DESEMBER</option>
            </select>

            <label class="my-1 mr-2" for="pleton">TAHUN</label>
            <select class="custom-select my-1 mr-sm-2" id="tahun" name="tahun">
                <option selected>Pilih TAHUN...</option>
                <?php
                    for($i=2015; $i <= date('Y')+5 ; $i++){?>
                        <option value="<?php echo $i; ?>"><?php echo $i;?></option>
                    <?php }
                ?>
                <!-- <option value="2111">Pleton 1A</option> -->
                <!-- <option value="2">Pleton 1B</option>
                <option value="3">Pleton 1C</option> -->
            </select>
            <label class="my-1 mr-2" for="pleton">TINGKAT</label>
            <select class="custom-select my-1 mr-sm-2" id="tingkat" name="tingkat">
                <option selected>Pilih TINGKAT...</option>
                <?php
                    if($tingkat != 0){
                        for($i=1; $i < 5 ; $i++){
                            if($i == $tingkat){?>
                                <option value="<?php echo $i; ?>"selected><?php echo $i;?></option>
                            <?php }
                        }
                    }else{
                        for($i=1; $i < 5 ; $i++){?>
                                <option value="<?php echo $i; ?>"><?php echo $i;?></option>
                        <?php }
                    }?>
            </select>
            <a href="#" id="batalion" class="btn btn-primary my-1">Submit</a>
        </form>
</div>
<br>
<br>
<div class="container" id="data_history">
   
</div>
<script>
    $(document).ready(function(){
        $('#wrapper #content-wrapper #batalion').on('click', function() {
        // var result = confirm('Benar akan di hapus ..?');
        var bulan = $('#wrapper #content-wrapper #bulan').val();
        var tahun = $('#wrapper #content-wrapper #tahun').val();
        var tingkat = $('#wrapper #content-wrapper #tingkat').val();
        $.ajax({ 
             type       : "POST", 
             dataType   : "html", 
             url        : "halaman/data_history_penilaian.php",
            //  data: "coba_post="+coba_post,
             data:  {bulan:bulan, tahun:tahun, tingkat:tingkat},
             success: function(msg){ 
                 if(msg == ''){ 
                    $("#data_history").html('mantabbbb bangettttttttt');                                                                                   
                 }else{ 
                    $("#data_history").html(msg);                               
                 }                                                      
             } 
          });
        });
    });
</script>