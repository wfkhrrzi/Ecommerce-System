# Hide shop for guest (addon) [v0.1.0]:

Hide shop for guest module will allow all the users coming to your shop to register themselves
and then they can proceed to shop.

This addon is a mini addon but have a very powerful use case scenario.


# Steps to install:

1. Goto composer.json inside root of your Bagisto instance:

Add this in "psr-4" request object:

~~~
"Webkul\\HideShopForGuest\\": "packages/Webkul/HideShopForGuest/src",
~~~

2. Goto config/app.php:

In the providers array add this line at the end:

~~~
"Webkul\HideShopForGuest\Providers\ShowPriceAfterLoginServiceProvider::class,"
~~~

3. Goto app/Http/Kernel.php:

Inside this file you will find an array named *$middlewareGroups*, paste this inside it:

~~~
\Webkul\HideShopForGuest\Http\Middleware\HideShopForGuest::class
~~~