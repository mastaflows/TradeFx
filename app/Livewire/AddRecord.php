<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AddRecord extends Component
{
    public $username; // Example field
    public $fullname; // Example field
    public $email; // Example field
    public $country; // Example field
    public $date; // Example field

    protected $rules = [
        'username' => 'required|string|max:255',
        'fullname' => 'required|string|max:255',
        'email' => 'required|email|unique:users_table,email', // Replace 'your_table' with your actual table name
        'Country' => 'required|string',
        'Date Of Reg.' => 'required|string',
    ];

    public function submit()
    {
        $this->validate();

        // Insert record into the database
        User::create([
            'username' => $this->username,
            'fullname' => $this->fullname,
            'email' => $this->email,
            'Country' => $this->Country,
            'Date Of Reg.' => $this->Date,
        ]);

        // Clear input fields after saving
        $this->reset(['username', 'fullname', 'emall', 'Country', 'Date Of Reg.']);

        // Send success message
        session()->flash('success', 'Record added successfully!');
        return redirect()->route('add-record');
    }
    public function render()
    {
        return view('livewire.add-record')->with('layout', 'layouts.app');
    }
}
