<?php
    session_start();
    $no_nrp = $_SESSION['no_nrp'];
    $tingkat= $_POST['tingkat'];
    $pleton = $_POST['pleton'];
    if($pleton == 0 && $tingkat == 0 || $pleton != 0 && $tingkat == 0 || $pleton == 0 && !empty($tingkat)){
        echo "<br>";
        echo "<div class='alert alert-danger text-center'> Tidak terdapat data yang ditampilkan ";
        echo "</div>";
    }else{ echo "<br>";?>

<div class="table-responsive">
    <table id="data_penilaian" class="table">
        <thead>
            <th scope="col">NO</th>
            <th scope="col">FOTO TARUNA</th>
            <th scope="col">NO AK</th>
            <th scope="col">NAMA</th>
            <th scope="col">NILAI AKHIR</th>
            <th scope="col">AKSI</th>
        </thead>
        
    </table>
</div>
<!-- MODAL PENILAIAN TARUNA DANA TARUNI -->
<div class="modal fade" id="ModalPenilaianTaruna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PENILAIAN TARUNA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <form id="penilaian-taruna" enctype="multipart/form-data">
            <div class="form-group">
                <label for="kode_pelanggaran">KODE PELANGGARAN</label>
                <input type="text" class="form-control" name="kode_pelanggaran" id="kode_pelanggaran" autocomplete="off">
            </div>
            <div class="form-group">
                <label for="ket_pelanggaran">KETERANGAN PELANGGARAN</label>
                <input type="text" class="form-control" name="ket_pelanggaran" id="ket_pelanggaran" readonly>
            </div>
            <div class="form-group">
                <label for="nilai">NILAI</label>
                <input type="text" class="form-control" name="nilai" id="nilai_rew_puni" readonly>
            </div>
            <div class="form-group">
                <label for="exampleFormControlFile1">BUKTI FOTO</label>
                <input type="file" class="form-control-file" id="bukti_foto" name="bukti_foto">
            </div>
            <input type="hidden" name="no_ak" id="no_ak">
            <input type="hidden" name="no_nrp" id="no_nrp" value="<?php echo $no_nrp;?>">
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

<!-- MODAL UNTUK MELIHAT PELANGGARAN ATAU PUJIAN YANG DILAKUKAN OLEH TARUNA / TARUNI  -->
<div class="modal fade" id="ModalPelanggaranTaruna" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg modal-sm modal-dialog-centered" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title" id="exampleModalLabel">PELANGGARAN DAN PUJIAN TARUNA</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <div class="table-responsive">
            <table id="data_penilaian_rew_puni" class="table">
                <thead>
                    <th scope="col">NO</th>
                    <th scope="col">KODE</th>
                    <th scope="col">KETERANGAN</th>
                    <th scope="col">NILAI</th>
                    <th scope="col">BUKTI FOTO</th>
                    <th scope="col">PENILAI</th>
                </thead>
                
            </table>
        </div>
      </div>
    </div>
  </div>
</div>
<?php } ?>
<script>
    $(document).ready(function(){
        var pleton_penilaian    = "<?php echo $pleton  ?>";
        var tingkat_penilaian   = "<?php echo $tingkat ?>";
        var penilaian;
        penilaian = $('#data_penilaian').DataTable({
           
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/taruna/tingkat_taruna/"+tingkat_penilaian+"/pleton_taruna/"+pleton_penilaian,
               
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
                        // return '<a href="''">' + Edit + '</a>';
                        return '<img src="'+row.foto_taruna+'"  width=100px height=150px>';
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
                    "targets": [4],
                    // data static
                    render: function(data, type, row) {
                        var num = Number(row.nilai_akhir);
                        var roundedString = num.toFixed(2);
                        var rounded = Number(roundedString);
                        return rounded;
                    }
                    // render: function(data, type, row) {
                    //     return data == '1' ? 'Pelanggaran' : 'Pujian';
                    // }
                   
                },
                {
                    "targets": [5],
                    render: function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<button id="'+row.no_ak+'" class="btn btn-success nilai_taruna text-light mr-2"><i class="fas fa-edit"></i><span> NILAI</span></button>'+
                        '<button id="'+row.no_ak+'" class="btn btn-info view_taruna text-light"><i class="fas fa-eye"></i><span> VIEW</span></button>'+
                        '<input type="hidden" name="tabel_no_ak" id="tabel_no_ak" value="'+row.no_ak+'">';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                }
            ],
        });
        penilaian.on( 'order.dt search.dt', function () {
            penilaian.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

        // MENAMPILKAN MODAL UNTUK PENILAIAN TARUNA DAN TARUNI
        $('#data_penilaian').on('click','.nilai_taruna',function(e){
            e.preventDefault();
            var ID = $(this).closest('tr').find('td').eq(2).text();
            $('#no_ak').val(ID);
            $('#ModalPenilaianTaruna').modal('show');
        });

        // FUNGSI UNUTK MEMBERIKAN DATA PELANGGARAN ATAU PUJIAN KE PENILAIAN
        var tingkat = "<?php echo $tingkat?>";
        var url_rew_puni;
        if(tingkat == 1){
            url_rew_puni = "http://dpongs.com/APInsp/public/api/rew_puni_1";
        }else if(tingkat == 2){
            url_rew_puni = "http://dpongs.com/APInsp/public/api/rew_puni_2";
        }else if(tingkat == 3){
            url_rew_puni = "http://dpongs.com/APInsp/public/api/rew_puni_3";
        }else{
            url_rew_puni = "http://dpongs.com/APInsp/public/api/rew_puni_4";
        }
        $('#kode_pelanggaran').typeahead({
            source:  function (query, process) {
                return $.get(url_rew_puni, { query: query }, function (data) {
                    // console.log(data);
                    // data = $.parseJSON(data);
                    return process(data);
                });
            },
            displayText: function(data){
                return data['kode_pelanggaran']
            },
            afterSelect: function (data){
                // console.log(data['keterangan']);
                $('#ket_pelanggaran').val(data['ket_pelanggaran']);
                $('#nilai_rew_puni').val(data['nilai']);
                // $('#keterangan').val(data['keterangan']);

            }
	    });

        // FUNGSI MENILAI TARUNA DAN TARUNI DARI ADMIN PER TINGKAT ATAU USER
        $('form#penilaian-taruna').submit(function(e){
            e.preventDefault();
            var formData = new FormData(this);
            $.ajax({
                url    : "http://dpongs.com/APInsp/public/api/temp_nilai",
                method : "POST",
                data   : formData,
                success: function(response){
                    $('#ModalPenilaianTaruna').modal('hide');
                    alert('Sukses melakukan penilaian terhadap taruna/taruni');
                    $('#page-top #wrapper #nilai').trigger('click');
                    $('body').removeClass('modal-open');
                    $('.modal-backdrop').remove();
                    
                },
                cache: false,
                contentType: false,
                processData: false,
            })
            
        });

        // FUNGSI UNTUK MELIHAT PUJIAN ATAU PELANGGARAN YANG DILAKUKAN OLEH TARUNA ATAU TARUNI
        $('#data_penilaian').on('click','.view_taruna',function(e){
            e.preventDefault();
            var no_ak      = $(this).attr("id");
            $('#ModalPelanggaranTaruna').modal('show');
            var view_penilaian = $('#data_penilaian_rew_puni').DataTable({
                "processing" : true,
                serverside   : true,
                "ajax": {
                    url          : "http://dpongs.com/APInsp/public/api/temp_nilai/getnilai",
                    method       : "POST",
                    data         :{
                        "no_ak":no_ak
                    },
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
                        data : "kode_pelanggaran"
                        // mRender : function(data, type, row) {
                        //     // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        //     // return '<a href="''">' + Edit + '</a>';
                        //     return '<img src="'+row.foto_taruna+'" width=100px height=150px>';
                        // }
                        
                    },
                    {
                        
                        "targets": [2],
                        data : "ket_pelanggaran"
                    },
                    {
                        "targets": [3],
                        data  : "nilai"
                        
                    },
                    {
                        "targets": [4],
                        // data static
                       mRender : function(data, type, row) {
                            // return data == '1' ? 'Pelanggaran' : 'Pujian';
                            // return '<a href="''">' + Edit + '</a>';
                            return '<img src="'+row.bukti_foto+'" width=100px height=150px>';
                        }
                    
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
                        data : "nama_user"
                    }
                ],
                destroy: true
            });
            view_penilaian.on( 'order.dt search.dt', function () {
                view_penilaian.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                    cell.innerHTML = i+1;
                } );
            } ).draw();
        });
    });
</script>