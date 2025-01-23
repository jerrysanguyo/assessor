<?php

namespace App\Repositories;

use App\Models\AssrAccount;

class ProfileRepository
{
    public function update(AssrAccount $user, array $data)
    {
        $data['TheBible'] = $data['TheBible'] ?? 0;
        $data['HideBday'] = $data['HideBday'] ?? 0;
        $data['SilentMode'] = $data['SilentMode'] ?? 0;
        $user->update($data);
    }

    public function updatePassword(AssrAccount $user, string $newPassword)
    {
        $user->update(['password' => bcrypt($newPassword)]);
    }
}
