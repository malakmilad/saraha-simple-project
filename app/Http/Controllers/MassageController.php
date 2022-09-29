<?php

namespace App\Http\Controllers;

use App\Models\Massage;
use App\Models\User;
use App\Models\Visits;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;

// use Illuminate\Support\Facades\Auth;

class MassageController extends Controller
{
    public function send(int $id) {
        $user = User::findOrFail($id);
        if($user->id != Auth::id()){
            // $user->visits()->create();
             Visits::create([
                'user_id'=>$id
             ]);
        }
        return view('send', compact('user'));

    }
    public function store(Request $request,int $id){
        $request->validate([
            'text'=>'required'
        ]);
        Massage::create([
            'text'=>$request->text,
            'user_id'=>$id

        ]);
        return redirect()->route('login')->with('success', 'message has been sent successfully');

    }
    public function delete($id){
        DB::table('massages')->where('id',$id)->delete();
        return redirect()->route('home');
    }
}
