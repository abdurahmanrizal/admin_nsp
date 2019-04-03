<div class="container-fluid">
    <!-- Breadcrumbs-->
    <ol class="breadcrumb">
        <li class="breadcrumb-item">
        <a href="#">Halaman Manajemen Taruna</a>
        </li>
        <li class="breadcrumb-item active">Overview</li>
    </ol>
    <a href="#" id="tambah_taruna"class="btn btn-success mb-4" data-toggle="modal" data-target="#modalTambahTaruna">
        <i class="fas fa-user-plus"></i>
        <span>Tambah Taruna</span>
    </a>
    <!-- MODAL TAMBAH TARUNA -->
    <div class="modal fade" id="modalTambahTaruna" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TAMBAH TARUNA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-tambah-taruna">
                        <input type="hidden" name="id_taruna" id="id_taruna">
                        <div class="form-group">
                            <label for="no_ak">NO AK</label>
                            <input type="text" id="no_ak" name="no_ak" class="form-control" placeholder="Masukkan NO AK" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_taruna">NAMA TARUNA</label>
                            <input type="text" id="nama_taruna" name="nama_taruna" class="form-control"  placeholder="Masukkan nama taruna" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">JENIS KELAMIN</label>
                            <select class="custom-select my-1 mr-sm-2" id="jenis_kelamin" name="jenis_kelamin">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai_awal">NILAI AWAL</label>
                            <input type="number" id="nilai_awal" name="nilai_awal" class="form-control"  value="85" readonly>
                        </div>
                        <div class="form-group">
                            <label for="foto_taruna">FOTO TARUNA</label>
                            <input type="file" class="form-control-file" id="foto_taruna" name="foto_taruna">
                        </div>
                        <input type="hidden" name="tingkat_taruna" id="tingkat_taruna" value="0">
                        <input type="hidden" name="pleton_taruna" id="pleton_taruna" value="0">
                        <input type="hidden" name="id_danton" id="id_danton" value="0">
                        <input type="hidden" name="is_delete" id="is_delete" value="0">
                        <input type="submit" class="btn btn-primary simpan" value="Submit" id="insertTaruna"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <!-- <button type="button" class="btn btn-primary" id="simpan-pelanggaran">SIMPAN</button> -->
                </div>
            </div>
        </div>
    </div>
    <!-- MODAL EDIT TARUNA -->
    <div class="modal fade" id="modalEditTaruna" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">EDIT TARUNA</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-edit-taruna">
                        <input type="hidden" name="id_taruna" id="id_edit_taruna">
                        <div class="form-group">
                            <label for="no_ak">NO AK</label>
                            <input type="text" id="no_edit_ak" name="no_ak" class="form-control" placeholder="Masukkan NO AK" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_taruna">NAMA TARUNA</label>
                            <input type="text" id="nama_edit_taruna" name="nama_taruna" class="form-control"  placeholder="Masukkan nama taruna" required>
                        </div>
                        <div class="form-group">
                            <label for="jenis_kelamin">JENIS KELAMIN</label>
                            <select class="custom-select my-1 mr-sm-2" id="jenis_edit_kelamin" name="jenis_kelamin">
                                <option value="L">Laki-laki</option>
                                <option value="P">Perempuan</option>
                            </select>
                        </div>
                        <div class="form-group">
                            <label for="nilai_awal">NILAI AWAL</label>
                            <input type="number" id="nilai_edit_awal" name="nilai_awal" class="form-control"  value="85" readonly>
                        </div>
                        <div class="form-group">
                            <img src="" alt="foto_taruna" id="images_taruna" width=100px height=150px>
                        </div>
                        <div class="form-group">
                            <label for="foto_taruna">FOTO TARUNA</label>
                            <input type="file" class="form-control-file" id="foto_edit_taruna" name="foto_taruna">
                        </div>
                        <input type="hidden" name="tingkat_taruna" id="tingkat_edit_taruna" value="0">
                        <input type="hidden" name="pleton_edit_taruna" id="pleton_edit_taruna" value="0">
                        <input type="hidden" name="id_danton" id="id_edit_danton" value="0">
                        <input type="hidden" name="is_delete" id="is_edit_delete" value="0">
                        <input type="submit" class="btn btn-primary simpan" value="Submit" id="editTaruna"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
        <table id="taruna" class="table">
            <thead>
                <th scope="col">NO</th>
                <th scope="col">FOTO TARUNA</th>
                <th scope="col">NO AK</th>
                <th scope="col">NAMA</th>
                <th scope="col">JENIS KELAMIN</th>
                <th scope="col">AKSI</th>
            </thead>
            
        </table>
    </div>
