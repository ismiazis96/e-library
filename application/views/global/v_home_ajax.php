<!-- Jumbotron -->
<div id="home" class="jumbotron">
    <div class="container">
        <h1>Selamat Datang di Perpustakaan</h1>
        <p>Membaca adalah jendela dunia. Temukan buku favorit Anda di sini.</p>
        <a href="#books" class="btn btn-primary btn-lg">Lihat Koleksi</a>
    </div>
</div>

<!-- About Section -->
<div id="about" class="section">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p class="text-center">Perpustakaan kami menyediakan berbagai koleksi buku mulai dari fiksi, non-fiksi, hingga referensi akademik. Kami berkomitmen untuk memberikan layanan terbaik bagi para pembaca.</p>
    </div>
</div>

<!-- Data Table Section -->
<div id="datatable" class="table-section">
    <div class="container">
        <h2>Data Buku</h2>

        <div class="card-body">
            <form id="filterForm" class="row mb-4">
                <div class="col-md-4">
                    <label for="category" class="form-label">Kategori</label>
                    <select name="category" id="category" class="form-select">
                        <option value="">Semua Kategori</option>
                        <?php foreach ($data_kategori->result_array() as $category): ?>
                            <option value="<?= $category['id_kategori'] ?>"> <?= $category['kategori'] ?> </option>
                        <?php endforeach; ?>
                    </select>
                    <!-- </div> -->
                </div>
                <div class="col-md-4">
                    <label for="rack" class="form-label">Rak</label>
                    <select name="rack" id="rack" class="form-select">
                        <option value="">Semua Rak</option>
                        <?php foreach ($data_rak->result_array() as $rack): ?>
                            <option value="<?= $rack['no_rak'] ?>"><?= $rak['nama_rak'] ?></option>
                        <?php endforeach; ?>
                    </select>
                    <!-- </div> -->
                </div>
                <div class="col-md-4">
                    <label for="filter" class="form-label"></label>
                    <div class="input-group">
                        <span class="input-group-text"><i></i></span>
                        <button type="submit" class="btn btn-primary"><i class="fa fa-search"></i> Filter</button>
                    </div>
                </div>
            </form>
        </div>
        <div class="table-responsive">
            <table id="table-buku" class="table table-striped table-bordered mt-4 responsive" cellspacing="0" width="100%">
                <thead class="table-dark">
                    <tr>
                        <th>No</th>
                        <th class="center"> <i class="glyphicon glyphicon-plus"></i></th>
                        <th>ID Buku</th>
                        <th>ISBN</th>
                        <th>Judul Buku</th>
                        <th>Kategori</th>
                        <th>Penerbit</th>
                        <th>Pengarang</th>
                        <th>No. Rak</th>
                        <th>Stok Tersedia</th>
                        <th>Tahun Terbit</th>
                        <th>Total Stok</th>
                        <th>Keterangan</th>
                    </tr>
                </thead>
                <tbody id="bukuTable">

                </tbody>
            </table>
        </div>
        <div class="box-footer">
            Menampilkan daftar buku, untuk melihat detail buku klik tombol <b>+</b>, Lakukan pencarian Buku pada form <b>search</b> .
        </div><!-- box-footer -->
    </div>
</div>

<!-- Contact Section -->
<div id="contact" class="section">
    <div class="container">
        <h2>Kontak Kami</h2>
        <p class="text-center">Hubungi kami untuk informasi lebih lanjut.</p>
        <form>
            <div class="form-group">
                <label for="name">Nama:</label>
                <input type="text" class="form-control" id="name" placeholder="Masukkan nama Anda">
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" placeholder="Masukkan email Anda">
            </div>
            <div class="form-group">
                <label for="message">Pesan:</label>
                <textarea class="form-control" id="message" rows="5" placeholder="Masukkan pesan Anda"></textarea>
            </div>
            <button type="submit" class="btn btn-primary">Kirim</button>
        </form>
    </div>
</div>

<script>
    $(document).ready(function() {
        $('#filterForm').on('submit', function(e) {
            e.preventDefault(); // Mencegah form untuk reload halaman

            const rack_id = $('#rack').val();
            const category_id = $('#category').val();

            $.ajax({
                url: '<?= base_url("buku/filter") ?>',
                type: 'POST',
                data: {
                    no_rak: rack_id,
                    id_kategori: category_id
                },
                dataType: 'json',
                success: function(response) {
                    let html = '';
                    if (response.length > 0) {
                        response.forEach(function(buku) {
                            html += `
                                    <tr>
                                        <td>${buku.judul_buku}</td>
                                        <td>${buku.nama_rak}</td>
                                        <td>${buku.nama_kategori}</td>
                                    </tr>
                                    <tr>
                            <td><?php echo $no++; ?></td>
                            <td class="details-control"><i class="btn btn-box-tool" data-toggle="tooltip" title="Tampilkan Detail"><i class="glyphicon glyphicon-plus"></i></i>
                            </td>
                            <td>${buku.id_buku}</td>
                            <td>${buku.isbn}</td>
                            <td>${buku.judul}</td>
                            <td>${buku.kategori}</td>
                            <td>${buku.nama_penerbit}</td>
                            <td>${buku.nama_pengarang}</td>
                            <td>${buku.nama_rak}</td>
                            <td>${buku.thn_terbit}</td>
                            <td>${buku.stok}</td>
                            <td>${buku.ket}</td>

                        </tr>
                                `;
                        });
                    } else {
                        html = '<tr><td colspan="3">Tidak ada data buku ditemukan.</td></tr>';
                    }
                    $('#bukuTable').html(html);
                }
            });
        });
    });
</script>