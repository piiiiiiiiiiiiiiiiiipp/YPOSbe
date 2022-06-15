<?php

namespace App\Http\Controllers\Doctor;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\ValidationException;

class DocAuthController extends Controller
{
    public function store(Request $request)
    {
        if(!Auth::guard('doctor')->attempt($request ->only('email','password'),$request->filled('remember'))){
            throw ValidationException::withMessages([
                'email'=> 'Invalid email or password.'
            ]);
        }
        return redirect()->intended(route('doctor.home'));
    }
    public function destroy(){
        Auth::guard('doctor')->logout();
        return redirect('/');
    }
}
