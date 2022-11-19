<?= $this->extend('layouts/index'); ?>

<?= $this->section('content'); ?>
<form class="row g-3 needs-validation" novalidate action="/config/update">

    <div class="col-md-4">
        <label for="appname" class="form-label">App Name <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="appname" name="appname" required value="<?= $config['appname']; ?>">
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Please choose a appname.</div>
    </div>
    <div class="col-md-8">
        <label for="copyright" class="form-label">Copyright <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="copyright" name="copyright" required value="<?= $config['copyright']; ?>">
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Please choose a copyright.</div>
    </div>
    <div class="col-md-4">
        <label for="author" class="form-label">Author <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="author" name="author" required value="<?= $config['author']; ?>">
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Please choose a author.</div>
    </div>
    <div class="col-md-8">
        <label for="keywords" class="form-label">Keywords <span class="text-danger">*</span></label>
        <input type="text" class="form-control" id="keywords" name="keywords" required value="<?= $config['keywords']; ?>">
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Please choose a keywords.</div>
    </div>
    <div class="col-12">
        <label for="description" class="form-label">Description <span class="text-danger">*</span></label>
        <textarea class="form-control" id="description" name="description" required cols="30" rows="4"><?= $config['description']; ?></textarea>
        <div class="valid-feedback">Looks good!</div>
        <div class="invalid-feedback">Please choose a description.</div>
    </div>

    <div class="col-12">
        <button class="btn btn-primary" type="submit">Submit form</button>
    </div>
</form>
<?= $this->endSection(); ?>

<?= $this->section('modal'); ?>

<?= $this->endSection(); ?>

<?= $this->section('script'); ?>

<?= $this->endSection(); ?>