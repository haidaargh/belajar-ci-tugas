<?= $this->extend('layout') ?>
<<<<<<< HEAD
<?= $this->section('content') ?> 
<?php
if (session()->getFlashData('success')) {
?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('success') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
<?php
if (session()->getFlashData('failed')) {
?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= session()->getFlashData('failed') ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
<?php
}
?>
=======
<?= $this->section('content') ?>

<!-- Flash Messages -->
<?php if (session()->getFlashData('success')) : ?>
    <div class="alert alert-info alert-dismissible fade show" role="alert">
        <?= esc(session()->getFlashData('success')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>
<?php if (session()->getFlashData('failed')) : ?>
    <div class="alert alert-danger alert-dismissible fade show" role="alert">
        <?= esc(session()->getFlashData('failed')) ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
    </div>
<?php endif; ?>

<!-- Tombol Tambah -->
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
<button type="button" class="btn btn-primary mb-2" data-bs-toggle="modal" data-bs-target="#addModal">
    Tambah Data
</button>
<a type="button" class="btn btn-success" href="<?= base_url() ?>produk/download">
<<<<<<< HEAD
    Download Data 
</a>
<!-- Table with stripped rows -->
<table id="ProdukTable" class="table datatable">
    <thead>
        <tr>
            <th scope="col">No.</th>
            <th scope="col">Nama</th>
            <th scope="col">Harga</th>
            <th scope="col">Jumlah</th>
            <th scope="col">Foto</th>
            <th scope="col"></th>
=======
    Download Data
</a>

<!-- Table Produk -->
<table id="ProdukTable" class="table datatable">
    <thead>
        <tr>
            <th>No.</th>
            <th>Nama</th>
            <th>Harga</th>
            <th>Jumlah</th>
            <th>Foto</th>
            <th>Aksi</th>
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
        </tr>
    </thead>
    <tbody>
        <?php foreach ($product as $index => $produk) : ?>
            <tr>
<<<<<<< HEAD
                <th scope="row"><?php echo $index + 1 ?></th>
                <td><?php echo $produk['nama'] ?></td>
                <td><?php echo $produk['harga'] ?></td>
                <td><?php echo $produk['jumlah'] ?></td>
                <td>
                    <?php if ($produk['foto'] != '' and file_exists("img/" . $produk['foto'] . "")) : ?>
                        <img src="<?php echo base_url() . "img/" . $produk['foto'] ?>" width="100px">
                    <?php endif; ?>
                </td>

                <td>
                    <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#editModal-<?= $produk['id'] ?>">
                        Ubah
                    </button>
                    <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini ?')">
                         Hapus
                    </a>
                </td>
            </tr>
            <!-- Edit Modal Begin -->
<div class="modal fade" id="editModal-<?= $produk['id'] ?>" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Edit Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('produk/edit/' . $produk['id']) ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" value="<?= $produk['nama'] ?>" placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" value="<?= $produk['harga'] ?>" placeholder="Harga Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" value="<?= $produk['jumlah'] ?>" placeholder="Jumlah Barang" required>
                    </div>
                    <img src="<?php echo base_url() . "img/" . $produk['foto'] ?>" width="100px">
                    <div class="form-check">
                        <input class="form-check-input" type="checkbox" id="check" name="check" value="1">
                        <label class="form-check-label" for="check">
                            Ceklis jika ingin mengganti foto
                        </label>
                    </div>
                    <div class="form-group">
                        <label for="name">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Edit Modal End -->
        <?php endforeach ?>
       <!-- jQuery -->
        <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
        <!-- DataTables JS & CSS -->
        <link rel="stylesheet" href="https://cdn.datatables.net/1.13.4/css/jquery.dataTables.min.css">
        <script src="https://cdn.datatables.net/1.13.4/js/jquery.dataTables.min.js"></script>

    </tbody>
</table>
<!-- End Table with stripped rows --> 
 <!-- Add Modal Begin -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">Tambah Data</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-body">
                    <div class="form-group">
                        <label for="name">Nama</label>
                        <input type="text" name="nama" class="form-control" id="nama" placeholder="Nama Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Harga</label>
                        <input type="text" name="harga" class="form-control" id="harga" placeholder="Harga Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Jumlah</label>
                        <input type="text" name="jumlah" class="form-control" id="jumlah" placeholder="Jumlah Barang" required>
                    </div>
                    <div class="form-group">
                        <label for="name">Foto</label>
                        <input type="file" class="form-control" id="foto" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
=======
                <td><?= $index + 1 ?></td>
                <td><?= esc($produk['nama']) ?></td>
                <td><?= esc($produk['harga']) ?></td>
                <td><?= esc($produk['jumlah']) ?></td>
                <td>
                    <?php if (!empty($produk['foto']) && file_exists(FCPATH . 'img/' . $produk['foto'])) : ?>
                        <img src="<?= base_url("img/" . $produk['foto']) ?>" width="100px">
                    <?php else : ?>
                        <span>-</span>
                    <?php endif; ?>
                </td>
                <td>
                    <button 
                        type="button" 
                        class="btn btn-success btn-edit"
                        data-id="<?= $produk['id'] ?>"
                        data-nama="<?= esc($produk['nama']) ?>"
                        data-harga="<?= esc($produk['harga']) ?>"
                        data-jumlah="<?= esc($produk['jumlah']) ?>"
                        data-foto="<?= $produk['foto'] ?>"
                        data-bs-toggle="modal" 
                        data-bs-target="#editModal">
                        Ubah
                    </button>
                    <a href="<?= base_url('produk/delete/' . $produk['id']) ?>" class="btn btn-danger" onclick="return confirm('Yakin hapus data ini?')">Hapus</a>
                </td>
            </tr>
        <?php endforeach; ?>
    </tbody>
</table>

<!-- Modal Tambah -->
<div class="modal fade" id="addModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form action="<?= base_url('produk') ?>" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Tambah Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <div class="form-group mb-2">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Foto</label>
                        <input type="file" name="foto" class="form-control">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>
<<<<<<< HEAD
<!-- Add Modal End -->

<!--script>
    $(document).ready(function() {
        $('#ProdukTable').DataTable({
            pageLength: 10,
            language: {
                lengthMenu: "   _MENU_ entries per page",
                search: "", // Menghilangkan label "Search"
                searchPlaceholder: "Search" // Placeholder di dalam input
            }
        });
    });
</script-->


<?= $this->endSection() ?>
=======

<!-- Modal Edit (Dinamis) -->
<div class="modal fade" id="editModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <form id="editForm" method="post" enctype="multipart/form-data">
                <?= csrf_field(); ?>
                <div class="modal-header">
                    <h5 class="modal-title">Edit Data</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
                </div>
                <div class="modal-body">
                    <input type="hidden" name="id" id="edit-id">
                    <div class="form-group mb-2">
                        <label>Nama</label>
                        <input type="text" name="nama" class="form-control" id="edit-nama" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Harga</label>
                        <input type="number" name="harga" class="form-control" id="edit-harga" required>
                    </div>
                    <div class="form-group mb-2">
                        <label>Jumlah</label>
                        <input type="number" name="jumlah" class="form-control" id="edit-jumlah" required>
                    </div>
                    <div class="form-group mb-2">
                        <img id="edit-preview" src="" width="100px" class="mb-2" style="display:none;">
                    </div>
                    <div class="form-check mb-2">
                        <input class="form-check-input" type="checkbox" id="edit-check" name="check" value="1">
                        <label class="form-check-label" for="edit-check">Ceklis jika ingin mengganti foto</label>
                    </div>
                    <div class="form-group">
                        <label>Foto</label>
                        <input type="file" class="form-control" name="foto">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="submit" class="btn btn-primary">Simpan</button>
                </div>
            </form>
        </div>
    </div>
</div>

<!-- Inisialisasi & Edit Modal Logic -->
<script>
    $(document).ready(function () {
        $('#ProdukTable').DataTable({
            pageLength: 10,
            language: {
                lengthMenu: "_MENU_ data per halaman",
                search: "",
                searchPlaceholder: "Cari..."
            }
        });

        // Saat tombol edit ditekan
        $('.btn-edit').on('click', function () {
            const id = $(this).data('id');
            const nama = $(this).data('nama');
            const harga = $(this).data('harga');
            const jumlah = $(this).data('jumlah');
            const foto = $(this).data('foto');

            $('#editForm').attr('action', '<?= base_url('produk/edit/') ?>' + id);
            $('#edit-id').val(id);
            $('#edit-nama').val(nama);
            $('#edit-harga').val(harga);
            $('#edit-jumlah').val(jumlah);

            if (foto) {
                $('#edit-preview').attr('src', '<?= base_url('img/') ?>' + foto).show();
            } else {
                $('#edit-preview').hide();
            }

            $('#edit-check').prop('checked', false);
        });
    });
</script>

<?= $this->endSection() ?>
>>>>>>> 1e71c53ecff91d8ab6e3bc5a53dce6916f7a2869
