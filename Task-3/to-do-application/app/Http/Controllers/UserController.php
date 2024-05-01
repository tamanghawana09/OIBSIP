<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;


class UserController extends Controller
{

    public function index(){
        $users = User::all();
        return view('index', ['users' => $users]);
    }
    public function submit(Request $request) {
        try{
            $validatedData = $request->validate([
                'title' => 'required|string',
                'description' => 'required'
            ]);
            $user = new User();
            $user->title = $validatedData['title'];
            $user->description = $validatedData['description'];
            $user->save();

            return redirect(route('/'));

        }catch(\Exception $e){
            return back()->with('error', 'An error occurred. Please try again.');
        }
    }

    public function delete($id){
        $user = User::findOrFail($id);
        if ($user) {
            $user->delete();
            return redirect(route('index'));
        }
    }
}
