<div class="container">
    <!-- header text danton pleton -->
    <h4 class="text-center text-dark">DANTON PLETON</h4>
    <!-- tabel nama danton tiap pleton -->
    <a href="#" class="btn btn-success mb-3" data-toggle="modal" data-target="#ModalTambahDanton">
        <i class="fas fa-user-plus"></i>
        <span>Tambah</span>
    </a>
    <!-- modal tambah danton -->
     <!-- modal lihat nanti berdasarkan database berdasarkan id -->
     <div class="modal fade" id="ModalTambahDanton" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TAMBAH DANTON</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="table-responsive">
                            <!-- isi tabel nanti berdasarkan database -->
                            <table id="tabel_danton" class="table table-striped display" style="width:100%;">
                                <thead>
                                    <tr>
                                        <th scope="col">Checklist</th>
                                        <th scope="col">NO NRP</th>
                                        <th scope="col">NAMA</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            HURAIRA
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            JOHN DOE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            JOHN DOE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            JOHN DOE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            JOHN DOE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            JOHN DOE
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            </div> 
                                        </td>
                                        <td>
                                            123456
                                        </td>
                                        <td>
                                            JOHN DOE
                                        </td>
                                    </tr>
                                   
                                </tbody>
                            </table>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive mb-3">
        <table class="table table-striped">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">NO NRP</th>
                <th scope="col">NAMA</th>
                <th scope="col" class="text-center">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- nanti ini adalah isi dari database -->
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">123456</td>
                    <td scope="row">JOHN DOE</td>
                    <td class= "text-center">
                        <a href="#" class="btn btn-warning text-light">
                            <i class="fas fa-user-edit"></i>
                            <span>Edit</span>
                        </a>
                        <a href="#" class="btn btn-danger" onclick="confirm('Anda yakin ingin menghapus data ini ?');">
                            <i class="fas fa-trash"></i>
                            <span>Hapus</span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
    <!-- header teks taruna -->
    <h4 class="text-center text-dark">Taruna</h4>
    <a href="#" class="btn btn-success">
        <i class="fas fa-user-plus"></i>
        <span>TAMBAH TARUNA</span>
    </a>
    <a href="#" class="btn btn-danger" onclick="confirm('Anda yakin ingin menghapus semua data taruna');">
        <i class="fas fa-trash"></i>
        <span>HAPUS TARUNA</span>
    </a>
    <br>
    <br>
    <div class="table-responsive">
         <table id="pleton" class="table table-striped display" style="width:100%">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">No AK</th>
                <th scope="col">NAMA</th>
                <th scope="col">NILAI AWAL</th>
                <th scope="col" class="text-center">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- nanti ini adalah isi dari database -->
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">123456</td>
                    <td scope="row">JOHN DOE</td>
                    <td scope="row">85</td>
                    <td class= "text-center">
                        <a href="#" class="btn btn-warning text-light">
                            <i class="fas fa-user-edit"></i>
                            <span>Edit</span>
                        </a>
                        <a href="#" class="btn btn-danger" onclick="confirm('Anda yakin ingin menghapus data ini ?');">
                            <i class="fas fa-trash"></i>
                            <span>Hapus</span>
                        </a>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>