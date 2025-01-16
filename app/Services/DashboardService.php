<?php

namespace App\Services;

use App\Model\AssrFeed;

class dashboardService
{
    public function feedStore(array $data): AssrFeed
    {
        $ipAddress = request()->ip();
        $pcName = gethostbyaddr($ipAddress);
        $macAddress = $this->getMacAddress($ipAddress);

        AssrFeed::create([
            'Date' => now(),
            'Username' => auth()->user()->Username,
            'Event' => $data['Event'],
            'PCName' => $pcName,
            'PCUsername' => get_current_user(), 
            'PCAddress' => $macAddress,
            'PCIPAddress' => $ipAddress,
            'DeptCode' => auth()->user()->DeptCode ?? 'Unknown',
            'Branch' => auth()->user()->Branch ?? 'Unknown',
        ]);
    }

    private function getMacAddress(string $ipAddress): ?string
    {
        $macAddress = null;
        
        ob_start();
        system('arp -a');
        $arpOutput = ob_get_contents();
        ob_end_clean();
        
        $lines = explode("\n", $arpOutput);
        foreach ($lines as $line) {
            if (strpos($line, $ipAddress) !== false) {
                $parts = preg_split('/\s+/', $line);
                $macAddress = $parts[1] ?? null;
                break;
            }
        }

        return $macAddress;
    }
}