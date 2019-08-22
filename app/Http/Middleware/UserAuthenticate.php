<?php

namespace App\Http\Middleware;

use Closure;
use App;
use App\User;
use Auth;

class UserAuthenticate
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $email = $request->email;
        $password = $request->password;

        if(Auth::attempt([
            'email'=>$email,
            'password'=>$password
        ])){
            $request->session()->put('userLevel', Auth::user()->userLevel);
            return response()->json(['msg'=>'good']);
        }else{
            return response()->json(['msg'=>'bad']);
        }
        return $next($request);
    }
}
