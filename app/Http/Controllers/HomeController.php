<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateFormRequest;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return view('home');
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('frontend.user.edit', compact('users'));
    }

    public function update(UserUpdateFormRequest $request, $id)
    {
        $validatedData = $request->validated();
        $users = User::findOrFail($id);
        if($users) {
            $users->update([
                'name' =>$validatedData['name'],
                'email' =>$validatedData['email'],
                'phone_number' =>$validatedData['phone_number'],
                'address' =>$validatedData['address'],
            ]);
            return redirect('/home')->with('message', 'User Updated Successfully');
        } else {
            return redirect('/home')->with('message', 'No such user ID found');
        }
    }
}
