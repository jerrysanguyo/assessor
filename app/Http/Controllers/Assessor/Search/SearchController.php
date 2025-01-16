<?php

namespace App\Http\Controllers\Assessor\Search;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $columns = ['TDN No', 'PIN', 'Name of Owner', 'Location of Property', 'Status'];
        $options = ['TDN No', 'PIN', 'Name of Owner', 'Location of Property', 'Status'];
        $title = 'Search';

        $data = [
            ['TDN No' => '12345', 'PIN' => '67890', 'Name of Owner' => 'John Doe', 'Location of Property' => 'Location 1', 'Status' => 'Active'],
            ['TDN No' => '67890', 'PIN' => '54321', 'Name of Owner' => 'Jane Doe', 'Location of Property' => 'Location 2', 'Status' => 'Inactive'],
            ['TDN No' => '11223', 'PIN' => '44556', 'Name of Owner' => 'John Smith', 'Location of Property' => 'Location 3', 'Status' => 'Pending'],
        ];
        return view('assessor.search.index', compact('columns', 'data', 'options', 'title'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
