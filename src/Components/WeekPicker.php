<?php

namespace Devlokman\WeekPicker\Components;

use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class WeekPicker extends Component
{

    public function render(): View
    {
        return view('week-picker::components.week-picker');
    }
}
