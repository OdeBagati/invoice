<div class="cover-form align-items-center d-flex justify-content-center">
    <h1>PO Form</h1>
</div>

<div class="container mt-4">

    <form action="<?= base_url('po-form'); ?>" method="post">

        <?= csrf_field(); ?>
    
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">PO Form</li>
            </ol>
        </nav>

        <div class="col-5 mt-3" hidden>
            <input type="text" class="form-control" name="id_po" placeholder="id_po" value="">
        </div>

        <div class="card my-5">
            <div class="card-body row">

                <div class="col-5 offset-lg-1 offset-sm-0 mt-3">
                    <select name="idjenis" class="form-select" aria-label=".form-select-lg" required>
                        <option selected disabled>List Pelanggans</option>
                        <?php
                            use App\Models\CustomerModel;
                            $this->objJenis=new CustomerModel;
                            $dataCustomer=$this->objJenis->getJenisCustomer();

                            foreach ($dataCustomer as $itemCustomer => $listCustomer)
                            {
                                if(isset($idcustomer)&&$idcustomer==$listCustomer['idcustomer'])
                                {
                                    echo '<option value="'.$listCustomer['idcustomer'].'" selected>'.$listCustomer['no_akun'].' - '.$listCustomer['nama_customer'].'</option>';
                                }
                                else
                                {
                                    echo '<option value="'.$listCustomer['idcustomer'].'">'.$listCustomer['no_akun'].' - '.$listCustomer['nama_customer'].'</option>';
                                }
                            }
                        ?>
                    </select>
                </div>

                <div class="col-10 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="cp" placeholder="Panggilan" value="" required readonly>
                </div>

                <div class="col-10 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="po_ref" placeholder="PO Ref" value="" required>
                </div>

                <div class="col-7 offset-lg-1 offset-sm-0 mt-4">
                    <input type="date" class="form-control" name="po_date" value="" required>
                </div>

                <div class="col-3 mt-4">
                    <input type="text" class="form-control" name="sales_ref" placeholder="Sales Ref" value="" required>
                </div>

                <div class="col-7 offset-lg-1 offset-sm-0 mt-4">
                    <input type="date" class="form-control" name="ref_date" value="" required>
                </div>

                <div class="col-4 mt-4">
                    <select name="idcurrency" id="idcurrency" class="form-select" aria-label=".form-select-lg" required>
                        <option value="1">Rp.</option>
                        <option value="2">U$D</option>
                    </select>
                </div>
                
                <div class="col-4 mt-4">
                    <input type="text" class="form-control" name="diskon" placeholder="Diskon" value="" required>
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