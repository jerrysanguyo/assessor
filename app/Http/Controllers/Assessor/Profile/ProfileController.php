<?php

namespace App\Http\Controllers\Assessor\Profile;

use Illuminate\Http\Request;
use App\Services\ProfileService;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use App\Http\Requests\Assessor\UpdateProfileRequest;
use App\Http\Requests\Assessor\ChangePasswordRequest;
use Illuminate\Validation\ValidationException;

class ProfileController extends Controller
{
    protected $profileService;

    public function __construct(ProfileService $profileService)
    {
        $this->profileService = $profileService;
    }

    public function index()
    {
        return view('assessor.profile.index');
    }

    public function update(UpdateProfileRequest $request)
    {
        $validatedData = $request->validated();
        $this->profileService->updateProfile(auth()->user(), $validatedData);
        return redirect()->route('profile.index')->with('success', 'Profile updated successfully.');
    }

    public function changePassword(ChangePasswordRequest $request)
    {
        $validatedData = $request->validated();
        $this->profileService->changePassword(auth()->user(), $validatedData);
        return redirect()->route('profile.index')->with('success', 'Password changed successfully.');
    }
}
