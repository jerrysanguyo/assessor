<?php

namespace App\Http\Controllers;

use App\{
    Http\Requests\AssrPinRequest,
    DataTables\AssrPinDataTable,
    Models\AssrPin,
    Services\AssrPinService,
};

use Illuminate\Http\Request;

class AssrPinController extends Controller
{
    protected $assrPinService;

    public function __construct(AssrPinService $assrPinService)
    {
        $this->assrPinService = $assrPinService;
    }

    public function index(AssrPinDataTable $dataTable)
    {
        $title = 'PIN transanction';
        return $dataTable->render('administrationMenu.pin.index', compact('title'));
    }
    
    public function create()
    {
        $title = 'PIN creation';
        return view('administrationMenu.pin.create', compact('title'));
    }
    
    public function store(AssrPinRequest $request)
    {
        $validated = $request->validated();
        $this->assrPinService->pinStore($validated);

        return redirect()->route('pin.index')->with('success', 'Pin added successfully!');
    }
    
    public function edit(AssrPin $pin)
    {
        $title = 'PIN Update';
        return view('administrationMenu.pin.edit', compact('title', 'pin'));
    }
    
    public function update(AssrPinRequest $request, AssrPin $pin)
    {
        $validated = $request->validated();
        $this->assrPinService->pinUpdate($validated, $pin);

        return redirect()->route('pin.edit', $pin)->with('success', 'Pin updated successfully!');
    }
    
    public function destroy(string $pin)
    {
        try {
            $this->assrPinService->pinDestroy($pin);
            return response(['message' => 'success'], 200);
        } catch (\Exception $e) {
            logger($e);
            return response(['message' => 'Something Went Wrong Please Try Again!'], 500);
        }
    }
}
