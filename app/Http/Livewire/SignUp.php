<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SignUp extends Component
{   

    public $firstname;
    public $lastname;
    public $email;
    public $password;
    public $confirm_password;

    public function signup(){
        $this->validate([
            'firstname'=>'required',
            'lastname'=>'required',
            'email'=>'required|unique:users,email',
            'password'=>'required|min:6',
            'confirm_password'=>'required_with:password|same:password|min:6'
        ]);

        $user = new User();

        $user->firstname = $this->firstname;
        $user->lastname = $this->lastname;
        $user->email = $this->email;
        $user->password = Hash::make($this->password);
        $user->category = 'Customer';
        $user->save();

        Session::flash('message', 'User has been created');
    }

    public function render()
    {
        return view('livewire.sign-up');
    }
}
