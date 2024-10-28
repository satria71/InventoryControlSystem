<br>
<center><h6 style="letter-spacing:1px;">Inventory Control System</h6></center>
<li class="menu-header">Main Menu</li>
<li><a class="nav-link" href="<?= site_url()?>"><i class="fas fa-fire"></i> <span>Dashboard</span></a></li>
<li><a class="nav-link" href="<?= site_url('barang')?>"><i class="fas fa-lemon"></i> <span>Cek Kesegaran</span></a></li>

<li class="nav-item dropdown">
<a href="#" class="nav-link has-dropdown" data-toggle="dropdown"><i class="fas fa-plug"></i> <span>Sarana Support</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="<?= site_url('AktivaSupport')?>">Aktiva Support</a></li>
        <li><a class="nav-link" href="<?= site_url('AktivaSupport/datang')?>">Aktiva Datang</a></li>
        <li><a class="nav-link" href="">Aktiva Keluar</a></li>
        <li><a class="nav-link" href="">Listing Stok</a></li>
        <li><a class="nav-link" href="">Peminjaman Sarana</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
<a href="#" class="nav-link has-dropdown"><i class="fas fa-th-large"></i><span>Sarana Warehouse</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="">User</a></li>
        <li><a class="nav-link" href="">Barang</a></li>
    </ul>
</li>

<li class="nav-item dropdown">
<a href="#" class="nav-link has-dropdown"><i class="fas fa-snowflake"></i><span>Perishable</span></a>
    <ul class="dropdown-menu">
        <li><a class="nav-link" href="">User</a></li>
        <li><a class="nav-link" href="">Barang</a></li>
    </ul>
</li>

<li><a class="nav-link" href="<?= site_url('barang')?>"><i class="fas fa-user"></i> <span>Manage User</span></a></li>
