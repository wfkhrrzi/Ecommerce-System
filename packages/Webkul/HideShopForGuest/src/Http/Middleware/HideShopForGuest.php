<?php

namespace Webkul\HideShopForGuest\Http\Middleware;

use Closure;

class HideShopForGuest
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
        $moduleEnabled = core()->getConfigData('hideshopforguest.settings.settings.hide-shop-before-login');

        $notification = core()->getConfigData('hideshopforguest.settings.settings.hide-shop-before-login.notification');

        if ($moduleEnabled) {
            if (! auth()->guard('customer')->check() && ! request()->is('customer/*') && ! request()->is('admin/*')) {
                if (isset($notification)) {
                    session()->flash('warning', $notification);
                }

                return redirect()->route('customer.session.index');
            }
        }

        return $next($request);
    }
}