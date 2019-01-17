<div class="container-fluid">
    <ol class="breadcrumb">
        <form class="form-inline">
            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Tingkatan</label>
            <select class="custom-select my-1 mr-sm-2" id="option1">
                <option selected>Pilih Tingkatan....</option>
                <option value="1">Tingkat I</option>
                <option value="2">Tingkat II</option>
                <option value="3">Tingkat III</option>
                <option value="3">Tingkat IV</option>
            </select>

            <label class="my-1 mr-2" for="inlineFormCustomSelectPref">Pleton</label>
            <select class="custom-select my-1 mr-sm-2" id="option2">
                <option selected>Pilih Pleton...</option>
                <option value="1">Pleton I</option>
                <option value="2">Pleton II</option>
                <option value="3">Pleton III</option>
                <option value="3">Pleton IV</option>
                <option value="3">Pleton V</option>
            </select>

            <a href="#" id="coba" class="btn btn-primary my-1">Submit</a>
        </form>
    </ol>
</div>

<div class="container-fluid" id="tes">
    
</div>

<script>
    $(document).ready(function(){
        $('#wrapper #content-wrapper #coba').on('click', function() {
            var result = confirm('Benar akan di hapus ..?');

        var coba_post = $('#wrapper #content-wrapper #option1').val();
        var coba = $('#wrapper #content-wrapper #option2').val();
        $.ajax({ 
             type: "POST", 
             dataType: "html", 
             url: "halaman/nilai_bak.php",
            //  data: "coba_post="+coba_post,
             data:  {coba_post:coba_post, coba:coba},
             success: function(msg){ 
                 if(msg == ''){ 
                         $("#tes").html('mantabbbb bangettttttttt');                                                                                   
                 }else{ 
                           $("#tes").html(msg);                               
                 }                                                      
             } 
          });
        });
    });
</script>