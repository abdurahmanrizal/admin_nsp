<?php
    session_start();
    // $no_nrp = $_SESSION['no_nrp'];
?>
<div class="container">
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Halaman Ganti Pasword</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <!-- form ganti password -->
    <form method ="POST" id="form-ganti-password">
        <!-- <div class="form-group">
            <label for="username">Username</label>
            <input type="text" name="nama_user" class="form-control" id="username" readonly>
        </div> -->
        <div class="form-group">
            <label for="password-baru">Password baru</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="PASSWORD BARU">
        </div>
        <!-- <div class="form-group">
            <label for="konfirmasi-password">Ulangi password baru</label>
            <input type="password" name="retype_password" class="form-control" id="konfirmasi-password" placeholder="ULANGI PASSWORD BARU">
        </div> -->
        <input type="hidden" name="nama_user" class="form-control" id="username">
        <input type="hidden" name="no_nrp" id="no_nrp" value="<?php echo $_SESSION['no_nrp'];?>">
        <button type="submit" class="btn btn-info btn-lg" id="simpan">SIMPAN</button>
    </form>
</div>
<script>
    $(document).ready(function(){
        var noNrp = $('#no_nrp').val();
        $.ajax({
            url     :"http://dpongs.com/APInsp/public/api/user_nsp/nrp/"+noNrp,
            method  :"GET",
            datatype:"JSON",
            success : function(data){
                $('#username').val(data[0]['nama_user']);
            },
            error: function(jq,status,message) {
                alert('Terjadi Kesalahan . Status: ' + status + ' - Message: ' + message);
            }
        });

        // button submit mengganti password lama menjadi password baru
        $('form#form-ganti-password').on('submit',function(e){
            e.preventDefault();
            // var password = $('password').val();
            $.ajax({
                url  : "http://dpongs.com/APInsp/public/api/user_nsp/nrp/"+noNrp,
                type : "PUT",
                data : $('#form-ganti-password').serialize(),
                dataType: 'JSON',
                success: function(){
                  alert('Sukses mengganti password');
                  $('#page-top #wrapper #ganti_password').trigger('click');
                },
                error: function(jq,status,message) {
                    alert('Terjadi Kesalahan . Status: ' + status + ' - Message: ' + message);
                }
            });
        });
    })
</script>