<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;

class ProfileController extends Controller
{
    // Display the profile page
    public function show()
    {
        $user = Auth::user();
        return view('profile', compact('user'));
    }

    // Update the profile
    public function update(Request $request)
    {
        $user = Auth::user();
        $validatedData = $request->validate([
            'full_name' => 'required|string|max:255',
            'phone_number' => 'nullable|string|max:20',
            'address' => 'nullable|string|max:255',
            'city' => 'nullable|string|max:100',
            'country' => 'nullable|string|max:100',
            'bio' => 'nullable|string|max:500',
            'profile_image' => 'nullable|image|max:2048', // Ensure the file is an image
        ]);

        // Handle profile image upload
        if ($request->hasFile('profile_image')) {
            $imagePath = $request->file('profile_image')->store('uploads', 'public');
            $validatedData['profile_image'] = $imagePath;
        }

        try {
            // Update user details
            $user->update($validatedData);
        } catch (\Exception $e) {
            return redirect()->back()->withErrors(['error' => 'Could not update profile.']);
        }
        

        return redirect()->route('profile.show')->with('success', 'Profile updated successfully!');
    }
}
