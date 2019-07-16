<?php

namespace App\Providers;

use Illuminate\Support\Facades\Event;
use Illuminate\Auth\Events\Registered;
use Illuminate\Auth\Listeners\SendEmailVerificationNotification;
use Illuminate\Foundation\Support\Providers\EventServiceProvider as ServiceProvider;
use App\Events;
use App\Listeners;

use App\Events;
use App\Listeners;



class EventServiceProvider extends ServiceProvider
{
    /**
     * The event listener mappings for the application.
     *
     * @var array
     */
    protected $listen = [
        Registered::class => [
            SendEmailVerificationNotification::class,
        ],
<<<<<<< HEAD
=======

>>>>>>> 9406a0227faafc5b4575fdd8041d0e7d3eec12eb
        agentBeingRegistered::class => [
            assignDistrictToRegisteredAgent::class,
        ],

<<<<<<< HEAD
=======


>>>>>>> 9406a0227faafc5b4575fdd8041d0e7d3eec12eb
    ];

    /**
     * Register any events for your application.
     *
     * @return void
     */
    public function boot()
    {
        parent::boot();

        //
    }
}
