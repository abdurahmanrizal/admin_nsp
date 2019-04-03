<?php
    $tingkat = $_POST['tingkat'];
    if($tingkat == 0){
        echo "<div class='alert alert-danger text-center'> Tidak terdapat data yang ditampilkan ";
        echo "</div>";
    }else{?>
    <!-- Breadcrumbs-->
    <br>
    <a href="#" id="tambahPujian"class="btn btn-success mb-4" data-toggle="modal" data-target="#modalTambahPujian">
        <i class="fas fa-plus"></i>
        <span>Tambah Pujian</span>
    </a>
    <!-- modal tambah pelanggaran -->
    <!-- Modal -->
    <div class="modal fade" id="modalTambahPujian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="changeHeaderPujian">TAMBAH PUJIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form id="form-pujian">
                        <input type="hidden" name="id_pelanggaran" id="pelanggaran_id">
                        <div class="form-group">
                            <label for="kode_pelanggaran">Kode Pujian</label>
                            <input type="text" id="kode_pujian" name="kode_pelanggaran" class="form-control" placeholder="Kode pujian" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan_pelanggaran">Keterangan Pujian</label>
                            <input type="text" id="ket_pujian" name="ket_pelanggaran" class="form-control"  placeholder="Keterangan pujian" required>
                        </div>
                        <div class="form-group">
                            <label for="nilai_pelanggaran">Nilai Pujian</label>
                            <input type="text" id="nilai_pujian" name="nilai" class="form-control"  placeholder="Nilai pujian" required>
                        </div>
                        <input type="hidden" name="status" id="status_pujian" value="0">
                        <input type="hidden" name="is_delete" id="is_delete" value="0">
                        <input type="submit" class="btn btn-primary simpan" value="Submit" id="insertPujian"/>
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
         <table id="example_pujian" class="table table-striped display data_pujian" style="width:100%">
            <thead>
                <tr>
                    <th scope="col">NO</th>
                    <th scope="col">KODE PUJIAN</th>
                    <th scope="col">NAMA PUJIAN</th>
                    <th scope="col">NILAI</th>
                    <th scope="col" class="text-center">STATUS</th>
                    <th scope="col">AKSI</th>
                </tr>
            </thead>
            <tbody>
               
            </tbody>
        </table>
    </div>
    <?php } ?>
