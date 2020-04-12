<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use \App\User;

class UserController extends Controller
{
    
    public function __construct() {
        $this->middleware('auth');
    }
    
    public function index() {
        $user = User::query()
                ->where('id', '!=', \Illuminate\Support\Facades\Auth::user()->id)
                ->get();
        return view('admin.partials.users', [
		'users' => $user	
        ]);
    }
    
    public function addUser(Request $request) {
        $formData = $request->validate([
                    'name' => ['required', 'string', 'max:100'],
                    'email' => ['required', 'email', 'max:255', 'unique:users,email'],
                    'phone_number' => ['required', 'string']
        ]);
        
        $formData['password'] = \Hash::make($request['password']);
        
        $user = new User();
        $user->fill($formData);
        $user->save();
        
        session()->flash('system_message', __('New user has been saved!'));
        
        return redirect()->route('home.users');
    }
    
    public function updateUser(Request $request) {
        $formData = $request->validate([
                    'name' => ['required', 'string', 'max:100'],
                    'email' => ['required', 'email', 'max:255', 'unique:users,email'],
                    'phone_number' => ['required', 'string']
        ]);
        
        $formData['password'] = \Hash::make($request['password']);
        
        $user = \Illuminate\Support\Facades\Auth::user();
        $user->fill($formData);
        $user->save();
        
        session()->flash('system_message', __('User has been succesfully edited!'));
        
        return redirect()->route('home.users');
    }
}
