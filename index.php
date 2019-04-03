<?php
  session_start();
  // // // $_SESSION['no_nrp'] = $_POST['no_nrp'];
  // // // kondisi jika tidak ada index yang di GET
  if(empty($_GET['no_nrp'])){
    header('location:login.php');
  }else{
    $_SESSION['no_nrp'] = base64_decode(base64_decode(base64_decode($_GET['no_nrp'])));
    $nrp = $_SESSION['no_nrp'];
    $_SESSION['level_user'] = base64_decode($_GET['level_user']);
    $_SESSION['tingkat_user'] = $_GET['tingkat_user'];
  }
  
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>NSP Admin - Dashboard</title>

  <!-- Bootstrap core CSS-->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom fonts for this template-->
  <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="vendor/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="css/sb-admin.css" rel="stylesheet">

  <!-- cdn button datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/buttons/1.5.4/css/buttons.dataTables.min.css">

  <!-- cdn select datatable -->
  <link rel="stylesheet" href="https://cdn.datatables.net/select/1.2.7/css/select.dataTables.min.css">

</head>

<body id="page-top">

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="index.html">ADMIN NSP</a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>

    <!-- Navbar -->
    <ul class="navbar-nav ml-auto mr-0 mr-md-3 my-2 my-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown"
          aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i>
          <span id="nama_user"></span>
          <input type="hidden" name="no_nrp" id="no_nrp" value="<?php echo $_SESSION['no_nrp'];?>">
          <input type="hidden" name="level" id="level">
          <input type="hidden" name="pleton_user" id="pleton_user">
          <!-- <input type="hidden" name="tingkat_user" id="tingkat_user">-->
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#">Settings</a>
          <a class="dropdown-item" href="#">Activity Log</a>
          <div class="dropdown-divider"></div>
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Logout</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">
    <?php include "sidebar.php";?>
    <div id="content-wrapper">
     <?php include "halaman/home.php";?>
    </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>SIAK &copy; <?php echo date('Y');?></span>
          </div>
        </div>
      </footer>

    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <!-- <script src="vendor/chart.js/Chart.min.js"></script> -->
  <script src="vendor/datatables/jquery.dataTables.js"></script>
  <script src="vendor/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script src="js/sb-admin.min.js"></script>

  <!-- Demo scripts for this page-->
  <script src="js/demo/datatables-demo.js"></script>
  <!-- <script src="js/demo/chart-area-demo.js"></script> -->
  <script src="https://cdn.datatables.net/buttons/1.5.4/js/dataTables.buttons.min.js"></script>
  <!-- button print  datatables-->
  <script src="https://cdn.datatables.net/buttons/1.5.2/js/buttons.print.min.js"></script>
  <!-- SCRIPT TYPEAHEAD JS -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-3-typeahead/4.0.2/bootstrap3-typeahead.min.js"></script>
  <!-- test dropdown -->
  <script>
    $('.dropdown').on('show.bs.dropdown', function(e){
      $(this).find('.dropdown-menu').first().stop(true, true).slideDown(700);
    });

    $('.dropdown').on('hide.bs.dropdown', function(e){
      $(this).find('.dropdown-menu').first().stop(true, true).slideUp(700);
    });
  </script>
  <script>
    $(document).ready(function(){
        // console.log($('#no_nrp').text());
        var nrp   = $('#no_nrp').val();
        var nilai = $('#beranda_nilai').DataTable({
          "columnDefs" :[
                {
                    targets: [0],
                    data: "id_taruna"
                    // "searchable" : false,
                    // "orderable"  : false
                },
                {
                    
                    // "render": function(data, type, row) {
                    //     return data.kode_pelanggaran; 
                    // },
                    "targets": [1],
                    // data : "foto_taruna"
                    mRender : function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                    }
                    
                },
                {
                    
                    // "render": function(data, type, row) {
                    //     return data.kode_pelanggaran; 
                    // },
                    "targets": [2],
                    data : "no_ak"
                    // "orderable"  : false
                },
                {
                    "targets": [3],
                    // render: function(data, type, row) {
                    //     return data.ket_pelanggaran;
                    // }
                    data  : "nama_taruna"
                    
                },
                {
                    "targets": [4],
                    // render: function(data, type, row) {
                    //     return data.nilai;
                    // }
                    data  : "pleton_taruna"
                   
                },
                {
                    "targets": [5],
                    // data static
                    mRender : function() {
                      return (85-10);
                    }
                    // render: function(data, type, row) {
                    //     return data == '1' ? 'Pelanggaran' : 'Pujian';
                    // }
                   
                },
            ],
            "processing" :true,
            serverside: true,
            ajax: {
                // url       : "http://cobakki.online/APInsp/public/api/rew_puni/status/1",
                // url       : "http://dpongs.com/APInsp/public/api/taruna",
                url       : "http://cobakki.online/APInsp/public/api/taruna",
                method    : "GET",
                dataSrc   : "",
            },
        });
        nilai.on( 'order.dt search.dt', function () {
            nilai.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
        $('#nilai, #cetak, #ganti_password, #batalion, #pujian, #home, #pelanggaran, #tambah_pujian, #testing_pleton, #halaman_history, #manajemen_user, #manajemen_taruna, #logout').on('click',function(e){
          e.preventDefault();
          var idfil = $(this).attr('id'); 
          $.post('halaman/'+idfil+'.php',{ 
                        nm : idfil,
                      },
          function(html){
            $("#content-wrapper").html(html);
            
          });
        });
        var no_nrp = $('#no_nrp').val();
        $.ajax({
            url     :"http://dpongs.com/APInsp/public/api/user_nsp/nrp/"+no_nrp,
            method  :"GET",
            datatype:"JSON",
            success : function(data){
                $('#level').val(data[0]['level_user']);
                $('#nama_user').text(data[0]['nama_user']);
                $('#pleton_user').val(data[0]['pleton_user']); 
                // $('#tingkat_user').val(data[0]['tingkat_user']); 
                var tingkat_user = data[0]['tingkat_user'];
                // console.log(tingkat_user);
                // AJAX UNTUK MENGETAHUI JUMLAH TARUNA DALAM CARD JUMLAH TARUNA BERDASARKAN TINGKATAN USER
                $.ajax({
                url       : "http://dpongs.com/APInsp/public/api/taruna",
                method    : "GET",
                success   : function(data_taruna){
                    if(data.tingkat_user == data_taruna.tingkat_taruna){
                      $('#taruna').html(data_taruna.filter(data_taruna => data_taruna.tingkat_taruna === tingkat_user && data_taruna.jenis_kelamin === 'L').length);
                      
                      // console.log(result.length);
                    }else{
                      $('#taruna').html(0);
                      // console.log(0);
                    }
                } 
               });
              //  AJAX UNTUK MENGETAHUI JUMLAH TARUNI DALAM CARD JUMLAH TARUNI BERDASARKAN TINGKATAN USER
               $.ajax({
                // url       : "http://dpongs.com/APInsp/public/api/taruna/jenis/p",
                url       : "http://dpongs.com/APInsp/public/api/taruna",
                method    : "GET",
                success   : function(data_taruni){
                    if(data.tingkat_user == data_taruni.tingkat_taruna){
                      $('#taruni').html(data_taruni.filter(data_taruni => data_taruni.tingkat_taruna === tingkat_user && data_taruni.jenis_kelamin === 'P').length);
                    }else{
                      $('#taruni').html(0);
                    }
                } 
               });
              //  AJAX UNTUK MENGETAHUI JUMLAH DANTON DALAM CARD JUMLAH DANTON BERDASARKAN TINGKATAN USER
               $.ajax({
                  url       : "http://dpongs.com/APInsp/public/api/user_nsp",
                  method    : "GET",
                  success   : function(result){
                      // if(result[0]['level_user'] === 3 && result[0]['tingkat_user'] === tingkat_user){
                      //   // var coba = result.filter(result => {result.level === 3}).length;
                      //   $('#danton-card').html(array.filter(result => result.level_user === 3).length);
                      // }else{
                      //   $('#danton-card').html(0);
                      // }
                      if(result.filter(result => result.level_user === 3 && result.tingkat_user === tingkat_user).length != 0){
                        $('#danton-card').html(result.filter(result => result.level_user === 3 && result.tingkat_user === tingkat_user).length);
                      }else{
                        $('#danton-card').html(0);
                      }
                      
                  } 
               });
               // AJAX UNTUK MENGETAHUI JUMLAH DANKI DALAM CARD JUMLAH DANKI BERDASARKAN TINGKATAN USER
               $.ajax({
                  url       : "http://dpongs.com/APInsp/public/api/user_nsp",
                  method    : "GET",
                  success   : function(response){
                      // if(response.level_user == 2 && response.tingkat_user == tingkat_user){
                      //   $('#danki').html(array.filter(response => response.level_user === 2 && response.tingkat_user === tingkat_user).length);
                      // }else{
                      //   $('#danki').html(0);
                      // }
                      if(response.filter(response => response.level_user === 2 && response.tingkat_user === tingkat_user).length != 0){
                        $('#danki').html(response.filter(response => response.level_user === 2 && response.tingkat_user === tingkat_user).length);
                      }else{
                        $('#danki').html(0);
                      }
                      
                  } 
                });
            }
        });
    });
    $(document).on('click','.logout',function(){
       $.ajax({
          url         : "halaman/logout.php",
          // type        : "POST",
          // dataType    : "JSON",
          beforeSend   : function(){
            if(confirm('Anda yakin akan keluar ?')){
              return true;
            }else{
              return false;
            }
          },
          success     : function(){
            window.location.replace("login.php");
          }
       });
    });
  </script>
</body>

</html>