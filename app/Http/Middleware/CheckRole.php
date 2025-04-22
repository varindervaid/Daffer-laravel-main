<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;
use Illuminate\Support\Facades\Auth;
use App\Models\{permission,Role, permission_menu,user};

class CheckRole
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next, $menu_id, $value)
{
    if (Auth::check()) {
        $role_id = Auth::user()->role->id;
        if($role_id=='1'){
            return $next($request);
        }
        $permissionExists = Permission::where([
            'user_type_id' => $role_id,
            'module_id' => $menu_id,
            $value => 'Yes'
        ])->exists();
        if ($permissionExists) {
            return $next($request);
        }
    }
    abort(403, 'Access Denied');
    //return redirect('/'); // Redirect or handle unauthorized access
}
}
