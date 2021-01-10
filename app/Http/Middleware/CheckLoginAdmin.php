<?php
/**
 * Created by PhpStorm .
 * User: trungphuna .
 * Date: 1/10/21 .
 * Time: 4:40 PM .
 * To change this template user File |  Setting | Settings | File template
 */

namespace App\Http\Middleware;


class CheckLoginAdmin
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, \Closure $next)
    {
        if (get_data_user('admins'))  return $next($request);

        return redirect()->route('get.login');
    }
}
