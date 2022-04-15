/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
$(document).ready(function() {
    $('.dataTable').DataTable();
    $(".dataTables_length label").before("<button class='btn btn-primary' id='btnAdd'>Tambah Data </button>  ");

} );