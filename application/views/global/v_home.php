<!-- Jumbotron -->
<div id="home" class="jumbotron">
    <div class="container">
        <h1>Selamat Datang di Perpustakaan</h1>
        <p>Membaca adalah jendela dunia. Temukan buku favorit Anda di sini.</p>
        <a href="#datatable" class="btn btn-primary btn-lg">Lihat Koleksi</a>
    </div>
</div>

<!-- Data Table Section -->
<div id="datatable" class="table-section">
    <div class="container">
        <h2>Koleksi Buku</h2>

        <div class="card-body" style="margin-bottom: 20px;">
            <form method="GET" class="row mb-4">
                <div class="col-md-4">
                    <label for="category" class="form-label">Kategori</label>
                    <!-- <div class="input-group"> -->
                    <!-- <span class="input-group-text"><i class="fa fa-list"></i></span> -->
                    <select name="category" id="category" class="form-control">
                        <option value="">Semua Kategori</option>
                        <?php foreach ($data_kategori->result_array() as $category): ?>
                            <option value="<?= $category['id_kategori'] ?>" <?= $selected_category == $category['id_kategori'] ? 'selected' : '' ?>>
                                <?= $category['kategori'] ?>
                            </option>
                        <?php endforeach; ?>
                    </select>
                    <!-- </div> -->
                </div>
                <div class="col-md-4">
                    <label for="rack" class="form-label">Rak</label>
                    <!-- <div class="input-group"> -->
                    <!-- <span class="input-group-text"><i class="fa fa-book"></i></span> -->
                    <select name="rack" id="rack" class="form-select">
                        <option value="">Semua Rak</option>
                        <?php foreach ($data_rak->result_array() as $rack): ?>
                            <option value="<?= $rack['no_rak'] ?>" <?= $selected_rack == $rack['no_rak'] ? 'selected' : '' ?>>
                                <?= $rack['nama_rak'] ?>
                            </option>
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
                <tbody>
                    <?php
                    $no = 1;
                    foreach ($data_buku as $op) {
                    ?>
                        <tr>
                            <td><?php echo $no++; ?></td>
                            <td class="details-control"><i class="btn btn-box-tool" data-toggle="tooltip" title="Tampilkan Detail"><i class="glyphicon glyphicon-plus"></i></i>
                            </td>
                            <td><?php echo $op['id_buku']; ?></td>
                            <td><?php echo $op['ISBN']; ?></td>
                            <td><?php echo $op['judul']; ?></td>
                            <td><?php $kategori = $op['id_kategori'];
                                foreach ($data_kategori->result_array()  as $op2) {
                                    if ($op2['id_kategori'] == $kategori) {
                                        echo $op2['kategori'];
                                    }
                                } ?></td>
                            <td><?php $penerbit = $op['id_penerbit'];
                                foreach ($data_penerbit->result_array()  as $op2) {
                                    if ($op2['id_penerbit'] == $penerbit) {
                                        echo $op2['nama_penerbit'];
                                    }
                                } ?></td>
                            <td><?php $pengarang = $op['id_pengarang'];
                                foreach ($data_pengarang->result_array()  as $op2) {
                                    if ($op2['id_pengarang'] == $pengarang) {
                                        echo $op2['nama_pengarang'];
                                    }
                                } ?></td>
                            <td><span class="label label-success"><?php $no_rak = $op['no_rak'];
                                                                    foreach ($data_rak->result_array()  as $op2) {
                                                                        if ($op2['no_rak'] == $no_rak) {
                                                                            echo $op2['nama_rak'];
                                                                        }
                                                                    } ?></span>
                            </td>
                            <td><?php $model->countRow(1, $op['id_buku']); ?></td>
                            <td><?php echo $op['thn_terbit']; ?></td>
                            <td><?php echo $op['stok']; ?></td>

                            <td><?php if ($op['ket'] == null or $op['ket'] == '') {
                                    echo '-';
                                } else {
                                    echo $op['ket'];
                                } ?>
                            </td>

                        </tr>
                    <?php
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <div class="box-footer">
            Menampilkan daftar buku, untuk melihat detail buku klik tombol <b>+</b>, Lakukan pencarian Buku pada form <b>search</b> .
        </div><!-- box-footer -->
    </div>
</div>

<!-- About Section -->
<div id="about" class="section">
    <div class="container">
        <h2>Tentang Kami</h2>
        <p class="text-center">Perpustakaan kami menyediakan berbagai koleksi buku mulai dari fiksi, non-fiksi, hingga referensi akademik. Kami berkomitmen untuk memberikan layanan terbaik bagi para pembaca.</p>
    </div>
</div>

<!-- Contact Section -->
<!-- <div id="contact" class="section">
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
</div> -->