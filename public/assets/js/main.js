$(document).ready(function () {
    $('#table').DataTable();

    $("#addSite").click(function(){
        $('#addedSite').append('<div class="offset-lg-1 col-10 mt-4"><input type="text" class="form-control" name="alamat_site[]" placeholder="Tambah Alamat SIte"></div>');
    });

    $("#addPO").click(function(){
        $('#addedPO').append('<div class="col-2 offset-lg-1 offset-sm-0 mt-4"> <input type="text" class="form-control" name="kode_po[]" placeholder="Kode PO" value="" required> </div><div class="col-4 mt-4"> <input type="text" class="form-control" name="deskripsi_po[]" placeholder="Deskripsi PO" value="" required> </div><div class="col-1 mt-4"> <input type="text" class="form-control" name="unit_po[]" placeholder="Unit" value="" required> </div><div class="col-1 mt-4"> <input type="number" class="form-control" name="qty[]" placeholder="Qty" value="" required> </div><div class="col-2 mt-4"> <input type="text" class="form-control" name="harga[]" placeholder="Harga" value="" required> </div>');
    });
});

// $(document).ready(function () {
//     $('#table').DataTable({
//         order: [[1, 'asc']],
//     });
// });