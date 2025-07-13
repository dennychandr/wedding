<?php

namespace App\DataTables;

use App\Models\Guest;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;

class GuestDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return (new EloquentDataTable($query))
            ->addColumn('action', function ($row) {
                $action = '';
                $link = 'https://wa.me/6282330097167?text=Dear '
                    . rawurlencode($row->nama)
                    . '%0A'
                    . rawurlencode('With the utmost respect and joy in our hearts, we kindly invite you to be a part of one of the most special moments in our lives — our wedding celebration.')
                    . '%0A%0A'
                    . rawurlencode('Please visit the link below for the full details of our event: ')
                    . '%0Ahttps://wedding.devfinitely.id/' . $row->id
                    . '%0A%0A'
                    . rawurlencode('It would be a great honor for us to have you present and to receive your blessings on this joyful occasion. Kindly help us by confirming your attendance via the link as soon as possible — we’re excited to celebrate with you!')
                    . '%0A'
                    . rawurlencode('Please note that this link is exclusively valid for the name addressed in this invitation. We kindly ask that you do not share it with others.')
                    . '%0A%0A'
                    . rawurlencode('With Love,')
                    . '%0A'
                    . rawurlencode('Denny & Fisia');

                $action .= "<a href='$link' class='btn btn-primary btn-sm action' target='_blank'>Kirim Pesan</a>";
                return $action;
            });;
        // ->addColumn('action', 'guest.action')
        // ->setRowId('id');
    }

    /**
     * Get the query source of dataTable.
     */
    public function query(Guest $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
            ->setTableId('guest-table')
            ->columns($this->getColumns())
            // ->minifiedAjax()
            //->dom('Bfrtip')
            // ->orderBy(1)
            // ->selectStyleSingle()
            ->buttons([
                Button::make('excel'),
                Button::make('csv'),
                Button::make('pdf'),
                Button::make('print'),
                Button::make('reset'),
                Button::make('reload')
            ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('id')->title("ID"),
            Column::make('nama'),
            Column::make('jumlah_pax'),
            Column::make('jenis_tamu'),
            Column::make('visit_count'),
            Column::make('status'),
            Column::computed('action'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'Guest_' . date('YmdHis');
    }
}
