<?= $this->extend("layout/template") ?>


<?= $this->section("content") ?>

<h1 class="text-center p-3 text-white">Měření stanice <?= $zeme->place ?></h1>

<?php
$table = new \CodeIgniter\View\Table();
$table->setHeading("Datum měření", "Minimální naměřená teplota", "Maximální naměřená teplota", "Vlhkost");

foreach ($udaje as $row) {
    $table->addRow($row->date, $row->min_2m. " °C", $row->max_2m. " °C", $row->humidity." %");
}

$template = array(
    'table_open' => '<table class="table table-bordered table-dark" >',
    'thead_open' => '<thead>',
    'thead_close' => '</thead>',
    'heading_row_start' => '<tr>',
    'heading_row_end' => ' </tr>',
    'heading_cell_start' => '<th>',
    'heading_cell_end' => '</th>',
    'tbody_open' => '<tbody>',
    'tbody_close' => '</tbody>',
    'row_start' => '<tr>',
    'row_end'  => '</tr>',
    'cell_start' => '<td>',
    'cell_end' => '</td>',
    'row_alt_start' => '<tr>',
    'row_alt_end' => '</tr>',
    'cell_alt_start' => '<td>',
    'cell_alt_end' => '</td>',
    'table_close' => '</table>'
);

$table->setTemplate($template);

echo $table->generate();

echo $pager->links();
?>



<?= $this->endSection() ?>