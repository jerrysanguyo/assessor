<?php

namespace App\Services;

use App\Models\AssrPin;

class AssrPinService
{
    public function pinStore(array $data): AssrPin
    {
        return AssrPin::create([
            'PIN'       => $data['PIN'],
            'Location'  => $data['Location'],
            'LotNo'     => $data['LotNo'],
            'BlkNo'     => $data['BlkNo'],
            'SurveyNo'  => $data['SurveyNo'],
            'Kind'      => $data['Kind'],
        ]);
    }
    
    public function pinUpdate(array $data, $pin): AssrPin
    {
        $record = $this->pinIdFindOrFail($pin);
        $record->update([
            'PIN'       => $data['PIN'],
            'Location'  => $data['Location'],
            'LotNo'     => $data['LotNo'],
            'BlkNo'     => $data['BlkNo'],
            'SurveyNo'  => $data['SurveyNo'],
            'Kind'      => $data['Kind'],
        ]);

        return $record;
    }
    
    public function pinDestroy($pin): bool
    {
        $record = $this->pinIdFindOrFail($pin);
    
        if ($record) {
            return (bool) $record->delete();
        }
    
        return false;
    }

    public function pinIdFindOrFail($pin): AssrPin
    {
        if ($pin instanceof AssrPin) {
            return $pin;
        }

        return AssrPin::findOrFail($pin); 
    }
}
