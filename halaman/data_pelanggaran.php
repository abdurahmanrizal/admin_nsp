<?php
    $tingkat = $_POST['tingkat'];
    if($tingkat == 0){
        echo "<div class='alert alert-danger text-center'> Tidak terdapat data yang ditampilkan ";
        echo "</div>";
    }else{?>
<div class="container">
    <!-- Breadcrumbs-->
    <br>
    <a href="#" id="tambahPelanggaran"class="btn btn-success mb-4" data-toggle="modal" data-target="#modalTambahPelanggaran">
        <i class="fas fa-plus"></i>
        <span>Tambah Pelanggaran</span>
    </a>
    <!-- modal tambah pelanggaran -->
    <!-- Modal -->
    <div class="modal fade" id="modalTambahPelanggaran" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TAMBAH PELANGGARAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-pelanggaran">
                        <input type="hidden" name="id_pelanggaran" id="pelanggaran_id">
                        <div class="form-group">
                            <label for="kode_pelanggaran">Kode Pelanggaran</label>
                            <input type="text" id="kode_pelanggaran" name="kode_pelanggaran" class="form-control" placeholder="Kode pelanggaran" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan_pelanggaran">Keterangan Pelanggaran</label>
                            <input type="text" id="ket_pelanggaran" name="ket_pelanggaran" class="form-control"  placeholder="Keterangan pelanggaran" required>
                        </div>
                        <div class="form-group">
                            <label for="nilai_pelanggaran">Nilai Pelanggaran</label>
                            <input type="number" id="nilai_pelanggaran" name="nilai" class="form-control"  placeholder="Nilai pelanggaran" required>
                        </div>
                        <input type="hidden" name="status" id="status_pelanggaran" value="1">
                        <input type="hidden" name="is_delete" id="is_delete" value="0">
                        <input type="submit" class="btn btn-primary simpan" value="Submit" id="insertPelanggaran"/>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <!-- <button type="button" class="btn btn-primary" id="simpan-pelanggaran">SIMPAN</button> -->
                </div>
            </div>
        </div>
    </div>
    
    <div class="table-responsive">
         <table id="example" class="table table-striped display data_pelanggaran" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">KODE PELANGGARAN</th>
                    <th scope="col">NAMA PELANGGARAN</th>
                    <th scope="col">NILAI</th>
                    <th scope="col" class="text-center">STATUS</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
</div>
    <?php } ?>
