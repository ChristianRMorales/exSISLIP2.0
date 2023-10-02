<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\ValidationException;

class UserController extends Controller
{
    /**
     * Register a new user.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function register(Request $request)
    {
        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users',
            'password' => 'required|min:6',
        ]);

        $user = User::create([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
            'password_hash' => Hash::make($validatedData['password']),
        ]);

        // Add any additional logic or actions after user registration

        return response()->json(['message' => 'User registered successfully']);
    }

    /**
     * User login.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function login(Request $request)
    {
        $validatedData = $request->validate([
            'username' => 'required',
            'password' => 'required',
        ]);

        $user = User::where('username', $validatedData['username'])->first();

        if (!$user || !Hash::check($validatedData['password'], $user->password_hash)) {
            throw ValidationException::withMessages([
                'message' => 'Invalid username or password',
            ])->status(401);
        }

        $token = $user->createToken('auth_token')->plainTextToken;

        // Add any additional logic or actions after user login

        return response()->json(['message' => 'User logged in successfully', 'token' => $token]);
    }

    /**
     * Log out the authenticated user.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function logout(Request $request)
    {
        $request->user()->currentAccessToken()->delete();

        // Add any additional logic or actions after user logout

        return response()->json(['message' => 'User logged out successfully']);
    }

    /**
     * Update the user's profile.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function updateProfile(Request $request)
    {
        $user = $request->user();

        $validatedData = $request->validate([
            'name' => 'required',
            'username' => 'required|unique:users,username,' . $user->id . ',id',
        ]);

        $user->update([
            'name' => $validatedData['name'],
            'username' => $validatedData['username'],
        ]);

        // Add any additional logic or actions after updating the user's profile

        return response()->json(['message' => 'User profile updated successfully']);
    }

    /**
     * Change the user's password.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     * @throws ValidationException
     */
    public function changePassword(Request $request)
    {
        $user = $request->user();

        $validatedData = $request->validate([
            'current_password' => 'required',
            'new_password' => 'required|min:6',
        ]);

        if (!Hash::check($validatedData['current_password'], $user->password_hash)) {
            throw ValidationException::withMessages([
                'current_password' => 'Current password is incorrect',
            ])->status(422);
        }

        $user->update([
            'password_hash' => Hash::make($validatedData['new_password']),
        ]);

        // Add any additional logic or actions after changing the user's password

        return response()->json(['message' => 'User password changed successfully']);
    }

    /**
     * Delete the user's account.
     *
     * @param  Request  $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function deleteAccount(Request $request)
    {
        $user = $request->user();

        // Add any additional logic or actions before deleting the user's account

        $user->delete();

        // Add any additional logic or actions after deleting the user's account

        return response()->json(['message' => 'User account deleted successfully']);
    }
}