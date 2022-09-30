<div class="cover-form align-items-center d-flex justify-content-center">
    <h1>Data Customer</h1>
</div>

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <?= anchor('customer-form','Add Data',array('class'=>'btn btn-info text-white')); ?>
        </div>

        <div class="card-body">

            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>No.</th>
                        <th>Nama Customer</th>
                        <th>Kategori</th>
                        <th>No. Akun</th>
                        <th>No. Tlp</th>
                        <th>Aksi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        $no=1;
                        foreach($dataCustomer->getResult() as $listCustomer)
                        { ?>
                            <tr>
                                <td><?= $no; ?></td>
                                <td><?= $listCustomer->nama_customer; ?></td>
                                <td><?= $listCustomer->nama_tipe; ?></td>
                                <td><?= $listCustomer->no_akun; ?></td>
                                <td><?= $listCustomer->phone; ?></td>
                                <td>
                                    <?= 
                                        anchor('customer-form'.'/'.$listCustomer->idcustomer,'Update',array('class'=>'btn btn-success btn-sm'));
                                        echo "&nbsp;"; 
                                        echo anchor('delete-customer'.'/'.$listCustomer->idcustomer,'Delete',array('class'=>'btn btn-danger btn-sm'));
                                    ?>
                                </td>
                            </tr>
                        <?php
                        $no++;
                        }
                    ?>
                </tbody>
            </table>

        </div>

    </div>

</div>