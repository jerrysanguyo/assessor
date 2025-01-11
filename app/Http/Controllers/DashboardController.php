<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\{
    Http\Requests\StoreFeedRequest,
    Services\DashboardService,
};

class DashboardController extends Controller
{
    protected $dashboardService;

    public function __construct(DashboardService $dashboardService)
    {
        $this->dashboardService = $dashboardService;
    }

    public function dashboard()
    {
        $title = 'Dashboard';
        return view('dashboard', compact('title'));
    }

    public function feedPost(StoreFeedRequest $request)
    {
        $validated = $request->validated();

        $this->dashboardService()->feedPost($validated);

        return redirect()->route('dashboard')->with('success', 'Feed added successfully!');
    }

    public function search()
    {
        $columns = ['TDN No', 'PIN', 'Name of Owner', 'Location of Property', 'Status'];
        $options = ['TDN No', 'PIN', 'Name of Owner', 'Location of Property', 'Status'];
        $title = 'Search';

        $data = [
            ['TDN No' => '12345', 'PIN' => '67890', 'Name of Owner' => 'John Doe', 'Location of Property' => 'Location 1', 'Status' => 'Active'],
            ['TDN No' => '67890', 'PIN' => '54321', 'Name of Owner' => 'Jane Doe', 'Location of Property' => 'Location 2', 'Status' => 'Inactive'],
            ['TDN No' => '11223', 'PIN' => '44556', 'Name of Owner' => 'John Smith', 'Location of Property' => 'Location 3', 'Status' => 'Pending'],
        ];

        return view('search', compact('columns', 'data', 'options', 'title'));
    }

    public function pin()
    {
        $columns = ['No.', 'PIN', 'Location', 'Lot No.', 'Blk No.', 'Survey No.', 'Kind'];
        $options = ['No.', 'PIN', 'Location', 'Lot No.', 'Blk No.', 'Survey No.', 'Kind'];
        $title = 'PIN';

        $data = [
            ['No.' => '1', 'PIN' => '12345', 'Location' => 'Location 1', 'Lot No.' => '10', 'Blk No.' => '5', 'Survey No.' => 'SURV123', 'Kind' => 'Residential'],
            ['No.' => '2', 'PIN' => '67890', 'Location' => 'Location 2', 'Lot No.' => '20', 'Blk No.' => '6', 'Survey No.' => 'SURV456', 'Kind' => 'Commercial'],
            ['No.' => '3', 'PIN' => '11223', 'Location' => 'Location 3', 'Lot No.' => '30', 'Blk No.' => '7', 'Survey No.' => 'SURV789', 'Kind' => 'Agricultural'],
            ['No.' => '4', 'PIN' => '99887', 'Location' => 'Location 4', 'Lot No.' => '40', 'Blk No.' => '8', 'Survey No.' => 'SURV321', 'Kind' => 'Industrial'],
        ];

        return view('search', compact('columns', 'data', 'options', 'title'));
    }

    public function transaction()
    {
        $columns = ['Tracking No.', 'Transaction', 'Process by'];
        $options = ['Tracking No.', 'Transaction', 'Process by'];
        $title = 'Transaction';

        $data = [
            ['Tracking No.' => 'TRK001', 'Transaction' => 'Payment', 'Process by' => 'John Doe'],
            ['Tracking No.' => 'TRK002', 'Transaction' => 'Verification', 'Process by' => 'Jane Smith'],
            ['Tracking No.' => 'TRK003', 'Transaction' => 'Submission', 'Process by' => 'John Smith'],
            ['Tracking No.' => 'TRK004', 'Transaction' => 'Approval', 'Process by' => 'Sarah Doe'],
            ['Tracking No.' => 'TRK005', 'Transaction' => 'Disbursement', 'Process by' => 'Michael Johnson'],
        ];

        return view('search', compact('columns', 'data', 'options', 'title'));
    }

    public function report()
    {
        $title = 'Report';

        return view('report', compact('title'));
    }

