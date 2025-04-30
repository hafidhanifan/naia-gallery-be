<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class SidebarItem extends Component
{
    public $label;
    public $route;
    public $icon;
    public $activePath;

    public function __construct($label, $route, $icon = null, $activePath = null)
    {
        $this->label = $label;
        $this->route = $route;
        $this->icon = $icon;
        $this->activePath = $activePath ?? $route;
    }

    public function render(): View|Closure|string
    {
        return view('components.sidebar-item');
    }
}
