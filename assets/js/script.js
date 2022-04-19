$(document).ready(function () {
    const base_url = "http://localhost/perpus";

    $('#bukuTable').DataTable();

    $(".btnTambahKelas").on("click", function () {
        const tingkat_kelas = $('select[name=tingkat_kelas] option').filter(':selected').val();
        const jurusan = $('select[name=jurusan] option').filter(':selected').val();
        const nomor_kelas = $("#inputNomorKelas").val();
        if (tingkat_kelas == "" & jurusan == "" & nomor_kelas == "") {
            $("#inputTingkatKelas").addClass("is-invalid");
            $("#inputJurusan").addClass("is-invalid");
            $("#inputNomorKelas").addClass("is-invalid");
        } else if (tingkat_kelas.length > 0 & jurusan.length > 0 & nomor_kelas.length > 0) {
            $("#inputTingkatKelas").removeClass("is-invalid");
            $("#inputJurusan").removeClass("is-invalid");
            $("#inputNomorKelas").removeClass("is-invalid");
            $.ajax({
                url: base_url + "/kelas/tambah",
                data: { tingkat_kelas: tingkat_kelas, jurusan: jurusan, nomor_kelas: nomor_kelas },
                method: "post",
                dataType: "json",
                success: function (data) {
                    console.log(data);
                }
            })
        }
    });

    $(".btnUpdateBuku").on("click", function () {
        const nama = $("#namaBukuModal").val();
        const id = $("#idBukuModel").val();
        if (nama == "") {
            $("#namaBukuModal").addClass("is-invalid");
        } else {
            $("#namaBukuModal").removeClass("is-invalid");
            $.ajax({
                url: base_url + "/buku/update",
                data: { "nama": nama, "id": id },
                method: 'post',
                dataType: 'json',
                success: function (data) {
                    if (data === 1) {
                        $("#namaBukuModal").val("");
                        $("#idBukuModel").val("");
                        Swal.fire({
                            icon: 'success',
                            title: 'Your work has been saved'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        })
                    }
                }
            });
        }
    });

    $(".btnModalUpdateBuku").on("click", function () {
        const id = $(this).data("id");
        $.ajax({
            url: base_url + "/buku/get",
            data: { id: id },
            method: "POST",
            dataType: "json",
            success: function (result) {
                $("#namaBukuModal").val(result.name);
                $("#idBukuModel").val(result.id);
            }
        })
    });

    $(".btnHapusBuku").on("click", function () {
        const id = $(this).data("id");
        Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
        }).then((result) => {
            if (result.isConfirmed) {
                $.ajax({
                    url: base_url + "/buku/delete",
                    data: { id: id },
                    method: "POST",
                    dataType: "json",
                    success: function (result) {
                        if (result === 1) {
                            Swal.fire({
                                icon: 'success',
                                title: 'Deleted!',
                                text: 'Your data has been deleted.'
                            }).then((result) => {
                                if (result.isConfirmed) {
                                    window.location.reload();
                                }
                            })
                        }
                    }
                })
            }
        })
    });

    $(".btnTambahBuku").on("click", function () {
        const nama = $("#namaBuku").val();
        if (nama == "") {
            $("#namaBuku").addClass("is-invalid");
        } else {
            $("#namaBuku").removeClass("is-invalid");
            $.ajax({
                url: base_url + "/buku/tambah",
                data: { nama: nama },
                method: 'post',
                dataType: 'json',
                success: function (data) {
                    if (data === 1) {
                        $("#namaBuku").val("");
                        Swal.fire({
                            icon: 'success',
                            title: 'Your work has been saved'
                        }).then((result) => {
                            if (result.isConfirmed) {
                                window.location.reload();
                            }
                        });
                    } else {
                        Swal.fire({
                            icon: 'error',
                            title: 'Oops...',
                            text: 'Something went wrong!'
                        });
                    }
                }
            });
        }
    });
});