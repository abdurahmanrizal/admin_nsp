<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Halaman Manajemen User</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <a href="#" id="tambah_user"class="btn btn-success mb-4" data-toggle="modal" data-target="#modalTambahUser">
        <i class="fas fa-user-plus"></i>
        <span>Tambah User</span>
    </a>
    <!-- MODAL TAMBAH USER NSP -->
    <div class="modal fade" id="modalTambahUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TAMBAH USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-user">
                        <input type="hidden" name="id_user" id="id_user">
                        <div class="form-group">
                            <label for="no_ak">NO NRP</label>
                            <input type="text" id="no_nrp" name="no_nrp" class="form-control" placeholder="Masukkan NO NRP" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_taruna">NAMA</label>
                            <input type="text" id="nama_user" name="nama_user" class="form-control"  placeholder="Masukkan nama user" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">PANGKAT</label>
                            <input type="text" name="pangkat_user" id="pangkat_user" class="form-control mb-2" placeholder="Masukkan pangkat user">
                            <p>note: diharapkan menggunakan huruf kapital semua</p>
                        </div>
                        <div class="form-group">
                            <label for="nilai_awal">LEVEL USER</label>
                            <select class="custom-select my-1 mr-sm-2" id="level_user" name="level_user">
                                <option value="1">SUPER ADMIN</option>
                                <option value="2">DANKI</option>
                                <option value="3">DANTON</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="foto_taruna">FOTO USER</label>
                            <input type="file" class="form-control-file" id="foto_user" name="foto_user">
                        </div>
                        <input type="hidden" name="tingkat_user" id="tingkat_user" value="0">
                        <input type="hidden" name="pleton_user" id="pleton_user" value="0">
                        <input type="hidden" name="password" id="password" value="12345">
                        <input type="hidden" name="is_delete" id="is_delete" value="0">
                        <input type="submit" class="btn btn-primary simpan" value="Submit" id="insertUser"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <!-- <button type="button" class="btn btn-primary" id="simpan-pelanggaran">SIMPAN</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL EDIT USER -->
    <div class="modal fade" id="modalEditUser" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-user">
                        <input type="hidden" name="id_edit_user" id="id_edit_user">
                        <div class="form-group">
                            <label for="no_ak">NO NRP</label>
                            <input type="text" id="no_edit_nrp" name="no_nrp" class="form-control" placeholder="Masukkan NO NRP" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_taruna">NAMA</label>
                            <input type="text" id="nama_edit_user" name="nama_user" class="form-control"  placeholder="Masukkan nama user" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">PANGKAT</label>
                            <input type="text" name="pangkat_user" id="pangkat_edit_user" class="form-control mb-2" placeholder="Masukkan pangkat user">
                            <p>note: diharapkan menggunakan huruf kapital semua</p>
                        </div>
                        <div class="form-group">
                            <label for="nilai_awal">LEVEL USER</label>
                            <select class="custom-select my-1 mr-sm-2" id="level_edit_user" name="level_user">
                                <option value="1">SUPER ADMIN</option>
                                <option value="2">DANKI</option>
                                <option value="3">DANTON</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">PASSWORD</label>
                            <input type="password" name="password" id="password_edit" class="form-control">
                        </div>
                        <div class="form-group">
                            <img src="" alt="foto_taruna" id="images_user" width=100px height=150px>
                        </div>
                        <div class="form-group">
                            <label for="foto_taruna">FOTO USER</label>
                            <input type="file" class="form-control-file" id="foto_edit_user" name="foto_user">
                        </div>
                        <input type="hidden" name="tingkat_user" id="tingkat_edit_user" value="0">
                        <input type="hidden" name="pleton_user" id="pleton_edit_user" value="0">
                        <input type="hidden" name="is_delete" id="is_delete_edit" value="0">
                        <input type="submit" class="btn btn-primary simpan" value="Submit" id="EditUser"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <!-- <button type="button" class="btn btn-primary" id="simpan-pelanggaran">SIMPAN</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL AKTIVITAS PENILAIAN YANG DILAKUKAN USER -->
    <div class="modal fade" id="modalAktifitasPenilaian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">AKTIFITAS PENILAIAN USER</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="table-responsive">
                        <table id="aktifitas-penilaian" class="table">
                            <thead>
                                <th scope="col">NO</th>
                                <th scope="col">BUKTI FOTO</th>
                                <th scope="col">KODE PELANGGARAN</th>
                                <th scope="col">KET PELANGGARAN</th>
                                <th scope="col">NILAI</th>
                                <th scope="col">NO AK</th>
                            </thead>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <!-- <button type="button" class="btn btn-primary" id="simpan-pelanggaran">SIMPAN</button> -->
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="user" class="table">
            <thead>
                <th scope="col">NO</th>
                <th scope="col">FOTO USER</th>
                <th scope="col">NO NRP</th>
                <th scope="col">NAMA</th>
                <th scope="col">PANGKAT</th>
                <th scope="col">JABATAN</th>
                <th scope="col">AKSI</th>
            </thead>
        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
        var user = $('#user').DataTable({
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/user_nsp",
               
                // url       : "http://cobakki.online/APInsp/public/api/taruna/"+id,
                method    : "GET",
                dataSrc   : "",
            },
            "columnDefs" :[
                {
                    targets: [0],
                    data: "id_user"
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
                        if(row.foto_user == null){
                            return '<img src="img/person-placeholder.jpg" width=100px height=150px>';
                        }else{
                            return '<img src="'+row.foto_user+'"  width=100px height=150px>';
                        }
                        // return '<a href="''">' + Edit + '</a>';
                        // return '<img src="'+row.foto_user+'"  width=100px height=150px>';
                    }
                    
                },
                {
                    
                    "targets": [2],
                    data : "no_nrp"
                },
                {
                    "targets": [3],
                    data  : "nama_user"
                    
                },
                {
                    "targets": [4],
                    data : "pangkat_user"
                },
                {
                    "targets":[5],
                    render: function(data, type, row) {
                        if(row.level_user === 2){
                            return "DANKI";
                        }else{
                            return "DANTON";
                        }
                    }
                    // data : "jenis_kelamin"
                },
                
                {
                    "targets": [6],
                    render: function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<button id="'+row.id_user+'" class="btn btn-warning edit_user text-light mr-2"><i class="fas fa-edit"></i><span> EDIT</span></button>'+
                        '<button id="'+row.id_user+'" class="btn btn-danger hapus_user text-light mr-2"><i class="fas fa-trash"></i><span> HAPUS</span></button>'+
                        '<button id="'+row.no_nrp+'" class="btn btn-info aktifitas_user text-light"><i class="fas fa-tasks"></i><span> AKTIFITAS</span></button>';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                }
            ],
        });
        user.on( 'order.dt search.dt', function () {
            user.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

         // FUNGSI UNTUK SUBMIT USER KE DATABASE MELALUI API
         $('form#form-tambah-user').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url    : "http://dpongs.com/APInsp/public/api/user_nsp",
                method : "POST",
                data   : formData,
                success: function(data){

                    if(data.success == false ){
                        alert('NO NRP sudah terdaftar, silahkan isi NO NRP yang belum terdaftar');
                    }else{
                        $('#modalTambahUser').modal('hide');
                        alert('Sukses melakukan penambahan user');
                        $('#page-top #wrapper #manajemen_user').trigger('click');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    }
                    // $('#modalTambahUser').modal('hide');
                    // alert('Sukses melakukan penambahan user');
                    // $('#page-top #wrapper #manajemen_user').trigger('click');
                    // $('body').removeClass('modal-open');
                    // $('.modal-backdrop').remove();
                    
                },
                cache: false,
                contentType: false,
                processData: false,
                error: function(error){
                    alert('Gagal melakukan penambahan user');
                }
            })
            
        });

        // FUNGSI UNTUK MENGAMBIL DATA USER BERDASARKAN ID DATA TARUNA
        $(document).on('click','.edit_user',function(e){
            e.preventDefault();
            var id_user = $(this).attr("id");
            $.ajax({
                // url         : "http://cobakki.online/APInsp/public/api/rew_puni/"+id_pelanggaran,
                url         : "http://dpongs.com/APInsp/public/api/user_nsp/"+id_user,
                method      : "GET",
                dataType    : "json",
                success     : function(data){
                    $('#id_edit_user').val(data[0]['id_user']);
                    $('#no_edit_nrp').val(data[0]['no_nrp']);
                    $('#nama_edit_user').val(data[0]['nama_user']);
                    $('#pangkat_edit_user').val(data[0]['pangkat_user']);
                    $('#level_edit_user').val(data[0]['level_user']);
                    $('#images_user').attr('src',data[0]['foto_user']);
                    $('#password_edit').val(data[0]['password']);
                    $('#tingkat_edit_user').val(data[0]['tingkat_user']);
                    $('#pleton_edit_user').val(data[0]['pleton_user']);
                    $('#is_edit_delete').val(data[0]['is_delete']);
                    $('#editUser').val('Update');
                    $('#modalEditUser').modal('show');
                },
                error: function(error) {
                    alert(error);
                }
            });
        });

         // FUNGSI EDIT USER
         $('form#form-edit-user').submit(function(e){
            e.preventDefault();
            var id = $("#id_edit_user").val();
            // var foto_taruna = $("#modalEditTaruna").find("input[type='file']").val();
            var formData = new FormData(this);
            $.ajax({
                url    : "http://dpongs.com/APInsp/public/api/user_nsp/"+id,
                method : "POST",
                data   : formData,
                success: function(response){
                    $('#modalEditUser').modal('hide');
                    alert('Sukses melakukan update terhadap user');
                    $('#page-top #wrapper #manajemen_user').trigger('click');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    
                },
                error: function(error){
                    alert("Gagal update data user");
                },
                cache: false,
                contentType: false,
                processData: false
            });
            
        });

        // FUNGSI DELETE USER
        $(document).on('click', '.hapus_user', function(e){
            e.preventDefault();
            var id = $(this).attr("id");
            $.ajax({
                type        : "PUT",
                url         : "http://dpongs.com/APInsp/public/api/user_nsp/delete/"+id,
                data        : {id:id},
                dataType    : "JSON",
                beforeSend  : function(){
                    return confirm('Anda Yakin Menghapus ?');
                },
                success     : function(){
                    alert('Sukses menghapus data user');
                    $('#page-top #wrapper #manajemen_user').trigger('click');
                },
                error: function(error) {
                    alert('Gagal untuk menghapus data user');
                }
            });
            
        });

        // FUNGSI MENGAMBIL DATA DARI HISTORY NILAI UNTUK DITAMPILKAN PADA AKTIFITAS USER
        $('#user').on('click','.aktifitas_user',function(e){
            e.preventDefault();
            var no_nrp      = $(this).attr("id");
            $('#modalAktifitasPenilaian').modal('show');
            var aktifitas_penilaian = $('#aktifitas-penilaian').DataTable({
                "processing" : true,
                serverside   : true,
                "ajax": {
                    url          : "http://dpongs.com/APInsp/public/api/temp_nilai/id_user/"+no_nrp,
                    method       : "GET",
                    // data         :{
                    //     "no_ak":no_ak
                    // },
                    // "contentType": "application/json",
                    dataSrc      : "",
                },
                "columnDefs" :[
                    {
                        targets: [0],
                        data: "id_temp_nilai"
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
                            return '<img src="'+row.bukti_foto+'" width=100px height=150px>';
                        }
                        
                    },
                    {
                        
                        "targets": [2],
                        data : "kode_pelanggaran"
                    },
                    {
                        "targets": [3],
                        data  : "ket_pelanggaran"
                        
                    },
                    {
                        "targets": [4],
                        // data static
                        data : "nilai"
                    
                    },
                    {
                        "targets": [5],
                        // render: function(data, type, row) {
                        //     // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        //     // return '<a href="''">' + Edit + '</a>';
                        //     return '<button id="'+row.no_ak+'" class="btn btn-success nilai_taruna text-light mr-2"><i class="fas fa-edit"></i><span> NILAI</span></button>'+
                        //     '<button id="'+row.no_ak+'" class="btn btn-info view_taruna text-light"><i class="fas fa-eye"></i><span> VIEW</span></button>'+
                        //     '<input type="hidden" name="tabel_no_ak" id="tabel_no_ak" value="'+row.no_ak+'">';
                        //     // return "/";
                        //     // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                        // }
                        data : "no_ak"
                    }
                ],
                destroy: true
            });
            aktifitas_penilaian.on( 'order.dt search.dt', function () {
               aktifitas_penilaian.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        });
    });
</script>