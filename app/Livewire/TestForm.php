<?php

namespace App\Livewire;

use App\Components\TextInput;
use Illuminate\Support\Str;
use Livewire\Component;

class TestForm extends Component
{
    public $email;

    public function render()
    {
        TextInput::configureUsing(function ($input) {
            $input->maxLength(10);
        });

        $nameInput = TextInput::make('name')
            ->livewire($this);

        $emailInput = TextInput::make('email')
            ->livewire($this);

        return view('livewire.test-form', [
            'nameInput' => $nameInput,
            'emailInput' => $emailInput,
        ]);
    }
}
