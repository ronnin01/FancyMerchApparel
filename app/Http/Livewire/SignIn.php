<?php

namespace App\Http\Livewire;

use App\Models\User;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\Session;
use Livewire\Component;

class SignIn extends Component
{

    public $email;
    public $password;

    public function signin(){

        $user = User::where('email', $this->email)->first();

        if($user){
            if(Hash::check($this->password, $user->password)){

                if(Auth::attempt([
                    'email'=>$this->email,
                    'password'=>$this->password
                ])){
                    Session::flash('success_message', 'Sakto nani');
                    return Redirect::route('home.index');
                }
            }else{
                Session::flash('message', 'Incorrect Password.');
            }
        }else{
            Session::flash('message', 'Incorrect Email.');
        }

    }

    public function render()
    {
        return view('livewire.sign-in');
    }
}
