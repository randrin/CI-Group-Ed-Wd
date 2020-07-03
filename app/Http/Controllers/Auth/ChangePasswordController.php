<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Http\Requests\PasswordRequest;
use App\Model\user;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class ChangePasswordController extends Controller
{

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function formChangePassword() {
        $user = auth()->user();
        return view('site.partials.changePassword', compact('user'));
    }

    public function changePassword(PasswordRequest $request) {
        $user = User::find(Auth::id());

        if (!Hash::check($request->old_password, $user->password)) {
            return response()->json(['errors' => ['old_password'=> ['Current password does not match']]], 422);
        }

        $user->password = Hash::make($request->password);
        $user->save();
        Auth::logout();
        return redirect()->route('login');
    }
}
