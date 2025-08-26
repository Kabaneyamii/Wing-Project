<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordController extends Controller
{
    // عرض صفحة تغيير كلمة السر
    public function index()
    {
        return view('settings.password');
    }

    // تحديث كلمة السر
    public function update(Request $request)
    {
        // التحقق من البيانات المدخلة
        $request->validate([
            'currentPassword' => 'required|min:8',
            'newPassword' => 'required|min:8|confirmed',
        ]);

        // التحقق من كلمة السر الحالية
        if (!Hash::check($request->currentPassword, Auth::user()->password)) {
            return back()->withErrors(['currentPassword' => 'Current password is incorrect.']);
        }

        // تحديث كلمة السر الجديدة
        Auth::user()->update([
            'password' => Hash::make($request->newPassword),
        ]);

        return redirect()->route('settings.password')->with('success', 'Password updated successfully!');
    }
}
