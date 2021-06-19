<?php

namespace Zupaazhai\Imager\Components;

use Illuminate\View\Component;
use Illuminate\View\View;

class Image extends Component
{
    public function __construct()
    {
    }

    public function render(): View
    {
        return view('imager::components.image');
    }
}
