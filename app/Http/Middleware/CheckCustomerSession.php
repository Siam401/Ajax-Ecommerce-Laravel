<?php

namespace App\Http\Middleware;

use Closure;

class CheckCustomerSession
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

        $customer_id=session('customer_id');
        if($customer_id == NULL){
            return redirect(route('view.loginview'));
        }

        return $next($request);
    }
}
