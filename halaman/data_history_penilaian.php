<?php
    $bulan = $_POST['bulan'];
    $tahun = $_POST['tahun'];
    $tingkat = $_POST['tingkat'];
    if($bulan == 0 && $tahun == 0 && $tingkat == 0){
        echo "<div class='alert alert-danger text-center'> Tidak terdapat data yang ditampilkan ";
        echo "</div>";
    }else{?>
            
<div class="table-responsive">
    <table id="history_penilaian" class="table table-striped">
        <thead>
            <th scope="col">NO</th> 
            <th scope="col">BUKTI FOTO</th>
            <th scope="col">KODE PELANGGARAN</th>
            <th scope="col">KET PELANGGARAN</th>
            <th scope="col">NILAI</th>
            <th scope="col">NO AK</th>
            <th scope="col">PENILAI</th>
        </thead>
        <tbody>
        </tbody>
    </table>
</div>

    <?php }
?>
<script>
    $(document).ready(function(){
        // $('#tabel_taruna, #tabel_danton, #danton').DataTable();
        // MENGAMBIL DATA HISTORY PENILAIAN DARI API
        var bulan = "<?php echo $bulan?>";
        var tahun = "<?php echo $tahun?>";
        var tingkat = "<?php echo $tingkat?>";
        history_penilaian = $('#history_penilaian').DataTable({
           
            "processing" : true,
            serverside   : true,
            "ajax": {
                url       : "http://dpongs.com/APInsp/public/api/temp_nilai/history/tingkat/"+tingkat+"/tahun/"+tahun+"/bulan/"+bulan,
               
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
                    // data : "no_nrp"
                    render: function(data, type, row) {
                        // return data == '1' ? 'Pelanggaran' : 'Pujian';
                        // return '<a href="''">' + Edit + '</a>';
                        return '<img src = "'+row.bukti_foto+'" width=100px height=150px>';
                        // return "/";
                        // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    }
                    // "orderable"  : false
                },
                {
                    "targets": [2],
                    // render: function(data, type, row) {
                    //     return data.ket_pelanggaran;
                    // }
                    data  : "kode_pelanggaran"
                    
                },
                {
                    "targets": [3],
                    // data static
                    // mRender : function() {
                    //   return (85-10);
                    // }
                    data   : "ket_pelanggaran"
                    // render: function(data, type, row) {
                    //     return data == '1' ? 'Pelanggaran' : 'Pujian';
                    // }
                   
                },
                {
                    "targets": [4],
                    // render: function(data, type, row) {
                    //     // return data == '1' ? 'Pelanggaran' : 'Pujian';
                    //     // return '<a href="''">' + Edit + '</a>';
                    //     return '<button id="'+row.id_user+'" class="btn btn-danger delete_danton text-light mb-2"><i class="fas fa-trash"></i><span> DELETE</span></button><input type="hidden" name="id_danton" id="id_danton" value="'+row.no_nrp+'">';
                    //     // return "/";
                    //     // return '<a href=add.html?id="'+row[0]+'">Delete</a>';
                    // }
                    data    : "nilai"
                },
                {
                    "targets": [5],
                    data     : "no_ak"
                },
                {
                    "targets":[6],
                    data     :"nama_user"
                }
            ],
        });
        history_penilaian.on( 'order.dt search.dt', function () {
            history_penilaian.column(0, {search:'applied', order:'applied'}).nodes().each( function (cell, i) {
                cell.innerHTML = i+1;
            } );
        } ).draw();

       
    });
</script>

