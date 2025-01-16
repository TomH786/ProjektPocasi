<?= $this->extend("Layout/template"); ?>


<?= $this->section("content"); ?>
<h1 class="text-center p-3 text-white">Přehled meteorologických stanic ve spolkové zemi: <?= $bundesland->name ?> </h1>

<div class=row>

    <?php
    foreach ($station as $row) {
    ?>
        <div class="col-12 col-md-6 col-lg-4 mb-4">
            <div class="card m-2 bg-dark">
                <div class="card-body text-white">
                    <?php
                    echo "<h3>", anchor("data/" . $row->S_ID, $row->place), "</h3>";
                    echo "<p><b>Zeměpisná šířka:</b> " . $row->geo_latitude . " °</p>";
                    echo "<p><b>Zeměpisná délka:</b>" . $row->geo_longtitude . " °</p>";
                    echo "<p><b>Nadmořská výška:</b> " . $row->height . " m n. m.</p>";

                    ?>
                </div>

            </div>
        </div>
    <?php
    }
    ?>

</div>

<?= $this->endSection(); ?>