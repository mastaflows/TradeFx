<?php

namespace App\Livewire;

use App\Models\User;
use Livewire\Component;

class AddRecord extends Component
{
    public $username;
    public $fullname;
    public $email;
    public $country;
    public $date; // Represents "Date of Registration"

    // Validation rules
    protected $rules = [
        'username' => 'required|string|max:255',
        'fullname' => 'required|string|max:255',
        'email' => 'required|email|unique:users,email', // Ensure table and column match your database
        'country' => 'required|string',
        'date' => 'required|date', // Validate as a date format
    ];

    public function submit()
    {
        $this->validate();

        // Insert record into the database
        User::create([
            'username' => $this->username,
            'fullname' => $this->fullname,
            'email' => $this->email,
            'country' => $this->country,
            'date_of_registration' => $this->date, // Ensure the database column matches this name
        ]);

        // Clear input fields after saving
        $this->reset(['username', 'fullname', 'email', 'country', 'date']);

        // Send success message
        session()->flash('success', 'Record added successfully!');

        // Redirect to the form (optional)
        return redirect()->route('add-record');
    }
    public function AddRecord()
    {
        return redirect()->route('add-record');
    }

    public function render()
    {
        return view('livewire.add-record');
    }
}
