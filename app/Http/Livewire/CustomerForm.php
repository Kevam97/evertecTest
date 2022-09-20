<?php

namespace App\Http\Livewire;

use Livewire\Component;
use App\Models\Customer;

class CustomerForm extends Component
{
    public $name;
    public $lastname;
    public $email;
    public $phone;

    public $rules = [
        'name' => 'required',
        'lastname' => 'required',
        'email' => 'required|email',
        'phone' => 'required',
    ];

    public function submit(){
        $this->validate();

        Customer::create([
            'name' => $this->name,
            'lastname' => $this->lastname,
            'email' => $this->email,
            'phone' => $this->phone,
        ]);
        session()->flash('message','Customer added');
        $this->reset();
    }
    public function render()
    {   
        

        return view('livewire.customer-form');
    }
}
