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
                <option value="1">Pleton 1A</option>
                <option value="2">Pleton 1B</option>
                <option value="3">Pleton 1C</option>
            </select>

            <a href="#" id="coba" class="btn btn-primary my-1">Submit</a>
        </form>
    </ol>
</div>
<br>
<br>
<div class="container" id="data_batalion">
   
</div>
<script>
    $(document).ready(function(){
        $('#wrapper #content-wrapper #coba').on('click', function() {
        // var result = confirm('Benar akan di hapus ..?');
        var tingkat = $('#wrapper #content-wrapper #option1').val();
        var pleton = $('#wrapper #content-wrapper #option2').val();
        $.ajax({ 
             type: "POST", 
             dataType: "html", 
             url: "halaman/data_batalion.php",
            //  data: "coba_post="+coba_post,
             data:  {tingkat:tingkat, pleton:pleton},
             success: function(msg){ 
                 if(msg == ''){ 
                    $("#data_batalion").html('mantabbbb bangettttttttt');                                                                                   
                 }else{ 
                    $("#data_batalion").html(msg);                               
                 }                                                      
             } 
          });
        });
    });
</script>