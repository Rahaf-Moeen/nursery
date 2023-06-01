<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Select extends Component
{
    public string $id;
    public string $label;
    public string $name;
    public bool $required;
    public string $placeholder;
    public array $options;
    public string $invalid_message;
    public string $value;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $invalid_message = 'Please select an item in the list.',
        $id = '',
        $label = '',
        $name = '',
        $required = true,
        $placeholder = '',
        $options = [],
        $value = '',
    )
    {
        $this->required = $required;
        $this->options = explode(',', $options);
        $this->id = $id === '' ? $name : $id;
        $this->label = __($label);
        $this->name = $name;
        $this->placeholder = $placeholder === '' ? __($label) : __($placeholder);
        $this->invalid_message = __($invalid_message);
        $this->value = $value;
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.select');
    }
}
