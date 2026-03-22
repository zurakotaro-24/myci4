<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;
use CodeIgniter\View\Table;

class DataController extends BaseController
{
    public function index()
    {
        $table = new Table();
        
        $data = [
            ['Name', 'City', 'State'],
            ['Fred', 'Hyderabrad', 'TS'],
            ['Mary', 'Kolkata', 'WB'],
            ['John', 'Mumbai', 'MH'],
        ];

        // $table->setHeading(['Name', 'City', 'State']);
        // $table->addRow(['Fred', 'Hyderabrad', 'TS']); 
        // $table->addRow(['Mary', 'Kolkata', 'WB']);
        // $table->addRow(['John', 'Mumbai', 'MH']);

        $template = [
            'table_open' => '<table border="1" cellpadding="4" cellspacing="0" class="table">',

            'thead_open'  => '<thead>',
            'thead_close' => '</thead>',

            'heading_row_start'  => '<tr>',
            'heading_row_end'    => '</tr>',
            'heading_cell_start' => '<th>',
            'heading_cell_end'   => '</th>',

            'tfoot_open'  => '<tfoot>',
            'tfoot_close' => '</tfoot>',

            'footing_row_start'  => '<tr>',
            'footing_row_end'    => '</tr>',
            'footing_cell_start' => '<td>',
            'footing_cell_end'   => '</td>',

            'tbody_open'  => '<tbody>',
            'tbody_close' => '</tbody>',

            'row_start'  => '<tr>',
            'row_end'    => '</tr>',
            'cell_start' => '<td>',
            'cell_end'   => '</td>',

            'row_alt_start'  => '<tr>',
            'row_alt_end'    => '</tr>',
            'cell_alt_start' => '<td>',
            'cell_alt_end'   => '</td>',

            'table_close' => '</table>',
        ];

        $table->setTemplate($template);

        $records = $table->generate($data);

        $passedData = [
            'page_title' => 'title ng dataview', 
            'users' => $records,
        ];

        return view("dataview", $passedData);
    }
}
