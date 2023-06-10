/**
 *
 * You can write your JS code here, DO NOT touch the default style file
 * because it will make it harder for you to update.
 *
 */

"use strict";
//custom menu
// var path = location.pathname.split("/")
// var url = location.origin + '/' + path[1]

// $('ul.sidebar-menu li a').each(function () {
//     if ($(this).attr('href').indexOf(url) !== -1) {
//         $(this).parent().addClass('active').parent().parent('li').addClass('active');
//     }
// })

const flashData = $(".flash-data").data("flashdata"); // CRUD success
const flashDanger = $(".flash-data-danger").data("flashdanger"); //CRUD errors

if (flashData) {
  Swal.fire({
    icon: "success",
    title: "Berhasil Disimpan.",
    html: flashData,
    timer: 3000,
  });
} else if (flashDanger) {
  Swal.fire({
    icon: "error",
    title: "Gagal Disimpan.",
    html: flashDanger,
    timer: 5000,
  });
}

// tombol hapus
$(".buttonDelete").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    title: "Apakah anda yakin?",
    text: "Data ini akan terhapus dan tidak bisa dikembalikan!",
    icon: "warning",
    timer: 5000,
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Lanjut menghapus",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

$(".buttonResetPasUser").on("click", function (e) {
  e.preventDefault();
  const href = $(this).attr("href");

  Swal.fire({
    title: "Yakin ingin melanjutkan?",
    text: "Password pengguna akan direset menjadi password default!",
    icon: "warning",
    timer: 5000,
    showCancelButton: true,
    confirmButtonColor: "#3085d6",
    cancelButtonColor: "#d33",
    confirmButtonText: "Ya, Lanjut!",
  }).then((result) => {
    if (result.value) {
      document.location.href = href;
    }
  });
});

// image preview
function readURL(input) {
  if (input.files && input.files[0]) {
    var reader = new FileReader();

    reader.onload = function (e) {
      $("#preview_thumbnail").attr("src", e.target.result);
      $("#preview_foto_produk").attr("src", e.target.result);
    };

    reader.readAsDataURL(input.files[0]);
  }
}


//modal confirmation
function submitDel(id){
    $('#del-'+id).submit();
}
function returnLogout(){
  var link = $('#logout').attr('href')
  $(location).attr('href',link)
}

//masukkan nama file pada label 
$(document).ready(function () {
  $("#fileInput").on("change", function () {
    const file = $(this).prop("files")[0];
    $("#fileLabel").text(file ? file.name : "Pilih file");
  });
});
