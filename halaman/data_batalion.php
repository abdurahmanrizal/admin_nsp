<?php
    $tingkat=$_POST['tingkat'];
    $pleton = $_POST['pleton'];
    if($pleton == 0 && $tingkat == 0 || $pleton != 0 && $tingkat == 0 || $pleton == 0 && !empty($tingkat)){
        echo "<div class='alert alert-danger text-center'> Tidak terdapat data yang ditampilkan ";
        echo "</div>";
    }else{?>


<h4 class="text-center">DANTON PLETON</h4>
<button class="btn btn-success mb-2" data-toggle="modal" data-target="#ModalGantiDanton" id="ganti-danton">
    <i class="fas fa-user-plus"></i>
    <span>GANTI DANTON</span>
</button>
<!-- Modal DANTON -->
<div class="modal fade" id="ModalGantiDanton" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">GANTI DANTON</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="ganti-danton">
            <div class="table-responsive">
                <table id="tabel_danton" class="table table-striped display" style="width:100%;">
                    <thead>
                        <tr>
                            <th scope="col">Checklist</th>
                            <th scope="col">FOTO DANTON</th>
                            <th scope="col">NO NRP</th>
                            <th scope="col">NAMA</th>
                            <th scope="col">PANGKAT</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <input type="hidden" name="pleton_user" id="pleton_user" value="<?php echo $pleton;?>">
            <input type="hidden" name="tingkat_user" id="tingkat_user" value="<?php echo $tingkat;?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<div class="table-responsive">
    <table id="danton" class="table table-striped">
        <thead>
            <th scope="col">NO</th> 
            <th scope="col">FOTO DANTON</th>
            <th scope="col">NRP</th>
            <th scope="col">NAMA</th>
            <th scope="col">PANGKAT</th>
            <th scope="col">AKSI</th>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<br>
<h4 class="text-center">Taruna</h4>
<br>
<a href="#" class="btn btn-success"  data-toggle="modal" data-target="#ModalTambahTaruna">
    <i class="fas fa-user-plus"></i>
    <span>TAMBAH TARUNA</span>
</a>
<!-- Modal TARUNA -->
<div class="modal fade" id="ModalTambahTaruna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">Taruna</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="tambah-taruna">
            <div class="table-responsive">
                <table id="tabel_tambah_taruna" class="table table-striped display" style="width:100%;">
                    <thead>
                        <tr>
                            <th scope="col">Checklist</th>
                            <th scope="col">FOTO TARUNA</th>
                            <th scope="col">NO NRP</th>
                            <th scope="col">NAMA</th>
                        </tr>
                        
                    </thead>
                    <tbody>
                    </tbody>
                </table>
            </div>
            <input type="hidden" name="pleton_taruna" id="pleton_taruna" value="<?php echo $pleton;?>">
            <input type="hidden" name="tingkat_taruna" id="tingkat_taruna" value="<?php echo $tingkat;?>">
            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
      </div>
      <!-- <div class="modal-footer">
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div> -->
    </div>
  </div>
</div>
<a href="#" class="btn btn-danger hapus-taruna" id="hapus-taruna">
    <i class="fas fa-trash"></i>
    <span>HAPUS TARUNA</span>
</a>
<!-- <a href="#" class="btn btn-info uncheck-taruna">
    <i class="far fa-check-circle"></i>
    <span>Uncheck Taruna</span>
</a> -->
<br>
<div class="table-responsive mt-3">
    <table id="tabel_taruna" class="table table-striped">
        <thead>
            <th scope="col">NO</th>
            <th scope="col">FOTO TARUNA</th>
            <th scope="col">NO AK</th>
            <th scope="col">NAMA</th>
            <th scope="col">AKSI</th>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>
<div class="form-check">
    <img src="img/arrow_ltr.png" width="38" height="22" style="margin-right:1.6em;margin-left:.6em" alt="with selected:">
    <input type="checkbox" class="form-check-input" id="checkAll">
    <label class="form-check-label" for="exampleCheck1">Check all</label>
  </div>
    <?php }
