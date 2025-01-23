<?php

namespace App\Services;

use Illuminate\Support\Facades\Hash;
use App\Repositories\ProfileRepository;
use Illuminate\Validation\ValidationException;

class ProfileService
{
    protected $profileRepository;

    public function __construct(ProfileRepository $profileRepository)
    {
        $this->profileRepository = $profileRepository;
    }

    public function updateProfile($user, array $data)
    {
        if (isset($data['img_url'])) {
            $data['img_url'] = $this->uploadImage($data['img_url']);
        }

        $this->profileRepository->update($user, $data);
    }

    public function changePassword($user, array $data)
    {
        if (!Hash::check($data['password'], $user->password)) {
            throw ValidationException::withMessages([
                'password' => 'The current password is incorrect.',
            ]);
        }
        $this->profileRepository->updatePassword($user, $data['new_pass']);
    }

    protected function uploadImage($image)
    {
        return $image->store('profile_images', 'public');
    }
}
