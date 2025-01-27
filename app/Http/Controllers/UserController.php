<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserController extends Controller
{
    public function index(Request $request)
    {

        //$users = \App\Models\User::paginate(10);
        $users = DB::table('users')
            ->when($request->input('name'), function ($query, $name ) {
                return $query->where('name', 'like', '%'.$name.'%' );
            })
            ->orderBy('id', 'desc')
            ->paginate(10);
        return view('pages.users.index', compact ('users'), );
    }

    public function create()
    {
        return view('pages.users.create');
    }

    public function store(StoreUserRequest $request)
    {
        // $request->validate([
        //     'name' => 'required|max:100|min:3',
        //     'email' => 'required|email|unique:users,email',
        //     'phone' => 'required|numeric',
        //     'roles' => 'required|in:ADMIN,STAFF,USER',
        //     'password' => 'required|min:8',
        // ]);
        //dipindahkan ke StoreUserRequest

        $data = $request->all();
        $data['password'] = Hash::make($request->password);
        \App\Models\User::create($data);
        return redirect()->route('user.index')->with('success', 'User successfully created');
    }

    public function edit($id)
    {
        $user = \App\Models\User::findOrFail($id);
        return view('pages.users.edit', compact('user'));
    }

    public function update(UpdateUserRequest $request, User $user)
    {
        $data = $request->validated();
        $user->update($data);
        return redirect()->route('user.index')->with('success', 'User successfully updated');
    }

    public function destroy(User $user)
    {
        $user->delete();
        return redirect()->route('user.index')->with('success', 'User successfully deleted');
    }
}