    public function printFieldSheet()
    {
        $columns = ['TDN No','Name of Owner', 'Location of Property', 'Status'];
        $options = ['Tracking No.', 'TDN No', 'Name of Owner'];
        $title = 'Field sheet printing';

        $data = [
            ['TDN No' => '12345', 'Name of Owner' => 'John Doe', 'Location of Property' => 'Location 1', 'Status' => 'Active'],
            ['TDN No' => '67890', 'Name of Owner' => 'Jane Doe', 'Location of Property' => 'Location 2', 'Status' => 'Inactive'],
            ['TDN No' => '11223', 'Name of Owner' => 'John Smith', 'Location of Property' => 'Location 3', 'Status' => 'Pending'],
        ];

        return view('search', compact('columns', 'data', 'options', 'title'));
    }

    public function printTaxDec()
    {
        $columns = ['TDN No','Name of Owner', 'Location of Property', 'Status'];
        $options = ['Tracking No.', 'TDN No', 'Name of Owner'];
        $title = 'Tax declaration printing';

        $data = [
            ['TDN No' => '12345', 'Name of Owner' => 'John Doe', 'Location of Property' => 'Location 1', 'Status' => 'Active'],
            ['TDN No' => '67890', 'Name of Owner' => 'Jane Doe', 'Location of Property' => 'Location 2', 'Status' => 'Inactive'],
            ['TDN No' => '11223', 'Name of Owner' => 'John Smith', 'Location of Property' => 'Location 3', 'Status' => 'Pending'],
        ];

        return view('search', compact('columns', 'data', 'options', 'title'));
    }

    public function validation()
    {
        $columns = ['TDN No','Name of Owner', 'Location of Property', 'Status'];
        $options = ['Tracking No.', 'TDN No', 'Name of Owner'];
        $title = 'Tax declaration Validation';

        $data = [
            ['TDN No' => '12345', 'Name of Owner' => 'John Doe', 'Location of Property' => 'Location 1', 'Status' => 'Active'],
            ['TDN No' => '67890', 'Name of Owner' => 'Jane Doe', 'Location of Property' => 'Location 2', 'Status' => 'Inactive'],
            ['TDN No' => '11223', 'Name of Owner' => 'John Smith', 'Location of Property' => 'Location 3', 'Status' => 'Pending'],
        ];

        return view('search', compact('columns', 'data', 'options', 'title'));
    }

    public function account()
    {
        $columns = ['Name','Account level'];
        $title = 'Account manager';

        $data = [
            ['Name' => 'Sample 1', 'Account level' => 'Programmer'],
            ['Name' => 'Sample 2', 'Account level' => 'Encoder'],
            ['Name' => 'Sample 3', 'Account level' => 'Support'],
        ];

        return view('component.cms.account', compact('title', 'columns', 'data'));
    }

    // public function barangay()
    // {
    //     $columns = ['Barangay', 'District', 'Code', 'Remarks'];
    //     $title = 'Barangay setup';
    //     $options = ['Barangay', 'District', 'Code'];

    //     $data = [
    //         ['Barangay' => 'Bagong Tanyag',             'District' => '02', 'Code' => '002','Remarks' => 'Old'],
    //         ['Barangay' => 'Bagong Tanyag (proper)',    'District' => '02', 'Code' => '020', 'Remarks' => 'Old'],
    //         ['Barangay' => 'Bagumbayan',                'District' => '01', 'Code' => '001', 'Remarks' => 'Old'],
    //     ];

    //     return view('search', compact( 'columns', 'title', 'data', 'options'));
    // }

    public function transactionSetup()
    {
        $columns = ['Transaction'];
        $title = 'Transaction setup';
        $options = ['Transaction'];

        $data = [
            ['Transaction' => 'CHANGE OF BARANGAY AND CHANGE OF STATUS'],
            ['Transaction' => 'Consolidation'],
            ['Transaction' => 'House Re-assessment/Renovation'],
        ];

        return view('search', compact( 'columns', 'title', 'data', 'options'));
    }
}
