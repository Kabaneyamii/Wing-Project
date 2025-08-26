<?php
namespace App\Http\Controllers;
use App\Models\User;
use Illuminate\Http\Request;
class ProfileController extends Controller
{
    public function show($username)
    {
        $user = User::where('username', $username)->first();
        return view('profile.show', compact('user'));
    }
    public function replies($username)
    {
        $user = User::where('username', $username)->first();
        return view('profile.replies', compact('user'));
    }
    public function likes($username)
    {
        $user = User::where('username', $username)->first();
        return view('profile.likes', compact('user'));
    }
}