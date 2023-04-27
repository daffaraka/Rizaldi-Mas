<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class SearchAdminController extends Controller
{

    public function index(){
        $results = Pengaduan::all();
        return view('pages.admin.search' , ['title'=>'Search'], ['results'=>$results]);
    }

    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $results = Pengaduan::where('description', 'like', "%$keyword%")
            ->orWhere('type', 'like', "%$keyword%")
            ->orWhere('name', 'like', "%$keyword%")
            ->orWhere('status', 'like', "%$keyword%")
            ->orWhere('id', 'like', "%$keyword%")
            ->get();

        return view('pages.admin.search', ['title'=>'Search'])->with(compact('results'));
    }
}