<script>
   $(document).ready(function() {
       var tingkat_user = "<?php echo $tingkat ?>";
       var url;
        if(tingkat_user == 1){
            url = "http://dpongs.com/APInsp/public/api/rew_puni_1/status/0";
        }else if(tingkat_user == 2){
            url = "http://dpongs.com/APInsp/public/api/rew_puni_2/status/0";
        }else if(tingkat_user == 3){
            url = "http://dpongs.com/APInsp/public/api/rew_puni_3/status/0";
        }else{
            url = "http://dpongs.com/APInsp/public/api/rew_puni_4/status/0";
        }
        var test = $('#example_pujian').DataTable({
            "columnDefs" :[
                {
                    "targets": [0],
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
                        return '<button id="'+row.id_pelanggaran+'" class="btn btn-warning edit-pujian text-light mb-2"><i class="fas fa-edit"></i><span> EDIT</span></button> ' 
                        + '<br>' + '<button id="'+row.id_pelanggaran+'" class="btn btn-danger delete-pujian"><i class="fas fa-trash"></i><span> DELETE<span></button>';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                   
                },
            ],
            "processing" :true,
            serverside: true,
            ajax: {
                // url       : "http://cobakki.online/APInsp/public/api/rew_puni/status/1",
                // url       : "http://dpongs.com/APInsp/public/api/rew_puni_1/status/0",
                url       : url,
                dataSrc   : "",
            },
            
            
        });
        test.on( 'order.dt search.dt', function () {
            test.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();
        // fungsi reset setelah menekan tombol tambah pelanggaran
        $('#tambahPujian').click(function(){
            $('#insertPujian').val("Submit");
            $('#form-pujian')[0].reset();
            $('input#nilai_pujian').bind('keypress', function (e) {
                return !(e.which != 8 && e.which != 0 &&
                        (e.which < 48 || e.which > 57) && e.which != 46);
            });
            document.getElementById('kode_pujian').readOnly = false;
            document.getElementById('changeHeaderPujian').innerHTML = "TAMBAH PUJIAN";
        });
        // fungsi menambah data untuk pelanggaran
        var dynamicUrl = "";
        var method = "";
        $('#form-pujian').on('submit', function(e){
            e.preventDefault();
            var id = $("#modalTambahPujian").find("input[name='id_pelanggaran']").val();
            if(id){
                // dynamicUrl = "https://cobakki.online/APInsp/public/api/rew_puni/"+id,
                dynamicUrl = "https://dpongs.com/APInsp/public/api/rew_puni_1/"+id,
                method     = "PUT"
            }else{
                // dynamicUrl = "https://cobakki.online/APInsp/public/api/rew_puni",
                dynamicUrl = "https://dpongs.com/APInsp/public/api/rew_puni_1",
                method     = "POST",
                document.getElementById('pelanggaran_id').disabled = true; 

            }
            $.ajax({
                // url: 'https://cobakki.online/APInsp/public/api/rew_puni',
                url: dynamicUrl,
                type: method,
                data : $('#form-pujian').serialize(),
                dataType: 'JSON',
                success: function(response){
                  $('#modalTambahPujian').modal('hide');
                  $('#form-pujian').trigger('reset');
                  if(id){
                    alert('Sukses update data pujian');
                  }else{
                    if(response.message == "Successfull create new rew_puni"){
                        alert('Sukses menambahkan data pujian');
                        console.log(data.kode_pelanggaran);    
                    }else{
                        console.log(response.message);
                    }
                    
                  }
                  $('body').removeClass('modal-open');
                  $('.modal-backdrop').remove();
                  $('#page-top #wrapper #pujian').trigger('click');
                },
                error: function(error){
                    alert(error);
                }
                // tambah handling error
            });
        });
        // fungsi menampilkan Edit pelanggaran
        $(document).on('click', '.edit-pujian', function(e){
            e.preventDefault();
            var id_pujian = $(this).attr("id");
            $.ajax({
                // url         : "http://cobakki.online/APInsp/public/api/rew_puni/"+id_pelanggaran,
                url         : "http://dpongs.com/APInsp/public/api/rew_puni_1/"+id_pujian,
                method      : "GET",
                dataType    : "json",
                success     : function(data){
                    $('#kode_pujian').val(data[0].kode_pelanggaran);
                    $('#ket_pujian').val(data[0].ket_pelanggaran);
                    $('#nilai_pujian').val(data[0].nilai);
                    $('#status_pujian').val(data[0].status);
                    $('#pelanggaran_id').val(data[0].id_pelanggaran);
                    $('#insertPujian').val("Update");
                    // document.getElementById('kode_edit_pelanggaran').readOnly = true;
                    document.getElementById('kode_pujian').readOnly = true; 
                    document.getElementById('changeHeaderPujian').innerHTML = "UPDATE PUJIAN";
                    // $('#modalEditPelanggaran').modal('show');
                    $('#modalTambahPujian').modal('show');
                },
                error: function(error) {
                    alert(error);
                }
            });
            
        });
        // fungsi delete pelanggaran
        $(document).on('click', '.delete-pujian', function(e){
            e.preventDefault();
            var id              = $(this).attr("id");
            var confirmation    = confirm("Anda yakin ingin menghapus");
            if(confirmation){
                $.ajax({
                url         : "http://dpongs.com/APInsp/public/api/rew_puni_1/"+id,
                dataType    : "JSON",
                type        : "DELETE",
                contentType : 'application/json;charset=utf-8',
                data        : {id:id},
                async       : true,
                processData : false,
                cache       : false,
                success     : function(response){
                    if(response.message == "Successfull delete rew_puni"){
                        alert('Sukses menghapus data pujian');
                        $('#page-top #wrapper #pujian').trigger('click');
                    }
                },
                error: function(error) {
                    alert('Gagal untuk menghapus data pujian');
                }
                });     
            }else{
                return false;
            }
           
            
        });

    });
    
</script>