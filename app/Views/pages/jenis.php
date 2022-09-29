<div class="cover-form align-items-center d-flex justify-content-center">
    <h1>Currency Form</h1>
</div>

<div class="container mt-4">

    <div class="card">

        <div class="card-header">
            <?= anchor('jenis-form','Add Data',array('class'=>'btn btn-info text-white')); ?>
        </div>

        <div class="card-body">

            <table id="table" class="table table-striped">
                <thead>
                    <tr>
                        <th>Id</th>
                        <th>Nama Kategori</th>
                        <th>Deskripsi</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach($dataJenis->getResult() as $listJenis): ?>
                        <tr>
                            <td><?= $listJenis->id;?></td>
                            <td><?= $listJenis->nama_tipe;?></td>
                            <td><?= $listJenis->deskripsi;?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>

        </div>

    </div>

</div>