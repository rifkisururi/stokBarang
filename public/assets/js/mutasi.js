$(document).on("click", "#btnAdd" , function(){
    console.log('form add dibuat');
    var id = makeid(10);
    $("tbody").prepend(`
        <tr class="tr_${id}">
            <td><input type='text' class='form-control nama'></td>
            <td><input type='date' class='form-control tanggal'></td>
            <td><input type='number' class='form-control jumlah'></td>
            <td><input type='number' class='form-control harga'></td>
            <td>
                <select class='form-control jenis_transaksi'>
                    <option value="masuk">Masuk</option>
                    <option value="keluar">Keluar</option>
                </select>
            </td>
            <td>
                <button class='btn btn-primary btcSave' id='btnSave_${id}'>Simpan</button>
                <button class='btn btn-danger btnCancel' id='btnCancel_${id}'>Batal</button>
            </td>
        </tr>
    `);
});

$(document).on("click", ".btnCancel" , function(){
    var classRow = $(this).attr("id").replace("btnCancel_",".tr_");
    $(classRow).remove();
});


$(document).on("click", ".btcSave" , function(){
    var classRow = $(this).attr("id").replace("btnSave_",".tr_");

    var data = getData(classRow);
    console.log(data); 
});

function getData(selector){
    dataPost = new Object();
    dataPost.id = selector;
    dataPost.nama = $(selector + " .nama").val();
    dataPost.tanggal = $(selector + " .tanggal").val();
    dataPost.jumlah = $(selector + " .jumlah").val();
    dataPost.harga = $(selector + " .harga").val();
    dataPost.jenis_transaksi = $(selector + " .jenis_transaksi").val();

    return dataPost;
}