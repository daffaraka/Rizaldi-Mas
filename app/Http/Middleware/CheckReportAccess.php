<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class CheckReportAccess
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle($request, Closure $next)
    {
        // Mengambil parameter id dari route
        $reportId = $request->route('id');

        // Mengecek apakah user yang sedang login memiliki hak akses ke laporan tersebut
        if (auth()->user()->canAccessReport($reportId)) {
            // Jika memiliki hak akses, lanjutkan proses
            return $next($request);
        } else {
            // Jika tidak memiliki hak akses, redirect ke halaman yang sesuai atau tampilkan pesan error
            return redirect('user/error')->with('error', 'Anda tidak memiliki hak akses ke laporan tersebut');
        }
    }
}
