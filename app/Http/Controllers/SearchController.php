<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Pengaduan;
use Carbon\Carbon;
class SearchController extends Controller
{
    public function search(Request $request)
    {



    $id_pengaduan = $request->input('id');
    $pengaduans = Pengaduan::where('id', $id_pengaduan)->first();
    $results = Pengaduan::where('id', $id_pengaduan)->get();

    return view('pages.user.search.index',['title'=>'Results'],['results'=>$results],)->with(compact('pengaduans'));
    }
}
