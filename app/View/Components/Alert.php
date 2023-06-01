<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Alert extends Component
{
    public string $message;
    public string $title;
    public string $type;

    /**
     * Create a new component instance.
     */
    public function __construct($message = null, $title = null, $type = null)
    {
        $this->message = $message;
        $this->title = $title;
        $this->type = $type;
    }

    public function textCss(): string
    {
        return [
            'error' => 'text-red-500 dark:text-red-400',
            'success' => 'text-emerald-500 dark:text-emerald-400',
            'warning' => 'text-yellow-400 dark:text-yellow-300'
        ][$this->type];
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.alert');
    }
}
