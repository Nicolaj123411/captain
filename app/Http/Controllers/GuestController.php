<?php

namespace App\Http\Controllers;

use App\User;
use App\AccessCode;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session;

class GuestController extends Controller
{
    public function selectLanguage()
    {
        return view('language_selector');
    }
    public function setLanguage($lang){
         Session::put('locale', $lang);
         Session::save();
         return redirect('/code');
    }

    public function code(Request $request){
        $validatedData = $request->validate([
            'code' => 'required'
        ]);
        if(AccessCode::where('code', $request->code)->first()){
            $user = Auth::user();

            $user->permission = '1';
            if($user->save()){
                return view('video');
            }
        }else{
            return back()->withErrors(['code' => 'Forkert svar!']);
        }





    }
}