</div>
<script>
    $(document).ready(function(){
        var taruna = $('#taruna').DataTable({
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/taruna",
               
                // url       : "http://cobakki.online/APInsp/public/api/taruna/"+id,
                method    : "GET",
                dataSrc   : "",
            },
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
                        if(row.foto_taruna == null){
                            return '<img src="img/person-placeholder.jpg"  width=100px height=150px>';
                        }else{
                            return '<img src="'+row.foto_taruna+'"  width=100px height=150px>';
                        }
                        // return '<a href="''">' + Edit + '</a>';
                        // return '<img src="'+row.foto_taruna+'"  width=100px height=150px>';
                    }
                    
                },
                {
                    
                    "targets": [2],
                    data : "no_ak"
                },
                {
                    "targets": [3],
                    data  : "nama_taruna"
                    
                },
                {
                    "targets":[4],
                    render: function(data, type, row) {
                        if(row.jenis_kelamin === 'L'){
                            return "Laki-laki";
                        }else{
                            return "Perempuan";
                        }
                    }
                    // data : "jenis_kelamin"
                },
                
                {
                    "targets": [5],
                    render: function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<button id="'+row.id_taruna+'" class="btn btn-warning edit_taruna text-light mr-2"><i class="fas fa-edit"></i><span> EDIT</span></button>'+
                        '<button id="'+row.id_taruna+'" class="btn btn-danger hapus_taruna text-light"><i class="fas fa-trash"></i><span> HAPUS</span></button>';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                }
            ],
        });
        taruna.on( 'order.dt search.dt', function () {
            taruna.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
 
        // FUNGSI UNTUK SUBMIT TARUNA KE DATABASE MELALUI API
        $('form#form-tambah-taruna').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url    : "http://dpongs.com/APInsp/public/api/taruna",
                method : "POST",
                data   : formData,
                success: function(response){
                    if(response.success == false){
                        alert('No ak sudah terdaftar, silahkan masukkan no ak yang belum terdaftar');
                    }else{
                        $('#modalTambahTaruna').modal('hide');
                        alert('Sukses melakukan tambah taruna/taruni');
                        $('#page-top #wrapper #manajemen_taruna').trigger('click');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                    }
                    // $('#modalTambahTaruna').modal('hide');
                    // alert('Sukses melakukan tambah taruna/taruni');
                    // $('#page-top #wrapper #manajemen_taruna').trigger('click');
                    // $('body').removeClass('modal-open');
                    // $('.modal-backdrop').remove();
                    
                },
                cache: false,
                contentType: false,
                processData: false,
                error: function(error){
                    alert(error);
                }
            })
            
        });

        // FUNGSI UNTUK MENGAMBIL DATA TARUNA BERDASARKAN ID DATA TARUNA
        $(document).on('click','.edit_taruna',function(e){
            e.preventDefault();
            var id_taruna = $(this).attr("id");
            $.ajax({
                // url         : "http://cobakki.online/APInsp/public/api/rew_puni/"+id_pelanggaran,
                url         : "http://dpongs.com/APInsp/public/api/taruna/"+id_taruna,
                method      : "GET",
                dataType    : "json",
                success     : function(data){
                    $('#id_edit_taruna').val(data[0]['id_taruna']);
                    $('#no_edit_ak').val(data[0]['no_ak']);
                    $('#nama_edit_taruna').val(data[0]['nama_taruna']);
                    $('#jenis_edit_kelamin').val(data[0]['jenis_kelamin']);
                    $('#nilai_awal').val(data[0]['nilai_awal']);
                    $('#images_taruna').attr('src',data[0]['foto_taruna']);
                    // $('#foto_taruna').val(data[0]['foto_taruna']);
                    $('#tingkat_edit_taruna').val(data[0]['tingkat_taruna']);
                    $('#pleton_edit_taruna').val(data[0]['pleton_taruna']);
                    // if(data[0]['foto_taruna'] == ""){
                    //     $('#foto_taruna').prop('type','file');
                    // }else{
                    //     $('#foto_taruna').val(data[0]['foto_taruna']);
                    //     $('#foto_taruna').prop('type', 'text');
                    // }
                    // $('input[type="file"]#foto_edit_taruna').val(data[0]['foto_taruna']);
                    $('#id_edit_danton').val(data[0]['id_danton']);
                    $('#is_edit_delete').val(data[0]['is_delete']);
                    $('#editTaruna').val('Update');
                    // document.getElementById('kode_edit_pelanggaran').readOnly = true;
                    // document.getElementById('kode_pelanggaran').readOnly = true; 
                    // $('#modalEditPelanggaran').modal('show');
                    $('#modalEditTaruna').modal('show');
                },
                error: function(error) {
                    alert(error);
                }
            });
        });

        // FUNGSI EDIT taruna
        $('form#form-edit-taruna').submit(function(e){
            e.preventDefault();
            var id = $("#id_edit_taruna").val();
            var foto_taruna = $("#modalEditTaruna").find("input[type='file']").val();
            // var formData;
            // if(foto_taruna == ""){
            //     formData = $('form#form-edit-taruna').serialize();
            // }else{
            //     formData = new FormData(this);
            // }
            var formData = new FormData(this);
            $.ajax({
                url    : "http://dpongs.com/APInsp/public/api/taruna/"+id,
                method : "POST",
                data   : formData,
                success: function(response){
                    $('#modalEditTaruna').modal('hide');
                    // if(id){
                    //     alert('Sukses melakukan update taruna/taruni');
                    // }else{
                    //     alert('Sukses melakukan tambah taruna/taruni');
                    // }
                    alert('Sukses melakukan update taruna/taruni');
                    $('#page-top #wrapper #manajemen_taruna').trigger('click');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    
                },
                error: function(error){
                    alert("Gagal update data taruna/taruni");
                },
                cache: false,
                contentType: false,
                processData: false
            });
            
        });

        // FUNGSI DELETE TARUNA
        $(document).on('click', '.hapus_taruna', function(e){
            e.preventDefault();
            var id = $(this).attr("id");
            $.ajax({
                type        : "PUT",
                url         : "http://dpongs.com/APInsp/public/api/taruna/delete/"+id,
                data        : {id:id},
                dataType    : "JSON",
                beforeSend  : function(){
                    return confirm('Anda Yakin Menghapus ?');
                },
                success     : function(){
                    alert('Sukses menghapus data taruna');
                    $('#page-top #wrapper #manajemen_taruna').trigger('click');
                },
                error: function(error) {
                    alert('Gagal untuk menghapus data taruna');
                }
            });
            
        });
    });
</script>