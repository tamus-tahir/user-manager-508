let flashSuccess = $('.flash-success').data('flashdata');
if (flashSuccess) {
    Swal.fire(
        'Success',
        flashSuccess,
        'success'
    )
}

let flashError = $('.flash-error').data('flashdata');
if (flashError) {
    Swal.fire(
        'Error',
        flashError,
        'error'
    )
}

$('#data-table').DataTable();

$('#button-delete').on('click', function (event) {
    event.preventDefault();
    const href = $(this).attr('href');
    Swal.fire({
        title: 'Anda Yakin?',
        text: "Data akan Dihapus",
        icon: 'warning',
        showCancelButton: true,
        confirmButtonColor: '#3085d6',
        cancelButtonColor: '#d33',
        confirmButtonText: 'Ya, hapus data'
    }).then((result) => {
        if (result.isConfirmed) {
            document.location.href = href;
        }
    })
})

$("#upload").on('change', function () {
    $("#prev").attr("src", URL.createObjectURL(event.target.files[0]));
})