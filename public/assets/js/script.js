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