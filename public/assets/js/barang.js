$(document).on("click", "#btnAdd" , function(){
    console.log('form add dibuat');
    var id = makeid(10);
    $("tbody").prepend(`
        <tr class="tr_${id}">
            <td><input type='text' class='form-control kode'></td>
            <td><input type='text' class='form-control nama'></td>
            <td></td>
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

function getData(selector){
    dataPost = new Object();
    dataPost.id = selector;
    dataPost.kode = $(selector + " .kode").val();
    dataPost.nama = $(selector + " .nama").val();

    return dataPost;
}

$(document).on("click", ".btcSave" , function(){
    var classRow = $(this).attr("id").replace("btnSave_",".tr_");

    var dataPost = getData(classRow);
    console.log(dataPost);

    $.ajax({
        url:"barang/add",
        type:"POST",

        data:dataPost ,
        success:function(response) {
          console.log('data berhasil di simpan', response);
          $("tbody").prepend(`
            <tr class='tr_${response.id}'>
                <td class='kode'>${dataPost.kode}</td>
                <td class='nama'>${dataPost.nama}</td>
                <td class='stok'>0</td>
                <td>
                    <button class="btn btn-warning">Ubah</button>
                    <button class="btn btn-danger">Hapus</button>
                </td>
            </tr>
          `);

          $(dataPost.id).remove();
       },
       error:function(){
        alert("error");
       }

    });
});