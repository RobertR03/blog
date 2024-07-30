<?php

namespace App\View\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class AppLayout extends Component
{
    // config('app.name', 'Laravel');
    public function __construct(public $metaTitle = 'Hola!', public $metaDescription = 'My Blog') { }
    /**
     * Get the view / contents that represents the component.
     */
    public function render(): View
    {
        return view('layouts.app');
    }
}
