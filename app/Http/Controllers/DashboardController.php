<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\Pengaduan;
use App\Models\Tanggapan;
use App\Models\User;
use PDF;

class DashboardController extends Controller
{
    public function index()
    {
        return view('pages.admin.dashboard', [
            'title' => 'Dashboard',
            'pengaduan' => Pengaduan::count(),
            'user' => User::where('roles', '=', 'USER')->count(),
            'petugas' => User::where('roles', '=', 'PETUGAS')->count(),
            'admin' => User::where('roles', '=', 'ADMIN')->count(),
            'tanggapan' => Tanggapan::where('feedback_user')->count(),
            'labels' => ["Pengaduan", "Aspirasi", "Lainnya"],
            'type_p' => Pengaduan::where('type', 'Pengaduan')->count(),
            'type_a' => Pengaduan::where('type', 'Aspirasi')->count(),
            'type_l' => Pengaduan::where('type', 'Lainnya')->count(),
            'pending' => Pengaduan::where('status', 'Pending')->count(),
            'process' => Pengaduan::where('status', 'Processing')->count(),
            'complete' => Pengaduan::where('status', 'Complete')->count(),
        ]);
    }
    public function chartjs()
    {
        $viewer = View::select(DB::raw("SUM(numberofview) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $viewer = array_column($viewer, 'count');

        $click = Click::select(DB::raw("SUM(numberofclick) as count"))
            ->orderBy("created_at")
            ->groupBy(DB::raw("year(created_at)"))
            ->get()->toArray();
        $click = array_column($click, 'count');

        return view('chartjs')
            ->with('viewer', json_encode($viewer, JSON_NUMERIC_CHECK))
            ->with('click', json_encode($click, JSON_NUMERIC_CHECK));
    }
    public function logout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        return redirect('/');
    }
}
