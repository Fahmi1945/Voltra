<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

/**
 * Middleware proteksi sederhana untuk admin.
 *
 * Gunakan query parameter ?key=VOLTRA-ADMIN-2026 untuk akses.
 * Key disimpan di session setelah login pertama.
 *
 * ⚠ Ini proteksi sementara — ganti dengan Laravel Auth/Breeze untuk produksi.
 */
class SimpleAdminAuth
{
    public function handle(Request $request, Closure $next): Response
    {
        $adminKey = config('app.admin_key', 'VOLTRA-ADMIN-2026');

        // Cek apakah sudah login via session
        if ($request->session()->get('admin_authenticated') === true) {
            return $next($request);
        }

        // Cek query parameter ?key=...
        if ($request->query('key') === $adminKey) {
            $request->session()->put('admin_authenticated', true);
            return $next($request);
        }

        // Tolak akses
        abort(403, 'Akses ditolak. Gunakan key admin yang benar.');
    }
}
