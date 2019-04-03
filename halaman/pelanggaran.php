<?php
    session_start();
    $no_nrp = $_SESSION['no_nrp'];
    $tingkat = 2;
?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Halaman Pelanggaran</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <form class="form-inline">
            <label class="my-1 mr-2" for="tingkatan">Tingkatan</label>
            <select class="custom-select my-1 mr-sm-2" id="tingkat" name="tingkat">
                <option value="0">Pilih Tingkatan....</option>
                <?php
                    if($tingkat != 0){
                        for($i=1; $i<5;$i++){
                            if($tingkat == $i){?>
                                 <option value="<?php echo $i;?>" selected>TINGKAT <?php echo $i;?></option>
                            <?php }
                        }
                    }else{
                        for($i=1; $i<5; $i++){?>
                             <option value="<?php echo $i;?>">TINGKAT <?php echo $i;?></option>
                        <?php }
                    }
                ?>
            </select>
        <a href="#" id="submit-pelanggaran" class="btn btn-primary my-1">Submit</a>
    </form>
</div>

<div class="container-fluid" id="data_pelanggaran">
    
</div>

<script>
    $(document).ready(function(){
        $('#wrapper #content-wrapper #submit-pelanggaran').on('click', function() {
            // var result = confirm('Benar akan di hapus ..?');
        // var pleton = $('#wrapper #content-wrapper #pleton').val();
        var tingkat = $('#wrapper #content-wrapper #tingkat').val();
        $.ajax({ 
             type       : "POST", 
             dataType   : "html", 
             url        : "halaman/data_pelanggaran.php",
             data       : "tingkat="+tingkat,
            //  data:  {tingkat:tingkat, pleton:pleton},
             success: function(msg){ 
                 if(msg == ''){ 
                    $("#data_pelanggaran").html('mantabbbb bangettttttttt');                                                                                   
                 }else{ 
                    $("#data_pelanggaran").html(msg);                               
                 }                                                      
             } 
          });
        });
        // MENGAMBIL TINGKATAN USER DENGAN TUJUAN DAPAT MENGAMBIL DATA TARUNA/TARUNI 
        // BERDASARKAN PLETON DAN TINGKATAN TARUNA/TARUNI == TINGKATAN USER
        // var nrp = $('#no_nrp').val();
        // $.ajax({
        //     url     :"http://dpongs.com/APInsp/public/api/user_nsp/nrp/"+nrp,
        //     method  :"GET",
        //     datatype:"JSON",
        //     success : function(data){
        //         $('#tingkatan_user').val(data[0]['tingkat_user']);
        //     } 
        // });
    });
</script>