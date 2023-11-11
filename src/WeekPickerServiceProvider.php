<?php

namespace Devlokman\WeekPicker;

use Devlokman\WeekPicker\Components\WeekPicker;
use Illuminate\Support\ServiceProvider;
use Livewire\Livewire;

class WeekPickerServiceProvider extends ServiceProvider
{
    public function boot()
    {
        Livewire::component('week-picker', WeekPicker::class);

        $this->loadViewsFrom(__DIR__ . '/../resources/views/livewire', 'week-picker');

        $this->publishes([
            __DIR__ . '/../resources/views/livewire/' => resource_path('views/vendor/week-picker'),
        ]);
    }
}
