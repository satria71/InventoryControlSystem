<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Datang Aktiva Support</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <div class="section-header-back">
                <a href="<?=site_url('AktivaSupport/add')?>" class="btn"><i class="fas fa-arrow-left"></i></a>
            </div>
            <h1>Tambah Data Kedatangan Aktiva Support</h1>
        </div>


        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Tambah Data Kedatangan Aktiva</h4>
                </div>
                <form action="<?=site_url('AktivaSupport')?>" method="post" autocomplete="off"> 
                    <div class="row">
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Nomor Surat Jalan</label>
                                    <input type="text" name="kd_barang" class="form-control" required autofocus>
                                </div>
                                <div class="form-group">
                                    <label>Nama Barang</label>
                                    <input type="text" name="nama_barang" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Jumlah</label>
                                    <input type="text" name="status" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Tanggal</label>
                                    <input type="date" name="status" class="form-control">
                                </div>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="card-body">
                                <div class="form-group">
                                    <label>Keterangan</label>
                                    <input type="text" name="status" class="form-control" >
                                </div>
                                <div class="form-group">
                                    <label>Upload Gambar Surat Jalan</label>
                                    <input type="file" name="status" class="form-control">
                                </div>
                                <div>
                                    <button type="submit" class="btn btn-success"><i class="fas fa-paper-plane"> Tambah</i></button>
                                    <button type="reset" class="btn btn-warning"><i class="fas fa-redo"> Reset</i></button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </section>
<?= $this->endSection()?>