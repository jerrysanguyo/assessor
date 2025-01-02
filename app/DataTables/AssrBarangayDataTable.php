<?php

namespace App\DataTables;

use App\Models\AssrBarangay;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Request;

class AssrBarangayDataTable extends DataTable
{
    /**
     * Build the DataTable class.
     *
     * @param QueryBuilder $query Results from query() method.
     */
    public function dataTable($query)
    {
        return datatables()
            ->eloquent($query)
            ->filter(function ($query) {
                if (Request::has('search')) {
                    $searchTerm = Request::get('search')['value'];

                    $query->where(function ($subQuery) use ($searchTerm) {
                        $subQuery->where('name', 'like', "%{$searchTerm}%")
                            ->orWhere('district', 'like', "%{$searchTerm}%")
                            ->orWhere('code', 'like', "%{$searchTerm}%")
                            ->orWhere('remarks', 'like', "%{$searchTerm}%");
                    });
                }

                if (Request::has('district')) {
                    $district = Request::get('district');
                    $query->where('district', $district);
                }
            })
            ->addColumn('name', function ($row) {
                return $row->name;
            })
            ->addColumn('district', function ($row) {
                return $row->district;
            })
            ->addColumn('code', function ($row) {
                return $row->code;
            })
            ->addColumn('remarks', function ($row) {
                return $row->remarks;
            })
            ->addColumn('action', function ($row) {
                $editUrl = route('barangay.edit', $row->id);
                $deleteUrl = route('barangay.destroy', $row->id);
                return '
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton' . $row->id . '" data-bs-toggle="dropdown" aria-expanded="false">
                            <i class="fa fa-cog"></i>
                        </button>
                        <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton' . $row->id . '">
                         <li>
                                <a class="dropdown-item" href="' . $editUrl . '">
                                    Show
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item" href="' . $editUrl . '">
                                    Edit
                                </a>
                            </li>
                            <li>
                                <a class="dropdown-item text-danger delete-item" href="' . $deleteUrl . '">
                                    Delete
                                </a>
                            </li>
                        </ul>
                    </div>
                ';
            })

            ->rawColumns(['action']);
    }
    /**
     * Get the query source of dataTable.
     */
    public function query(AssrBarangay $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('assrbarangay-table')
                    ->columns($this->getColumns())
                    ->minifiedAjax()
                    ->orderBy(1)
                    ->selectStyleSingle()
                    ->responsive(false);
                    // ->scrollX(true);
                    // ->buttons([
                    //     Button::make('excel'),
                    //     Button::make('csv'),
                    //     Button::make('pdf'),
                    //     Button::make('print'),
                    //     Button::make('reset'),
                    //     Button::make('reload')
                    // ]);
    }

    /**
     * Get the dataTable columns definition.
     */
    public function getColumns(): array
    {
        return [
            Column::make('name')->title('Name')->searchable(true),
            Column::make('district')->title('District')->searchable(true),
            Column::make('code')->title('Code')->searchable(true),
            Column::make(data: 'remarks')->title('Remarks')->searchable(true),
            Column::computed('action')
                ->exportable(false)
                ->printable(false)
                ->width(120)
                ->addClass('text-center'),
        ];
    }

    /**
     * Get the filename for export.
     */
    protected function filename(): string
    {
        return 'AssrBarangay_' . date('YmdHis');
    }
}
