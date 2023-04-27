<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\File;

class DashboardUserController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $user = Auth::id();
        $tangap = Tanggapan::where('user_id', Auth::user()->id)->firstOrNew();
        $pengaduan = Pengaduan::where('user_id', Auth::id())->get();
        return view(
            'pages.user.dashboard.index',
            [
                'title' => 'Dashboard',
                'total' => Pengaduan::where('user_id', Auth::id())->get()->count(),
                'pending' => Pengaduan::where('user_id', Auth::id())->where('status', 'Pending')->count(),
                'process' => Pengaduan::where('user_id', Auth::id())->where('status', 'Processing')->count(),
                'completed' => Pengaduan::where('user_id', Auth::id())->where('status', 'Complete')->count(),
                'tanggapan' => Tanggapan::where('id')->count(),
                'tangap' => $tangap,
            ],
            ['user' => $user]
        )->with(compact('pengaduan'));
    }
    public function profile()
    {
        $type = Pengaduan::where('id', Auth::id())->get();
        $user = User::where('id', Auth::id())->get();
        return view('pages.user.dashboard.profile', [
            'title' => 'Profile',
            'active' => 'Profile',
            'user' => $user,
            'type' => $type
        ]);
    }
    public function leaderboard()
    {
        $levels = User::where('roles', 'USER')->orderBy('level', 'desc')->limit(10)->get();
        return view('pages.user.leaderboard', ['title' => 'Leaderboard User Level'], compact('levels'));
    }
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        DB::table('tanggapans')->where('pengaduan_id', $request->pengaduan_id)->where('id', $request->id)->update([
            'feedback_user' => $request->feedback,
        ]);
        return back()->with('success', 'Feedbacks berhasil dikirim');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show(Request $request, $id)
    {

        $detail = Pengaduan::with([
            'details', 'user'
        ])->findOrFail($id);
        $id_tanggapan = Tanggapan::get();
        $id_t = $id_tanggapan->pluck('id', $id);
        // ->orWhere('id', $id_t)
        // dd($id_t);
        $tangap = Tanggapan::where('pengaduan_id', $id)->where('user_id', Auth::user()->id)->orderBy('id', 'desc')->firstOrNew();
        return view('pages.user.dashboard.detail', [
            'item' => $detail,
            'tangap' => $tangap,
            'title' => 'Detail Laporan'
        ]);
    }
    public function error()
    {
        return view('layouts.error', ['title' => 'Error Found']);
    }


    public function edit($id)
    {
        $data['laporan'] = Pengaduan::find($id);
        $data['title'] = 'Edit Laporan';
        return view('pages.user.laporans.edit', $data);
    }


    public function update_laporan($id, Request $request)
    {
        $pengaduan = Pengaduan::find($id);

        $resorce = $request->file('gambar');

        if ($request->gambar == null) {
            $img = $pengaduan->image;
        } else {
            $img   = $resorce->getClientOriginalName();
        }


        if ($request->has('gambar') && $request->gambar != null) {
            if (File::exists('assets/images/upload/' . $pengaduan->image)) {
                File::delete('assets/images/upload/' . $pengaduan->image);
                $resorce->move(\base_path() . "/public/assets/images/upload", $img);
            } else {
                $resorce->move(\base_path() . "/public/assets/images/upload", $img);
            }
        }

        $pengaduanAttr = [];
        $pengaduanAttr['type'] = $request->type;
        $pengaduanAttr['lokasi'] = $request->lokasi;
        $pengaduanAttr['description'] = $request->description;
        $pengaduanAttr['tanggal_kejadian'] = $request->tanggal;
        $pengaduanAttr['image'] = $img;
        $pengaduanAttr['status'] = 'Pending';
        $pengaduanAttr['secret'] = $request->secret;

        // dd($pengaduanAttr);
        $pengaduan->update($pengaduanAttr);


        return redirect()->route('dashboard');
    }


    public function update(Request $request)
    {

        if ($request->password) {
            Hash::make($request->password);
        }
        User::findOrFail(Auth::id())->update(['email' => $request['email'], 'name' => $request['name'], 'password' =>  Hash::make($request['password'])]);
        // Tampilkan pesan sukses dan kembali ke halaman sebelumnya
        return back()->with('success', 'Profile berhasil diupdate');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
