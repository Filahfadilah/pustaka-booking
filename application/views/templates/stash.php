<li class="nav-item <?= ($judul == 'Kategori Buku') ? 'active' : null ?>"> <a class="nav-link pb-0" href="<?= base_url('buku/kategori'); ?>"> <i class="fa fa-fw fa-book"></i> <span>Kategori Buku</span></a> </li>
    </li>
    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Transaksi
    </div>

    <!-- <li class="nav-item active"> -->

    <li class="nav-item <?= ($judul == 'Data Pinjam') ? 'active' : null ?>">
        <a href="<?= base_url('pinjam') ?>" class="nav-link pb-0">
            <i class="fa fa-fw fa-shopping-cart"></i>
            <span>Data Peminjam</span>
        </a>
    </li>
    <li class="nav-item <?= ($judul == 'Daftar Booking') ? 'active' : null ?>">
        <a href="<?= base_url('pinjam/daftarBooking') ?>" class="nav-link pb-0">
            <i class="fa fa-fw fa-list"></i>
            <span>Data Booking</span>
        </a>
    </li>

    <!-- </li> -->

    <!-- Divider -->
    <hr class="sidebar-divider mt-3">

    <!-- Heading -->
    <div class="sidebar-heading">
        Laporan
    </div>

    <!-- <li class="nav-item active"> -->

    <li class="nav-item <?= ($judul == 'Data Pinjam') ? 'active' : null ?>">
        <a href="<?= base_url('laporan/laporan_buku') ?>" class="nav-link pb-0">
            <i class="fa fa-fw fa-address-book"></i>
            <span>Laporan Data Buku</span>
        </a>
    </li>
    <li class="nav-item <?= ($judul == 'Daftar Booking') ? 'active' : null ?>">
        <a href="<?= base_url('laporan/laporan_anggota') ?>" class="nav-link pb-0">
            <i class="fa fa-fw fa-address-book"></i>
            <span>Laporan Data Anggota</span>
        </a>
    </li>
    <li class="nav-item <?= ($judul == 'Daftar Booking') ? 'active' : null ?>">
        <a href="<?= base_url('laporan/laporan_pinjam') ?>" class="nav-link pb-0">
            <i class="fa fa-fw fa-address-book"></i>
            <span>Laporan Peminjaman</span>
        </a>
    </li>