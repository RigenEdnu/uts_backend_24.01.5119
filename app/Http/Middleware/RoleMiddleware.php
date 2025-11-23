<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class RoleMiddleware
{
    /**
     * Contoh penggunaan di route: ->middleware('role:admin')
     */
    public function handle(Request $request, Closure $next, ...$roles)
    {
        $user = auth()->user();

        // Jika belum login -> abort 404
        if (!$user) {
            abort(403, 'Akses Ditolak'); // Access denied shown as 404
        }

        // Jika role tidak sesuai -> abort 404
        if (!in_array($user->role, $roles)) {
            abort(403, 'Akses Ditolak');
        }

        return $next($request);
    }
}
