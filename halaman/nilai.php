<div class="container-fluid">
    <ol class="breadcrumb">
        <form class="form-inline">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tingkatan</label>
            <select class="custom-select my-1 mr-sm-2" id="option1">
                <option selected>Pilih Tingkatan....</option>
                <option value="2">Tingkat II</option>
            </select>

            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Pleton</label>
            <select class="custom-select my-1 mr-sm-2" id="option2">
                <option selected>Pilih Pleton...</option>
                <option value="1">Pleton I</option>
                <option value="2">Pleton II</option>
                <option value="3">Pleton III</option>
            </select>

            <a href="#" id="penilaian" class="btn btn-primary my-1">Submit</a>
        </form>
    </ol>
</div>

<div class="container-fluid" id="data_nilai">
    
</div>

<script>
    $(document).ready(function(){
        $('#wrapper #content-wrapper #penilaian').on('click', function() {
            // var result = confirm('Benar akan di hapus ..?');
        var tingkat = $('#wrapper #content-wrapper #option1').val();
        var pleton = $('#wrapper #content-wrapper #option2').val();
        $.ajax({ 
             type: "POST", 
             dataType: "html", 
             url: "halaman/nilai_bak.php",
            //  data: "coba_post="+coba_post,
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
    });
</script>