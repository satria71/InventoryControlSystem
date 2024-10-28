<?= $this->extend('layout/default') ?>

<?= $this->section('title') ?>
<title>Data Aktiva Support</title>
<?= $this->endSection()?>

<?= $this->section('content') ?>
    <section class="section">
        <div class="section-header">
            <h1>Aktiva Support</h1>
        </div>
        
        <?php if(session()->getFlashdata('success')):?>
            <div class="alert alert-success alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Success !</b>
                    <?=session()->getFlashdata('success')?>
                </div>
            </div>
        <?php endif;?>

        <?php if(session()->getFlashdata('error')):?>
            <div class="alert alert-danger alert-dismissible show fade">
                <div class="alert-body">
                    <button class="close" data-dismiss="alert">x</button>
                    <b>Error !</b>
                    <?=session()->getFlashdata('error')?>
                </div>
            </div>
        <?php endif;?>

        <div class="section-body">
            <div class="card">
                <div class="card-header">
                    <h4>Data Aktiva</h4>
                    
                    <div class="section-header-button" style="margin-left:790px;">
                        <a href="<?=site_url('AktivaSupport/add')?>" class="btn btn-primary">Add New</a>
                    </div>
                </div>
                <div class="card-body table-responsive">
                    <table class="table table-striped table-md">
                        <tbody><tr>
                            <th>No.</th>
                            <th>Kode Barang</th>
                            <th>Nama Barang</th>
                            <th>Stok</th>
                            <th>Status</th>
                            <th>Action</th>
                        </tr>
                        <?php foreach ($aktiva as $key => $value) : ?>
                        <tr>
                            <td><?=$key + 1?></td>
                            <td><?=$value->kd_barang?></td>
                            <td><?=$value->nama_barang?></td>
                            <td><?=$value->stok?></td>
                            <td><?=$value->status?></td>
                            <td class="text-center" style="width:12%">
                                <a href="" class="btn btn-primary btn sm"><i class="fas fa-pencil-alt"></i></a>
                                <a href="" class="btn btn-danger btn sm"><i class="fas fa-trash"></i></a>
                            </td>
                        </tr>
                        <?php endforeach ?>
                        </tbody></table>
                    </table>
                </div>
            </div>
        </div>
    </section>
<?= $this->endSection()?>