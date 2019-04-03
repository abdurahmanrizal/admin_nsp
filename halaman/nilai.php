<?php
    session_start();
    $no_nrp = $_SESSION['no_nrp'];
    $tingkat = $_SESSION['tingkat_user'];
?>
<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Penilaian</a>
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
                <!-- <option value="2">Tingkat II</option> -->
            </select>

            <label class="my-1 mr-2" for="pleton">Pleton</label>
            <select class="custom-select my-1 mr-sm-2" id="pleton" name="pleton">
                <option value="0">Pilih Pleton...</option>
                <!-- <option value="2111">Pleton 1A</option> -->
                <!-- <option value="2">Pleton 1B</option>
                <option value="3">Pleton 1C</option> -->
            </select>
        <input type="hidden" name="tingkat_user" id="tingkatan_user">
        <input type="hidden" name="no_nrp" id="no_nrp" value="<?php echo $no_nrp;?>">
        <a href="#" id="penilaian" class="btn btn-primary my-1">Submit</a>
    </form>
</div>

<div class="container-fluid" id="data_nilai">
    
</div>

<script>
    $(document).ready(function(){
        $('#wrapper #content-wrapper #penilaian').on('click', function() {
            // var result = confirm('Benar akan di hapus ..?');
        var pleton = $('#wrapper #content-wrapper #pleton').val();
        var tingkat = $('#wrapper #content-wrapper #tingkat').val();
        $.ajax({ 
             type       : "POST", 
             dataType   : "html", 
             url        : "halaman/nilai_bak.php",
            //  data       : "pleton="+pleton,
             data:  {tingkat:tingkat, pleton:pleton},
             success: function(msg){ 
                 if(msg == ''){ 
                    $("#data_nilai").html('mantabbbb bangettttttttt');                                                                                   
                 }else{ 
                    $("#data_nilai").html(msg);                               
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
    $(document).ready(function(){
        $("#tingkat").on('click',function(){
            var val = $(this).val();
            var options = "";
            // var numberOfItemsNeeded=12;
            // for(var i=1;i<=numberOfItemsNeeded;i++)
            // {
            //     options+="<option value='"+i+"'>"+i+"</option>";
            // }   
            if(val == 1){
                // $("#pleton").html("<option value='test'>item1: test 1</option><option value='test2'>item1: test 2</option>");
                var jumlah_pleton = 5;
                for(var i=1;i<=jumlah_pleton;i++)
                {
                    options+="<option value='"+i+"'>PLETON A"+i+"</option>";
                }  
                $("#pleton").html(options)
            }else if(val == 2){
                // $("#pleton").html("<option value='test'>item2: test 1</option><option value='test2'>item2: test 2</option>");
                var jumlah_pleton = 5;
                for(var i=1;i<=jumlah_pleton;i++)
                {
                    options+="<option value='211"+i+"'>PLETON B"+i+"</option>";
                }  
                $("#pleton").html(options)
            }else if(val == 3){
                // $("#pleton").html("<option value='test'>item3: test 1</option><option value='test2'>item3: test 2</option>");
                var jumlah_pleton = 5;
                for(var i=1;i<=jumlah_pleton;i++)
                {
                    options+="<option value='"+i+"'>PLETON C"+i+"</option>";
                }  
                $("#pleton").html(options)
            }else if(val == 4){
                // $("#pleton").html("<option value='test'>item4: test 1</option><option value='test2'>item4: test 2</option>");
                var jumlah_pleton = 5;
                for(var i=1;i<=jumlah_pleton;i++)
                {
                    options+="<option value='"+i+"'>PLETON D"+i+"</option>";
                }  
                $("#pleton").html(options)
            }else{
                var i = 0;
                options = "<option value='"+i+"'>Pilih Pleton"+"</option>";
                $("#pleton").html(options)
            }
        });
    });
</script>