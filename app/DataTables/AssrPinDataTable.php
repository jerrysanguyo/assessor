<?php

namespace App\DataTables;

use App\Models\AssrPin;
use Illuminate\Database\Eloquent\Builder as QueryBuilder;
use Yajra\DataTables\EloquentDataTable;
use Yajra\DataTables\Html\Builder as HtmlBuilder;
use Yajra\DataTables\Html\Button;
use Yajra\DataTables\Html\Column;
use Yajra\DataTables\Html\Editor\Editor;
use Yajra\DataTables\Html\Editor\Fields;
use Yajra\DataTables\Services\DataTable;
use Illuminate\Support\Facades\Request;

class AssrPinDataTable extends DataTable
{
    public function dataTable(QueryBuilder $query): EloquentDataTable
    {
        return datatables()
            ->eloquent($query)
            ->filter(function ($query) {
                if (Request::has('search')) {
                    $searchTerm = Request::get('search')['value'];

                    $query->where(function ($subQuery) use ($searchTerm) {
                        $subQuery->where('PIN', 'like', "%{$searchTerm}%")
                            ->orWhere('Location', 'like', "%{$searchTerm}%")
                            ->orWhere('BlkNo', 'like', "%{$searchTerm}%")
                            ->orWhere('SurveyNo', 'like', "%{$searchTerm}%")
                            ->orWhere('Kind', 'like', "%{$searchTerm}%");
                    });
                }

                if (Request::has('PIN')) {
                    $pin = Request::get('PIN');
                    $query->where('PIN', $pin);
                }
            })
            ->addColumn('ID', function ($row) {
                return $row->id;
            })
            ->addColumn('PIN', function ($row) {
                return $row->PIN;
            })
            ->addColumn('Location', function ($row) {
                return $row->Location;
            })
            ->addColumn('BlkNo', function ($row) {
                return $row->BlkNo;
            })
            ->addColumn('SurveyNo', function ($row) {
                return $row->SurveyNo;
            })
            ->addColumn('Kind', function ($row) {
                return $row->Kind;
            })
            ->addColumn('action', function ($row) {
                $editUrl = route('pin.edit', $row->id);
                $deleteUrl = route('pin.destroy', $row->id);
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
    public function query(AssrPin $model): QueryBuilder
    {
        return $model->newQuery();
    }

    /**
     * Optional method if you want to use the html builder.
     */
    public function html(): HtmlBuilder
    {
        return $this->builder()
                    ->setTableId('assrpin-table')
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
            Column::make('id')->title('ID')->searchable(true),
            Column::make('PIN')->title('PIN')->searchable(true),
            Column::make('Location')->title('Location')->searchable(true),
            Column::make('LotNo')->title('LotNo')->searchable(true),
            Column::make('BlkNo')->title('BlkNo')->searchable(true),
            Column::make('SurveyNo')->title('SurveyNo')->searchable(true),
            Column::make('Kind')->title('Kind')->searchable(true),
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
        return 'AssrPin_' . date('YmdHis');
    }
}
