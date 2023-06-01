<?php

namespace App\View\Components;

use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class Input extends Component
{
    public string $invalid_message;
    public string $id;
    public string $label;
    public string $name;
    public string $placeholder;
    public bool $required;
    public string $autocomplete;
    public string $value;
    public bool $disabled;
    public string $type;

    /**
     * Create a new component instance.
     */
    public function __construct(
        $id = '',
        $label = '',
        $name = '',
        $placeholder = '',
        $required = true,
        $disabled = false,
        $autocomplete = '',
        $value = '',
        $type = 'text',
    )
    {
        $this->type = $type;
        $this->invalid_message = $this->getInvalidMessage();
        $this->id = $id === '' ? $name : $id;
        $this->label = __($label);
        $this->name = $name;
        $this->placeholder = $placeholder === '' ? __($label) : __($placeholder);
        $this->required = $required;
        $this->autocomplete = $autocomplete === '' ? $name : $autocomplete;
        $this->value = $value;
        $this->disabled = $disabled;
    }

    /**
     * @return string
     */
    public function getInvalidMessage(): string
    {
        return match ($this->type) {
            'email' => __('Please enter a valid email address.'),
            'password' => __('Please enter a valid password.'),
            'date' => __('Please enter a valid date.'),
            default => __('Please fill out this field.'),
        };
    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string
    {
        return view('components.input');
    }
}
