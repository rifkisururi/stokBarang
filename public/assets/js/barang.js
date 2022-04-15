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


$(document).on("click", ".btcSave" , function(){
    var classRow = $(this).attr("id").replace("btnSave_",".tr_");

    var data = getData(classRow);
    console.log(data); 
});

function getData(selector){
    dataPost = new Object();
    dataPost.id = selector;
    dataPost.kode = $(selector + " .kode").val();
    dataPost.nama = $(selector + " .nama").val();

    return dataPost;
}