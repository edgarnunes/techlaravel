<?php

namespace App\Http\Middleware;

use Closure;
use Lavary\Menu\Menu;

class GenerateMenus
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

        Menu::make('MyNavBar', function ($menu) {
            $menu->add('Home', ['route'  => 'home', 'class' => 'nav-link', 'role' => 'button']);
            $menu->add('Create Ticket', ['action' => 'TicketController@create', 'class' => 'nav-link']);
            $menu->add('My Tickets', ['action' => 'TicketController@mytickets', 'class' => 'nav-link']);
            $menu->add('All Tickets', ['action' => 'TicketController@index', 'class' => 'nav-link']);
        });

        return $next($request);
    }
}
