<?php

namespace App\Http\Livewire;

use App\Service\PhoneBook;
use Livewire\Component;

class LiveSearch extends Component
{
    public $name;

    public $contacts = [];

    public function updatedName($value)
    {
        $this->contacts = PhoneBook::searchByName($value);
    }

    public function render()
    {
        return view('livewire.live-search');
    }
}
