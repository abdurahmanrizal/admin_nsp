
<div class="container-fluid">

  <!-- Breadcrumbs-->
  <ol class="breadcrumb">
    <li class="breadcrumb-item">
      <a href="#">Dashboard</a>
    </li>
    <li class="breadcrumb-item active">Overview</li>
  </ol>

  <!-- Icon Cards-->
  <div class="row">
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-primary o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="mr-5">JUMLAH TARUNA</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <!-- nanti berdasarkan mysqli_num_rows basis data -->
          <h6 class="float-left" id="taruna"></h6>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-warning o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="mr-5">JUMLAH TARUNI</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <!-- nanti berdasarkan mysqli_num_rows basis data -->
          <h6 class="float-left" id="taruni"></h6>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-success o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="mr-5">JUMLAH DANTON</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
        
          <h6 class="float-left" id="danton-card"></h6>
        </a>
      </div>
    </div>
    <div class="col-xl-3 col-sm-6 mb-3">
      <div class="card text-white bg-danger o-hidden h-100">
        <div class="card-body">
          <div class="card-body-icon">
            <i class="fas fa-users"></i>
          </div>
          <div class="mr-5">JUMLAH DANKI</div>
        </div>
        <a class="card-footer text-white clearfix small z-1" href="#">
          <!-- nanti berdasarkan mysqli_num_rows basis data -->
          <h6 class="float-left" id="danki"></h6>
        </a>
      </div>
    </div>
  </div>
  <br>
  
  <!-- tabel beranda nilai -->
  <div class="table-responsive">
    <table id="beranda_nilai" class="table table-striped display" style="width:100%">
      <thead>
        <tr>
          <th scope="col">NO</th>
          <th scope="col">Foto Taruna</th>
          <th scope="col">No AK</th>
          <th scope="col">NAMA</th>
          <th scope="col">Pleton</th>
          <th scope="col">NILAI</th>
        </tr>
      </thead>
      <!-- <tbody>
        
      </tbody> -->
    </table>
  </div>
</div>
<script>
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
                    mRender : function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                    }
                    // "orderable"  : false
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
</script>