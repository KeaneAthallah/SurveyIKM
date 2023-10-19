<?php

namespace App\Http\Controllers\admin;

use App\Models\User;
use App\Models\Comment;
use App\Models\Periode;
use App\Models\Surveys;
use App\Models\Questions;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Validation\Rules\Password;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        return view('admin.index', [
            'title' => 'Admin Dashboard',
            'profile' => auth()->user(),
            'laki' => Surveys::where('gender', 'laki-laki')->count(),
            'surveys' => Surveys::all(),
            'periode' => Periode::all(),
            'comments' => Comment::all()
        ]);
    }

    // Logout

    public function logout(Request $request): RedirectResponse
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }

    public function login()
    {
        return view('admin.pages.login', [
            'title' => "Login"
        ]);
    }

    public function updatepass(Request $request)
    {
        // Validation
        $request->validate([
            'oldpass' => 'required',
            'newpass' => ['required', 'confirmed', Password::defaults()],
        ]);
        // Match Old Pass
        if (!Hash::check($request->oldpass, Auth::user()->password)) {
            $notification = [
                'message' => 'Old Password Doesnt Match!',
                'alert-type' => 'error'
            ];

            return back()->with($notification);
        }
        // Update New Password
        User::whereId(auth()->user()->id)->update([
            'password' => Hash::make($request->newpass)
        ]);
        $notification = [
            'message' => 'Password Updated Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
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
    public function show(User $user)
    {
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(User $user)
    {
        return view('admin.pages.profile.index', [
            'title' => 'Profile',
            'profile' => auth()->user()
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, User $user)
    {
        $rules = [
            'name' => 'required',
            'image' => 'image|file|max:5120',
        ];
        if ($request->username != auth()->user()->username) {
            $rules['username'] = 'required|unique:users';
        }
        $validatedData = $request->validate($rules);
        if ($request->file('image')) {
            if ($request->oldImage) {
                Storage::delete($request->oldImage);
            }

            $validatedData['image'] = $request->file('image')->store('user-images');
        }
        User::where($request->id, $user->id)->update($validatedData);
        $notification = [
            'message' => 'Profile Updated Successfully!',
            'alert-type' => 'success'
        ];

        return back()->with($notification);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Request $request): RedirectResponse
    {
        $request->validateWithBag('userDeletion', [
            'password' => ['required', 'current_password'],
        ]);

        $user = $request->user();

        Auth::logout();

        $user->delete();

        $request->session()->invalidate();
        $request->session()->regenerateToken();

        return Redirect::to('/');
    }
}
