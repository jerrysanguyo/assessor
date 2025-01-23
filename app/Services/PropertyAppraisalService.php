<?php

namespace App\Services;

use App\Models\AssrBuilding;
use App\Models\AssrInformation;
use Illuminate\Http\Request;

class PropertyAppraisalService
{
    public function store(array $validatedData)
    {
        AssrInformation::where('TDNo', $validatedData['TDNo'])->firstOrFail();
        return AssrBuilding::create($validatedData);
    }

    public function edit(string $id)
    {
        return AssrBuilding::findOrFail($id);
    }

    public function update(array $validatedData, string $id)
    {
        $appraisal = AssrBuilding::findOrFail($id);
        $validatedData['Exempt'] = $validatedData['option'] === 'Exempt' ? 1 : 0;
        $validatedData['Additional'] = $validatedData['option'] === 'Additional' ? 1 : 0;
        unset($validatedData['option']);
        $appraisal->update($validatedData);
        return $appraisal;
    }

    public function destroy(string $id)
    {
        $appraisal = AssrBuilding::findOrFail($id);
        $appraisal->delete();
        return $appraisal;
    }
}
