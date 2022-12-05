<?= $this->extend('layouts/index'); ?>

<?= $this->section('content'); ?>
<div class="mb-3">
    <button type="button" class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#exampleModal" id="btn-create">
        Tambah
    </button>
</div>

<div class="table-responsive">
    <table class="table table-hover table-bordered" id="data-table">
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Profil</th>
                <th scope="col">Action</th>
            </tr>
        </thead>
        <tbody>
            <?php $i = 1 ?>
            <?php foreach ($profil as $row) : ?>
                <tr>
                    <th><?= $i++; ?></th>
                    <td><?= $row['profil']; ?></td>
                    <td>
                        <a class="btn btn-info" href="/profil/akses/<?= $row['id_profil']; ?>" role="button">Akses</a>
                        <button type=" button" class="btn btn-warning" id="btn-update" data-bs-toggle="modal" data-bs-target="#exampleModal" data-profil="<?= $row['profil']; ?>" data-id="<?= $row['id_profil']; ?>">
                            Ubah
                        </button>
                        <a class="btn btn-danger" href="/profil/delete/<?= $row['id_profil']; ?>" role="button" id="button-delete">Hapus</a>
                    </td>
                </tr>
            <?php endforeach ?>

        </tbody>
    </table>
</div>

<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>
<!-- modal form profil -->
<div class="modal fade" id="exampleModal" data-bs-backdrop="static" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Form <?= $title; ?></h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <form class="row g-3 needs-validation" novalidate action="/profil/save" method="post" id="form">

                    <div class="mb-3">
                        <label for="profil" class="form-label">Profil <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" id="profil" name="profil" required>
                        <div class="valid-feedback">Looks good!</div>
                        <div class="invalid-feedback">Please choose a profil.</div>
                    </div>

            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Simpan</button>

                </form>
            </div>
        </div>
    </div>
</div>
<!-- end modal form profil -->
<?= $this->endSection(); ?>

<?= $this->section('script'); ?>
<script>
    $('#btn-update').on('click', function() {
        $('#profil').val($(this).data('profil'))
        $('#form').attr('action', '/profil/update/' + $(this).data('id'))
    })

    $('#btn-create').on('click', function() {
        $('#profil').val('')
        $('#form').attr('action', '/profil/save')
    })
</script>
<?= $this->endSection(); ?>