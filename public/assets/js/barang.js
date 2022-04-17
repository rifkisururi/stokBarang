$(document).on("click", "#btnAdd" , function(){
    console.log('form add dibuat');
    var id = makeid(10);
    $("tbody").prepend(`
        <tr class="tr_${id}">
            <td><input type='text' class='form-control kode'></td>
            <td><input type='text' class='form-control nama'></td>
            <td></td>
            <td>
                <button class='btn btn-primary btnSave' id='btnSave_${id}'>Simpan</button>
                <button class='btn btn-danger btnCancel' id='btnCancel_${id}'>Batal</button>
                
            </td>
        </tr>
    `);
});

$(document).on("click", ".btnCancel" , function(){
    var classRow = $(this).attr("id").replace("btnCancel_",".tr_");
    $(classRow).remove();
});

$(document).on("click", ".btnCancelEdit" , function(){
    var classRow = $(this).attr("id").replace("btnCancel_","tr_");
    var classLama = $("."+classRow).attr("class").replace(classRow,"").trim();
    $("."+classLama).show();
    $("."+classRow).remove();
});

function getData(selector){
    dataPost = new Object();
    dataPost.id = selector;
    dataPost.kode = $(selector + " .kode").val();
    dataPost.nama = $(selector + " .nama").val();

    return dataPost;
}

$(document).on("click", ".btnSave" , function(){
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
                    <button class="btn btn-warning btnEdit" id="btnEdit_${response.id}">Ubah</button>
                    <button class="btn btn-danger btnHapus" id="btnHapus_${response.id}">Hapus</button>
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

// Fungsi edit
$(document).on("click", ".btnEdit" , function(){
    console.log('form edit dibuat');
    console.log($(this).attr("id"));
    var idLama = $(this).attr("id").replace("btnEdit_","tr_");

    $("."+idLama).hide();

    var kode = $("."+ idLama +" .kode").html().trim();
    var nama = $("."+ idLama +" .nama").html().trim();

    var id = makeid(10);
    $(`tbody .${idLama}`).after(`
        <tr class="tr_${id} ${idLama}">
            <td><input type='text' class='form-control kode' value='${kode}'></td>
            <td><input type='text' class='form-control nama' value='${nama}'></td>
            <td></td>
            <td>
                <button class='btn btn-primary btnSaveEdit' id='btnSave_${id}'>Simpan</button>
                <button class='btn btn-danger btnCancelEdit' id='btnCancel_${id}'>Batal</button>
            </td>
        </tr>
    `);
});


$(document).on("click", ".btnSaveEdit" , function(){
    var classRow = $(this).attr("id").replace("btnSave_","tr_");
    var idLama = $("."+classRow).attr("class").replace(classRow,"").trim().replace("tr_","");
    var dataPost = getData("."+classRow);
    dataPost.id = idLama;
    console.log(dataPost);

    $.ajax({
        url:"barang/update",
        type:"POST",

        data:dataPost ,
        success:function(response) {
          console.log('data berhasil di simpan', response);
          $(".tr_"+idLama +".odd").remove();
          $(`tbody .${classRow}`).after(`
            <tr class='tr_${response.id}'>
                <td class='kode'>${dataPost.kode}</td>
                <td class='nama'>${dataPost.nama}</td>
                <td class='stok'>0</td>
                <td>
                    <button class="btn btn-warning btnEdit" id="btnEdit_${response.id}">Ubah</button>
                    <button class="btn btn-danger btnHapus" id="btnHapus_${response.id}">Hapus</button>
                </td>
            </tr>
          `);

          $("."+classRow).remove();
       },
       error:function(){
        alert("error");
       }

    });
});

// hapus data
$(document).on("click", ".btnHapus" , function(){
    var id = $(this).attr("id").replace("btnHapus_","");

    $.ajax({
        url:"barang/hapus/" + id,
        type:"GET",
        success:function(response) {
          console.log(response);
          $(".tr_"+response.id).remove();
       },
       error:function(){
        alert("error");
       }

    });
});