<div class="cover-form align-items-center d-flex justify-content-center">
    <h1>Customer Form</h1>
</div>

<div class="container mt-4">

    <form action="<?= base_url('customer-form'); ?>" method="post">

        <?= csrf_field(); ?>
    
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Customer Form</li>
            </ol>
        </nav>

        <div class="col-5 mt-3" hidden>
            <input type="text" class="form-control" name="idcustomer" placeholder="idcustomer" value="<?= isset($idcustomer)?$idcustomer:set_value('idcustomer'); ?>">
        </div>

        <div class="card my-5">
            <div class="card-body row">

                <div class="col-5 offset-lg-1 offset-sm-0 mt-3">
                    <select name="idjenis" class="form-select" aria-label=".form-select-lg" required>
                        <option selected disabled>Jenis Customer</option>
                        <?php
                            use App\Models\JenisModel;
                            $this->objJenis=new JenisModel;
                            $dataJenis=$this->objJenis->getListJenis();

                            foreach ($dataJenis as $itemJenis => $listJenis)
                            {
                                if(isset($idjenis)&&$idjenis==$listJenis['id'])
                                {
                                    echo '<option value="'.$listJenis['id'].'" selected>'.$listJenis['nama_tipe'].'</option>';
                                }
                                else
                                {
                                    echo '<option value="'.$listJenis['id'].'">'.$listJenis['nama_tipe'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>

                <div class="col-5 mt-3">
                    <input type="text" class="form-control" name="no_akun" placeholder="No. Akun" value="<?= isset($no_akun)?$no_akun:set_value('no_akun'); ?>" readonly>
                </div>

                <div class="col-10 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="nama_customer" placeholder="Nama Customer" value="<?= isset($nama_customer)?$nama_customer:set_value('nama_customer'); ?>" required>
                </div>

                <div class="col-10 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="alamat" placeholder="Alamat Customer" value="<?= isset($alamat)?$alamat:set_value('alamat'); ?>" required>
                </div>

                <div class="col-7 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="npwp" placeholder="NPWP" value="<?= isset($npwp)?$npwp:set_value('npwp'); ?>" required>
                </div>

                <div class="col-3 mt-4">
                    <input type="text" class="form-control" name="kode" placeholder="Kode" value="<?= isset($kode)?$kode:set_value('kode'); ?>" required>
                </div>

                <div class="col-3 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="phone" placeholder="No. Telp" value="<?= isset($phone)?$phone:set_value('phone'); ?>" required>
                </div>

                <div class="col-3 mt-4">
                    <input type="text" class="form-control" name="fax" placeholder="No. Fax" value="<?= isset($fax)?$fax:set_value('fax'); ?>" required>
                </div>
                
                <div class="col-4 mt-4">
                    <input type="text" class="form-control" name="cp" placeholder="Contact Person" value="<?= isset($cp)?$cp:set_value('cp'); ?>" required>
                </div>
                
                <div class="offset-lg-1">
                    <div class="col-4 mt-4">
                        <button class="btn btn-info rounded-circle text-white"><b class="h3">+</b></button>
                    </div>
                </div>

                <div class="col-12 text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </div>
            </div>
        </div>

    </form>

</div>