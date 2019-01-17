<div class="container">
    <br>
    <a href="#" class="btn btn-success mb-3" data-toggle="modal" data-target="#modalTambahPujian">
        <i class="fas fa-plus"></i>
        <span>Tambah Pujian</span>
    </a>
    <!-- modal tambah pujian -->
    <!-- Modal -->
    <div class="modal fade" id="modalTambahPujian" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">TAMBAH PUJIAN</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <form action="#" method="POST">
                        <div class="form-group">
                            <label for="kode_pujian">Kode pujian</label>
                            <input type="text" name="kode_pujian" class="form-control" placeholder="kode pujian" required>
                        </div>
                        <div class="form-group">
                            <label for="nama_pujian">Nama Reward</label>
                            <input type="text" name="nama_pujian" class="form-control"  placeholder="Nama Pujian" required>
                        </div>
                        <div class="form-group">
                            <label for="nilai_pujian">Nama Pujian</label>
                            <input type="text" name="nilai_pujian" class="form-control"  placeholder="Nilai Pujian" required>
                        </div>
                        <div class="form-group">
                            <label for="keterangan">Keterangan</label>
                            <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan" required></textarea>
                        </div>
                    </form>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                    <button type="button" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                </div>
            </div>
        </div>
    </div>
    <div class="table-responsive">
         <table id="beranda_pujian" class="table table-striped display" style="width:100%">
            <thead>
                <tr>
                <th scope="col">NO</th>
                <th scope="col">KODE</th>
                <th scope="col">NAMA</th>
                <th scope="col">NILAI</th>
                <th scope="col" class="text-center">AKSI</th>
                </tr>
            </thead>
            <tbody>
                <!-- nanti ini adalah isi dari database -->
                <tr>
                    <th scope="row">1</th>
                    <td scope="row">123456</td>
                    <td scope="row">Memimpin upacara</td>
                    <td scope="row">85</td>
                    <td scope="row">
                        <a href="#" class="btn btn-warning text-light" data-toggle="modal" data-target="#ModalEdit">
                            <i class="fas fa-user-edit"></i>
                            <span>Edit</span>
                        </a>
                        <!-- modal edit nanti berdasarkan id database pujian -->
                        <div class="modal fade" id="ModalEdit" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">EDIT PUJIAN</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" method="POST">
                                            <div class="form-group">
                                                <label for="kode_pujian">Kode Pujian</label>
                                                <input type="text" name="kode_pujian" class="form-control" value="123456" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_pujian">Nama Pujian</label>
                                                <input type="text" name="nama_pujian" class="form-control"  value="Memimpin upacara" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_pujian">Nilai Pujian</label>
                                                <input type="text" name="nilai_pujian" class="form-control"  value="85" required>
                                            </div>
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan" required></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                                        <button type="button" class="btn btn-primary">SIMPAN PERUBAHAN</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a href="#" class="btn btn-danger" onclick="confirm('Anda yakin ingin menghapus data ini ?');">
                            <i class="fas fa-trash"></i>
                            <span>Hapus</span>
                        </a>
                        <a href="#" class="btn btn-info" data-toggle="modal" data-target="#ModalLihat">
                            <i class="fas fa-eye"></i>
                            <span>Lihat</span>
                        </a>
                        <!-- modal lihat nanti berdasarkan database -->
                        <div class="modal fade" id="ModalLihat" tabindex="-1" role="dialog" aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                            <div class="modal-dialog modal-dialog-centered" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <h5 class="modal-title">LIHAT PUJIAN</h5>
                                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                        <span aria-hidden="true">&times;</span>
                                        </button>
                                    </div>
                                    <div class="modal-body">
                                        <form action="#" method="POST">
                                            <div class="form-group">
                                                <label for="kode_pujian">Kode pujian</label>
                                                <input type="text" name="kode_pujian" class="form-control" value="123456" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nama_pujian">Nama Reward</label>
                                                <input type="text" name="nama_pujian" class="form-control"  value="Memimpin upacara" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="nilai_pujian">Nama Pujian</label>
                                                <input type="text" name="nilai_pujian" class="form-control"  value="85" readonly>
                                            </div>
                                            <div class="form-group">
                                                <label for="keterangan">Keterangan</label>
                                                <textarea class="form-control" name="keterangan" rows="3" placeholder="Keterangan" readonly></textarea>
                                            </div>
                                        </form>
                                    </div>
                                    <div class="modal-footer">
                                        <button type="button" class="btn btn-secondary" data-dismiss="modal">TUTUP</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </td>
                </tr>
            </tbody>
        </table>
    </div>
</div>