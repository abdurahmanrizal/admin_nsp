
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Login NSP</title>
    <!-- Bootstrap core CSS-->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <!-- CSS style login -->
    <link rel="stylesheet" href="css/signin.css">
</head>
<body class="text-center">
    <form id="form-login" class="form-signin">
      <!-- <img class="mb-4" src="../../assets/brand/bootstrap-solid.svg" alt="" width="72" height="72"> -->
      <h1 class="h3 mb-3 font-weight-normal">Please sign in</h1>
      <label for="nrp" class="sr-only">NRP</label>
      <input type="text" id="nrp" class="form-control mb-2" placeholder="Masukkan NRP anda" name="no_nrp" required autofocus>
      <label for="password" class="sr-only">Password</label>
      <input type="password" id="password" class="form-control" placeholder="Masukkan Password anda" name="password" required>
      <button id="masuk" class="btn btn-lg btn-primary btn-block" >Sign in</button>
      <p class="mt-5 mb-3 text-muted">&copy; 2017-2018</p>
    </form>
  </body>
  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <!-- script ajax -->
  <script>
  $(document).ready(function(){
    $('#form-login ').on('click', '#masuk', function(e){
            // var a = confirm("MASUK FUNCTION ?????");
            e.preventDefault();
            $.ajax({
                url: "http://dpongs.com/APInsp/public/api/login",
                // url: "http://cobakki.online/APInsp/public/api/login",
                type: "POST",
                data : $('#form-login').serialize(),
                dataType: 'JSON',
                success: function(data){
                    if(data[0]['message'] == "Login gagal !"){
                        alert("invalid credential");
                        // console.log(data);
                    }else if(data[0]['level_user'] == 2 || data[0]['level_user'] == 0){
                        // location.href = 'index.php?no_nrp='+(btoa(data[0]['no_nrp']+'&level_user='+data[0]['level_user']));
                        // $.ajax({
                        //     url : 'halaman/cek_session.php', 
                        // });
                        location.href = 'index.php?'+'no_nrp='+btoa(btoa(btoa(data[0]['no_nrp'])))+'&level_user='+btoa(data[0]['level_user'])+'&tingkat_user='+data[0]['tingkat_user'];
                        // $.ajax({
                        //     type    :'GET',
                        //     url     :'index.php',
                        //     data    :{name: "john", location: "boston"},
                        //     success : function(data){
                        //         location.href = 'index.php?name='+name;
                        //         // alert(data);
                        //     }
                        // });
                        
                    }else{
                        alert('Silahkan beralih ke versi mobile');
                    }
                },
                error: function(error){
                    alert(error);
                }
            });
    });
  });
    $(document).ready(function() {
        window.history.pushState(null, "", window.location.href);        
        window.onpopstate = function() {
            window.history.pushState(null, "", window.location.href);
        };
    });
  </script>
</html>