<script>
   $(document).ready(function() {
       var tingkat_user = "<?php echo $tingkat ?>";
       var url;
        if(tingkat_user == 1){
            url = "http://dpongs.com/APInsp/public/api/rew_puni_1/status/1";
        }else if(tingkat_user == 2){
            url = "http://dpongs.com/APInsp/public/api/rew_puni_2/status/1";
        }else if(tingkat_user == 3){
            url = "http://dpongs.com/APInsp/public/api/rew_puni_3/status/1";
        }else{
            url = "http://dpongs.com/APInsp/public/api/rew_puni_4/status/1";
        }
        var t = $('#example').DataTable({
            "columnDefs" :[
                {
                    targets: [0],
                    data: "id_pelanggaran"
                    // "searchable" : false,
                    // "orderable"  : false
                },
                {
                    
                    // "render": function(data, type, row) {
                    //     return data.kode_pelanggaran; 
                    // },
                    "targets": [1],
                    data : "kode_pelanggaran"
                    // "orderable"  : false
                },
                {
                    "targets": [2],
                    // render: function(data, type, row) {
                    //     return data.ket_pelanggaran;
                    // }
                    data  : "ket_pelanggaran"
                    
                },
                {
                    "targets": [3],
                    // render: function(data, type, row) {
                    //     return data.nilai;
                    // }
                    data  : "nilai"
                   
                },
                {
                    "targets": [4],
                    data : "status",
                    render: function(data, type, row) {
                        return data == '1' ? 'Pelanggaran' : 'Pujian';
                    }
                   
                },
                {
                    "targets": [5],
                    // data : "status",
                    render: function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<button id="'+row.id_pelanggaran+'" class="btn btn-warning edit-pelanggaran text-light mb-2"><i class="fas fa-edit"></i><span> EDIT</span></button> ' 
                        + '<br>' + '<button id="'+row.id_pelanggaran+'" class="btn btn-danger delete-pelanggaran"><i class="fas fa-trash"></i><span> DELETE<span></button>';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                   
                },
            ],
            "processing" :true,
            serverside: true,
            ajax: {
                // url       : "http://cobakki.online/APInsp/public/api/rew_puni/status/1",
                url       : url,
                // url       : "http://dpongs.com/APInsp/public/api/rew_puni_1/status/1",
                dataSrc   : "",
            },
            
            
        });
        t.on( 'order.dt search.dt', function () {
            t.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
        // fungsi reset setelah menekan tombol tambah pelanggaran
        $('#tambahPelanggaran').click(function(){
            $('#insertPelanggaran').val("Submit");
            $('#form-pelanggaran')[0].reset();
            $('input#nilai_pelanggaran').bind('keypress', function (e) {
                return !(e.which != 8 && e.which != 0 &&
                        (e.which < 48 || e.which > 57) && e.which != 46);
            });
            document.getElementById('kode_pelanggaran').readOnly = false;
        });
        // fungsi menambah data untuk pelanggaran
        var dynamicUrl = "";
        var method = "";
        $('#form-pelanggaran').on('submit', function(e){
            e.preventDefault();
            var id = $("#modalTambahPelanggaran").find("input[name='id_pelanggaran']").val();
            if(id){
                // dynamicUrl = "https://cobakki.online/APInsp/public/api/rew_puni/"+id,
                // dynamicUrl = "https://dpongs.com/APInsp/public/api/rew_puni_1/"+id,
                dynamicUrl = url+id,
                method     = "PUT"
            }else{
                // dynamicUrl = "https://cobakki.online/APInsp/public/api/rew_puni",
                // dynamicUrl = "https://dpongs.com/APInsp/public/api/rew_puni_1",
                dynamicUrl = url,
                method     = "POST",
                document.getElementById('pelanggaran_id').disabled = true; 

            }
            $.ajax({
                // url: 'https://cobakki.online/APInsp/public/api/rew_puni',
                url: dynamicUrl,
                type: method,
                data : $('#form-pelanggaran').serialize(),
                dataType: 'JSON',
                success: function(){
                  $('#modalTambahPelanggaran').modal('hide');
                  $('#form-pelanggaran').trigger('reset');
                  if(id){
                    alert('Sukses update data pelanggaran');
                  }else{
                    alert('Sukses menambahkan data pelanggaran');
                  }
                  $('body').removeClass('modal-open');
                  $('.modal-backdrop').remove();
                  $('#page-top #wrapper #pelanggaran').trigger('click');
                },
                error: function(error){
                    alert(error);
                }
                // tambah handling error
            });
        });
        // fungsi menampilkan Edit pelanggaran
        $(document).on('click', '.edit-pelanggaran', function(e){
            e.preventDefault();
            var id_pelanggaran = $(this).attr("id");
            $.ajax({
                // url         : "http://cobakki.online/APInsp/public/api/rew_puni/"+id_pelanggaran,
                url         : url+id_pelanggaran,
                method      : "GET",
                dataType    : "json",
                success     : function(data){
                    // $('#kode_edit_pelanggaran').val(data.kode_pelanggaran);
                    // $('#ket_edit_pelanggaran').val(data.ket_pelanggaran);
                    // $('#nilai_edit_pelanggaran').val(data.nilai);
                    // $('#status_edit_pelanggaran').val(data.status);
                    // $('#pelanggaran_id').val(data.id_pelanggaran);
                    $('#kode_pelanggaran').val(data[0].kode_pelanggaran);
                    $('#ket_pelanggaran').val(data[0].ket_pelanggaran);
                    $('#nilai_pelanggaran').val(data[0].nilai);
                    $('#status_pelanggaran').val(data[0].status);
                    $('#pelanggaran_id').val(data[0].id_pelanggaran);
                    $('#insertPelanggaran').val("Update");
                    // document.getElementById('kode_edit_pelanggaran').readOnly = true;
                    document.getElementById('kode_pelanggaran').readOnly = true; 
                    // $('#modalEditPelanggaran').modal('show');
                    $('#modalTambahPelanggaran').modal('show');
                },
                error: function(error) {
                    alert(error);
                }
            });
            
        });
        // fungsi edit pelanggaran
        // $('#form-edit-pelanggaran').on('submit', function(e){
        //     e.preventDefault();
        //     var id = $("#modalEditPelanggaran").find("input[name='id_pelanggaran']").val();
        //     $.ajax({
        //         url: 'https://cobakki.online/APInsp/public/api/rew_puni/'+id,
        //         // data: {id_pelanggaran:id, kode_pelanggaran:kode_pelanggaran, ket_pelanggaran:ket_pelanggaran, nilai:nilai, status:status},
        //         type: 'PUT',
        //         data : $('#form-edit-pelanggaran').serialize(),
        //         dataType: 'JSON',
        //         // crossDomain: true,
        //         // contentType: 'application/json;charset=utf-8',
        //         success: function(){
        //           $('#modalEditPelanggaran').modal('hide');
        //           $('#form-edit-pelanggaran').trigger('reset');
        //           alert('Sukses update data pelanggaran');
        //           $('#page-top #wrapper #pelanggaran').trigger('click');
        //         },
        //         error: function(error){
        //             alert(error);
        //             console.log(error);
        //         }
        //         // tambah handling error
        //     });
        // });
        // fungsi delete pelanggaran
        $(document).on('click', '.delete-pelanggaran', function(e){
            e.preventDefault();
            var id = $(this).attr("id");
            $.ajax({
                // url         : "http://cobakki.online/APInsp/public/api/rew_puni/"+id,
                url         : url+id,
                dataType    : "JSON",
                type        : "DELETE",
                contentType : 'application/json;charset=utf-8',
                data        : {id:id},
                async       : true,
                processData : false,
                cache       : false,
                beforeSend  : function(){
                    return confirm('Anda Yakin Menghapus ?');
                },
                success     : function(){
                    // if(message == "Successfull delete rew_puni"){
                        alert('Sukses menghapus data pelanggaran');
                        $('#page-top #wrapper #pelanggaran').trigger('click');
                    // }  
                },
                error: function(error) {
                    alert('Gagal untuk menghapus data pelanggaran');
                }
            });
            
        });

    });
    
</script>