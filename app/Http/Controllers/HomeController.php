<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Session;
use RealRashid\SweetAlert\Facades\Alert;
use File;
class HomeController extends Controller
{
    public function index()
    {
        $email = Auth::user()->email;
        if (!Auth::user()->email_verified_at) {
            session()->flash('alert', 'email '.$email.'  belum di-verification');
        }
        $user = Auth::user()->nik;

        return view('pages.user.index', ['title'=>'Home','liat' => $user]);
    }


}
