<?= $this->extend("Layout/template"); ?>

<?= $this->section("content"); ?>

<h1 class="text-center p-3 text-white"><?= $bundesland->name ?></h1>


<div class="row">
    <div class="col-6">
        <img class="img-fluid" src="<?= base_url("obrazky/mapy/" . $bundesland->mapa) ?>" alt="...">
    </div>

    <div class="col-6">
        <img class="img-fluid" src="<?= base_url("obrazky/vlajky/" . $bundesland->vlajka) ?>" alt="...">
    </div>
</div>



<?= $this->endSection(); ?>