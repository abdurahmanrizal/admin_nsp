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
          <h6 class="float-left">200</h6>
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
          <h6 class="float-left">200</h6>
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
          <!-- nanti berdasarkan mysqli_num_rows basis data -->
          <?php
            include('config/koneksi.php');
            $sql_danton = "SELECT * FROM danton WHERE tingkat= 2";
            $query_danton = mysqli_query($db,$sql_danton);
          ?>
          <h6 class="float-left"><?php echo mysqli_num_rows($query_danton);?></h6>
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
          <h6 class="float-left">200</h6>
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
          <th scope="col">No AK</th>
          <th scope="col">NAMA</th>
          <th scope="col">Pleton</th>
          <th scope="col">NILAI</th>
        </tr>
      </thead>
      <tbody>
        <tr>
          <th scope="row">1</th>
          <td>Mark</td>
          <td>Otto</td>
          <td>@mdo</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">2</th>
          <td>Jacob</td>
          <td>Thornton</td>
          <td>@fat</td>
          <td>@mdo</td>
        </tr>
        <tr>
          <th scope="row">3</th>
          <td>Larry</td>
          <td>the Bird</td>
          <td>@twitter</td>
          <td>@mdo</td>
        </tr>
      </tbody>
    </table>
  </div>
</div>