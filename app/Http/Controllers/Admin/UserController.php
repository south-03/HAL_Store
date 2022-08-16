<?php

namespace App\Http\Controllers\Admin;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Http\Requests\UserFormRequest;
use App\Models\User;


class UserController extends Controller
{
    public function index()
    {
        $users = User::all();
        return view('admin.users.index', compact('users'));
    }

    public function edit($id)
    {
        $users = User::findOrFail($id);
        return view('admin.users.edit', compact('users'));
    }

    public function update(UserFormRequest $request, $id)
    {
        $validatedData = $request->validated();
        $users = User::findOrFail($id);
        if($users) {
            $users->update([
                'name' =>$validatedData['name'],
                'email' =>$validatedData['email'],
                'phone_number' =>$validatedData['phone_number'],
                'address' =>$validatedData['address'],
                'role_id' =>$validatedData['role_id'],
            ]);
            return redirect('/admin/users')->with('message', 'User Updated Successfully');
        } else {
            return redirect('admin/users')->with('message', 'No such user ID found');
        }
    }

    public function delete($id)
    {
        $product = User::findOrFail($id);
        $product->delete();
        return redirect()->back()->with('message' , 'Product Deleted with all its image');
    }
}


