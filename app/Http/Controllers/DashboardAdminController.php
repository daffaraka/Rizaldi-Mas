<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use PDF;

class DashboardAdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $data = DB::table('users')->where('roles', '=', 'USER')->get();

        return view('pages.admin.forms.user.user', [
            'data' => $data,
            'title'=>"User Control",
            'complete' => Pengaduan::where('status', 'Complete')->count(),
            'totaluser' => User::where('roles','=', 'USER')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count()
        ]);
    }
    public function search(Request $request)
    {
        $keyword = $request->input('search');
        $data = User::where('name', 'like', "%$keyword%")
            ->orWhere('nik', 'like', "%$keyword%")
            ->orWhere('id', 'like', "%$keyword%")
            ->orWhere('email', 'like', "%$keyword%")
            ->get();

        return view('pages.admin.forms.user.user', [
            'title'=>'User Control',
            'complete' => Pengaduan::where('status', 'Complete')->count(),
            'totaluser' => User::where('roles','=', 'USER')->count(),
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count()
            ])->with(compact('data'));
    }

    public function laporan()
    {

        $pengaduan = Pengaduan::orderBy('created_at', 'DESC')->get();
        $pengaduan_processing = Pengaduan::where('status', 'Processing')->get();

        return view('pages.admin.forms.laporans.show', [
            'title'=>'Laporan Control',
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count(),
            'complete' => Pengaduan::where('status', 'Complete')->count(),
            'pros'=> Pengaduan::where('status', 'Processing')->get()
            ])->with(compact('pengaduan'));

    }
    public function detail_laporan($id)
    {
        $item = Pengaduan::findOrFail($id);


        return view('pages.admin.forms.laporans.detail_laporan', [
            'item' => $item,
            'title' => 'Detail Laporan',
            'tanggapan' => Tanggapan::count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count(),
            'complete' => Pengaduan::where('status', 'Complete')->count(),
        ]);
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
    public function tanggapan() {
        $user = auth()->user();
        $id = $user->id;
        // dd($id);
        return view('pages.admin.forms.tanggapan.tanggapan',[
            'title'=> 'Tanggapan',
            'results_p' => Tanggapan::where('feedback_user', 'Puas')->orWhere('feedback_user', 'Tidak Puas')->orWhere('feedback_user', 'Sangat Puas')->get(),
            'sp' => Tanggapan::where('feedback_user', 'Sangat Puas')->count(),
            'p' => Tanggapan::where('feedback_user', 'Puas')->count(),
            'tp' => Tanggapan::where('feedback_user', 'Tidak Puas')->count(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request, Pengaduan $complaint)
    {
        // Validate input
        $inputan = $request->validate([
            'tanggapan' => 'required|string',
        ]);

        //Create response
        $tanggapan = Tanggapan::updateOrCreate([
            'pengaduan_id' => $request->pengaduan_id,
            'tanggapan' => $request->input('tanggapan'),
            'petugas_id' => Auth::id(),
            'user_id' => $request->user_id,
        ]);

        // Update complaint status
        DB::table('pengaduans')->where('id', $request->pengaduan_id)->update([
            'status'=> $request->status,
        ]);


        return redirect('admin/laporan')->with('success','Berhasil Menanggapi');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $detail = User::findOrFail($id);


        return view('pages.admin.forms.user.detail_user', [
            'item' => $detail,
            'totaluser' => User::where('roles','=', 'USER')->count(),
            'title' => 'Detail User'
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        DB::table('tanggapans')->where('pengaduan_id', $id)->delete();
        Pengaduan::findOrFail($id)->delete();
        return redirect('admin/laporan')->with('delete', 'Pengaduan telah di hapus');
    }
    public function delete($id)
    {
        DB::table('users')->where('id', $id)->delete();
        return redirect('admin/user')->with('delete', 'User telah di hapus');
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
