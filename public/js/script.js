$(function () {
  $(".tambahData").on("click", function () {
    $("#judulModal").html("Tambah Data Hewan Ternak");
    $(".modal-footer button[type=submit]").html("Tambah Data");
  });

  $(".tampilModalUbah").on("click", function () {
    $("#judulModal").html("Ubah Data Hewan Ternak");
    $(".modal-footer button[type=submit]").html("Ubah Data");
    $(".modal-body form").attr(
      "action",
      "http://localhost/crud-ternak/public/ternak/ubah"
    );

    const id = $(this).data("id");

    $.ajax({
      url: "http://localhost/crud-ternak/public/ternak/getUbah",
      data: { id: id },
      method: "post",
      dataType: "json",
      success: function (data) {
        console.log(data);
        $("#id").val(data.id);
        $("#nama").val(data.nama_ternak);
        $("#jumlah").val(data.jumlah);
        $("#modal").val(data.modal);
      },
    });
  });
});