?>
<script>
    $(document).ready(function(){
        // $('#tabel_taruna, #tabel_danton, #danton').DataTable();
        // MENGAMBIL DATA DANTON DARI API
        var tingkat_user = "<?php echo $tingkat?>";
        var pleton_user = "<?php echo $pleton ?>";
        var data_danton_perbatalion;
        data_danton_perbatalion = $('#danton').DataTable({
            "info"       : true,
            "processing" : true,
            "serverside" : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/user_nsp/tingkat_user/"+tingkat_user+"/pleton_user/"+pleton_user,
               
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
                        if(row.foto_user == null){
                            return '<img src="img/person-placeholder.jpg" width=100px height=150px>';
                        }else{
                            return '<img src="'+row.foto_user+'" width=100px height=150px>';
                        }
                        // return '<img src="'+row.foto_user+'" width=100px height=150px>';
                    }
                    
                },
                {
                    
                    // "render": function(data, type, row) {
                    //     return data.kode_pelanggaran; 
                    // },
                    "targets": [2],
                    data : "no_nrp"
                    // "orderable"  : false
                },
                {
                    "targets": [3],
                    // render: function(data, type, row) {
                    //     return data.ket_pelanggaran;
                    // }
                    data  : "nama_user"
                    
                },
                // {
                //     "targets": [4],
                //     // render: function(data, type, row) {
                //     //     return data.nilai;
                //     // }
                //     data  : "pleton_taruna"
                   
                // },
                {
                    "targets": [4],
                    // data static
                    // mRender : function() {
                    //   return (85-10);
                    // }
                    data   : "pangkat_user"
                    // render: function(data, type, row) {
                    //     return data == '1' ? 'Pelanggaran' : 'Pujian';
                    // }
                   
                },
                {
                    "targets": [5],
                    render: function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<button id="'+row.id_user+'" class="btn btn-danger delete_danton text-light mb-2"><i class="fas fa-trash"></i><span> DELETE</span></button><input type="hidden" name="id_danton" id="id_danton" value="'+row.no_nrp+'">';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                }
            ],
            initComplete: function(row, data, index) {
                var count = data_danton_perbatalion.rows().count();
                console.log('count: ', count);
                // $('#total').text(count);
                if(count > 0){
                    $('#ganti-danton').attr('disabled', 'disabled');
                }else{
                    $('#ganti-danton').removeAttr('disabled');
                }
            }
        });
       data_danton_perbatalion.on( 'order.dt search.dt', function () {
           data_danton_perbatalion.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

        // MENGAMBIL DATA DANTON UNTUK DIGANTI ATAU DITAMBAH PADA PLETON BERSANGKUTAN
        var tingkat_user = "<?php echo $tingkat?>";
        // console.log(tingkat_user);
        var pleton_user = "<?php echo $pleton ?>";
        // console.log(pleton_user);
        // var data_tambah_danton;
        data_tambah_danton = $('#tabel_danton').DataTable({
           
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/user_nsp/level/3",
               
                // url       : "http://cobakki.online/APInsp/public/api/taruna/"+id,
                method    : "GET",
                dataSrc   : "",
            },
            "columnDefs" :[
                {
                    targets: [0],
                    // data: "id_user"
                    mRender : function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        // return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                        return '<div class="form-check"><input class="form-check-input" type="checkbox"  value="'+row.id_user+'" id="checklist"></div>';
                    }
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
                        if(row.foto_user == null){
                            return '<img src="img/person-placeholder.jpg" width=100px height=150px>';
                        }else{
                            return '<img src="'+row.foto_user+'" width=100px height=150px>';
                        }
                        // return '<img src="'+row.foto_user+'" width=100px height=150px>';
                    }
                    
                },
                {
                    
                    // "render": function(data, type, row) {
                    //     return data.kode_pelanggaran; 
                    // },
                    "targets": [2],
                    data : "no_nrp"
                    // "orderable"  : false
                },
                {
                    "targets": [3],
                    // render: function(data, type, row) {
                    //     return data.ket_pelanggaran;
                    // }
                    data  : "nama_user"
                    
                },
                // {
                //     "targets": [4],
                //     // render: function(data, type, row) {
                //     //     return data.nilai;
                //     // }
                //     data  : "pleton_taruna"
                   
                // },
                {
                    "targets": [4],
                    // data static
                    // mRender : function() {
                    //   return (85-10);
                    // }
                    data   : "pangkat_user"
                    // render: function(data, type, row) {
                    //     return data == '1' ? 'Pelanggaran' : 'Pujian';
                    // }
                   
                },
            ],
        });

        // MENGAMBIL DATA TARUNA DARI API
        var tingkat_taruna = "<?php echo $tingkat?>";
        var pleton_taruna = "<?php echo $pleton ?>";
        var data_taruna_perbatalion;
        data_taruna_perbatalion = $('#tabel_taruna').DataTable({
           
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/taruna/tingkat_taruna/"+tingkat_taruna+'/pleton_taruna/'+pleton_taruna,
               
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
                // {
                    
                //     // "render": function(data, type, row) {
                //     //     return data.kode_pelanggaran; 
                //     // },
                //     "targets": [1],
                //     // data : "foto_taruna"
                //     mRender : function(data, type, row) {
                //         // return data == '1' ? 'Pelanggaran' : 'Pujian';
                //         // return '<a href="''">' + Edit + '</a>';
                //         return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                //     }
                    
                // },
                {
                    "targets":[1],
                    mRender : function(data, type, row) {
                        if(row.foto_taruna == null){
                            return '<img src="img/person-placeholder.jpg" width=100px height=150px>';
                        }else{
                            return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                        }
                        // return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
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
                // {
                //     "targets": [4],
                //     // render: function(data, type, row) {
                //     //     return data.nilai;
                //     // }
                //     data  : "pleton_taruna"
                   
                // },
                {
                    "targets": [4],
                    // data static
                    mRender : function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        // return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                        return '<div class="form-check"><input class="form-check-input" type="checkbox"  value="'+row.id_taruna+'" id="checklist_taruna" name="delete['+row.id_taruna+']"></div>';
                    }
                    // render: function(data, type, row) {
                    //     return data == '1' ? 'Pelanggaran' : 'Pujian';
                    // }
                   
                },
            ],
        });
       data_taruna_perbatalion.on( 'order.dt search.dt', function () {
           data_taruna_perbatalion.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

        // FUNGSI UNTUK MENGGANTI DATA DANTON
        $('form#ganti-danton').submit(function(e){
            e.preventDefault();
            var id_user         = $('#checklist:checked').val();
            // console.log(id_user);
            var pleton_user     = $('#pleton_user').val();
            var tingkat_user    = $('#tingkat_user').val(); 
            $.ajax({
                url         : "http://dpongs.com/APInsp/public/api/user_nsp/"+id_user,
                method      : "POST",
                data        : {tingkat_user:tingkat_user, pleton_user:pleton_user},
                dataType    : "json",
                success     : function(response){
                //   $('#form-pelanggaran').trigger('reset');
                //   if(id){
                //     alert('Sukses update data pelanggaran');
                //   }else{
                //     alert('Sukses menambahkan data pelanggaran');
                //   }
                  $('#ModalGantiDanton').modal('hide');
                  alert('Sukses mengganti danton');
                  $('body').removeClass('modal-open');
                  $('.modal-backdrop').remove();
                  $('#page-top #wrapper #batalion').trigger('click');
                },
                error: function(error){
                    alert(error);
                }  
            });
        });

        // FUNGSI UNTUK MENGHAPUS DANTON
        $(document).on('click', '.delete_danton', function(e){
            e.preventDefault();
            var id_user = $(this).attr("id");
            var tingkat_user = 0;
            var pleton_user = 0;
            $.ajax({
                // url         : "http://cobakki.online/APInsp/public/api/rew_puni/"+id_pelanggaran,
                url         : "http://dpongs.com/APInsp/public/api/user_nsp/"+id_user,
                method      : "POST",
                data        : {tingkat_user:tingkat_user, pleton_user:pleton_user},
                dataType    : "json",
                beforeSend  : function(){
                    if(confirm('Anda yakin akan menghapus ?')){
                        return true;
                    }else{
                        return false;
                    }
                   
                },  
                success     : function(data){
                  alert('Sukses menghapus danton');  
                  $('#ModalGantiDanton').modal('hide');
                  $('body').removeClass('modal-open');
                  $('.modal-backdrop').remove();
                  $('#page-top #wrapper #batalion').trigger('click');
                },
                error: function(error) {
                    alert(error);
                }
            });
            
        });

        // FUNGSI UNTUK MENAMPILKAN DATA TARUNA PADA MODAL TARUNA
        var tambah_taruna;
        tambah_taruna = $('#tabel_tambah_taruna').DataTable({
           
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/taruna/tampil",
               
                // url       : "http://cobakki.online/APInsp/public/api/taruna/"+id,
                method    : "GET",
                dataSrc   : "",
            },
            "columnDefs" :[
                {
                    targets: [0],
                    mRender : function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        // return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                        return '<div class="form-check"><input class="form-check-input" type="checkbox"  value="'+row.no_ak+'" id="checklist_tambah_taruna"></div>'+
                                '<input type="hidden" id="nilai_awal" name="nilai_awal" value="'+row.nilai_awal+'">'+'<input type="hidden" id="tambah_no_ak" name="tambah_no_ak" value="'+row.no_ak+'">';
                    }
                },
                {
                    
                    // "render": function(data, type, row) {
                    //     return data.kode_pelanggaran; 
                    // },
                    "targets": [1],
                    // data : "foto_taruna"
                    mRender : function(data, type, row) {
                        if(row.foto_taruna == null){
                            return '<img src="img/person-placeholder.jpg" width=100px height=150px>';
                        }else{
                            return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                        }
                        // return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
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
                    
                }
            ],
        });
        $("#checkAll").change(function () {
            $("#checklist_taruna[type='checkbox']").prop('checked', $(this).prop("checked"));
        });
        // FUNGSI UNTUK MENAMBAH TARUNA
        $('form#tambah-taruna').submit(function(e){
            e.preventDefault();
            var checkbox          = $('#checklist_tambah_taruna:checked');
            // console.log(id_taruna);
            var pleton_taruna     = $('#pleton_taruna').val();
            var tingkat_taruna    = $('#tingkat_taruna').val();
            var id_danton         = $('#id_danton').val();
            var no_ak             = $('#tambah_no_ak').val();
            // console.log(no_ak);
            var nilai_awal        = $('#nilai_awal').val();
            var jml_temp_nilai    = 0;
            var nilai_akhir       = 85;
            var is_delete         = 0;
            if(checkbox.length > 0){
                var checkbox_value = [];
                $(checkbox).each(function(){
                    checkbox_value.push($(this).val());
                });

                $.ajax({
                    url    : "http://dpongs.com/APInsp/public/api/taruna/tingkat_pleton_taruna",
                    method : "PUT",
                    data   : {checkbox_value:checkbox_value, tingkat_taruna:tingkat_taruna,pleton_taruna: pleton_taruna, id_danton:id_danton,no_ak:no_ak,nilai_awal:nilai_awal,jml_temp_nilai:jml_temp_nilai,nilai_akhir:nilai_akhir,is_delete:is_delete},
                    success: function(response){
                        $('#ModalTambahTaruna').modal('hide');
                        alert('Sukses menambah taruna');
                        $('#page-top #wrapper #batalion').trigger('click');
                        $('body').removeClass('modal-open');
                        $('.modal-backdrop').remove();
                        
                    }
                })
            }
            // $.ajax({
            //     url         : "http://dpongs.com/APInsp/public/api/taruna/"+id_taruna,
            //     method      : "PUT",
            //     data        : {tingkat_taruna:tingkat_taruna, pleton_taruna:pleton_taruna},
            //     dataType    : "json",
            //     success     : function(response){
            //     //   $('#form-pelanggaran').trigger('reset');
            //     //   if(id){
            //     //     alert('Sukses update data pelanggaran');
            //     //   }else{
            //     //     alert('Sukses menambahkan data pelanggaran');
            //     //   }
            //       $('#ModalTambahTaruna').modal('hide');
            //       alert('Sukses menambah taruna');
            //       $('body').removeClass('modal-open');
            //       $('.modal-backdrop').remove();
            //       $('#page-top #wrapper #batalion').trigger('click');
            //     },
            //     error: function(error){
            //         alert(error);
            //     }  
            // }); 
        });
        // FUNGSI UNTUK MENGUPDATE DATA TINGKAT DAN PLETON TARUNA MENJADI 0
        $('#hapus-taruna').click(function(e){
            var checkbox            = $('#checklist_taruna:checked');
            var tingkat_taruna      = 0;
            var pleton_taruna       = 0;
            var id_danton           = 0;
            var no_ak               = $('#tambah_no_ak').val();
            if(checkbox.length > 0){
                var checkbox_value = [];
                $(checkbox).each(function(){
                    checkbox_value.push($(this).val());
                });

                $.ajax({
                    url    : "http://dpongs.com/APInsp/public/api/taruna/hapus",
                    method : "PUT",
                    data   : {checkbox_value:checkbox_value, tingkat_taruna:tingkat_taruna,pleton_taruna: pleton_taruna, id_danton:id_danton,no_ak:no_ak},
                    success: function(response){
                        alert('Berhasil menghapus taruna');
                        $('#page-top #wrapper #batalion').trigger('click');
                    }
                })
            }
        });
        
    });
</script>

