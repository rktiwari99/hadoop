<?php

namespace App\View\Components;

use Illuminate\View\Component;

class header extends Component
{
    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        // if (request()->routeIs(url('127.0.0.1/'))){
        //     request()->is('/*') ? 'active' : 'current-menu-item' ;
        // }
        return view('components.header');
    }
}
