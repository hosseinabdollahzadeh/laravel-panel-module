<?php

namespace Modules\PanelCore\Exports;

use Illuminate\Contracts\View\View;
use Maatwebsite\Excel\Concerns\FromView;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;

class DataGridExport implements FromView, ShouldAutoSize
{
    /**
     * DataGrid instance
     *
     * @var mixed
     */
    protected $gridData = [];

    /**
     * Create a new instance.
     *
     * @param mixed DataGrid
     * @return void
     */
    public function __construct($gridData)
    {
        $this->gridData = $gridData;
    }

    /**
     * function to create a blade view for export.
     *
     */
    public function view(): View
    {

        return view('panel_ui::dynamic.export', [
            'columns' => $this->gridData['columns'],
            'records' => $this->gridData['records'],
        ]);
    }
}
