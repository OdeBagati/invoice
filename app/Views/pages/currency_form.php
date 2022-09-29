<div class="cover-form align-items-center d-flex justify-content-center">
    <h1>Currency Form</h1>
</div>

<div class="container mt-4">

    <form action="<?= base_url('po-form'); ?>" method="post">

        <?= csrf_field(); ?>
    
        <nav style="--bs-breadcrumb-divider: url(&#34;data:image/svg+xml,%3Csvg xmlns='http://www.w3.org/2000/svg' width='8' height='8'%3E%3Cpath d='M2.5 0L1 1.5 3.5 4 1 6.5 2.5 8l4-4-4-4z' fill='%236c757d'/%3E%3C/svg%3E&#34;);" aria-label="breadcrumb">
            <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="<?= base_url(); ?>">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Currency Form</li>
            </ol>
        </nav>

        <div class="col-5 mt-3" hidden>
            <input type="text" class="form-control" name="idcurrency" placeholder="idcurrency" value="">
        </div>

        <div class="card my-5">
            <div class="card-body row">

                <div class="col-3 offset-lg-2 offset-sm-0 mt-3">
                    <input type="text" class="form-control" name="simbol" placeholder="Simbol" value="" required>
                </div>

                <div class="col-5 offset-lg-1 offset-sm-0 mt-4">
                    <input type="text" class="form-control" name="nama_currency" placeholder="Nama Currency" value="" required>
                </div>

                <div class="col-12 text-center">
                    <input type="submit" name="submit" class="btn btn-primary" value="Save Data">
                    <input type="reset" name="reset" class="btn btn-warning" value="Reset">
                </div>
            </div>
        </div>

    </form>

</div>