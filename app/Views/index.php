<?=$this->extend("Layout/template");?>

<?=$this->section("content");?>

    <h1 class="text-center text-white p-3">Seznam spolkových zemí Německa</h1>

    
        <?php
        $table = new \CodeIgniter\View\Table();
        $table->setHeading("ID", "Název", "Zkratka", "Obrázky");
        foreach($bundesland as $row) {
            $table->addRow($row->id, anchor("id/".$row->id, $row->name), $row->short_name, anchor("obrazky/".$row->id, "Země"));   
        }
        $template = array(
            'table_open'=> '<table class="table table-bordered table-dark" >',
            'thead_open'=> '<thead>',
            'thead_close'=> '</thead>',
            'heading_row_start'=> '<tr>',
            'heading_row_end'=>' </tr>',
            'heading_cell_start'=> '<th>',
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
        ?>  
    

    




<?=$this->endSection();?>