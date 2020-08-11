<?php

namespace App\Http\Controllers;

use Illuminate\Validation\Rule;
use App\Http\Requests\User\UserStoreRequest;
use App\Http\Requests\User\UserUpdate;
use Illuminate\Http\Request;
use App\User;
use Auth;

class UserController extends Controller
{
    
    public function list()
    {
        $users = User::get();
        return view('admin.user.list',compact('users'));
    }



    public function create()
    {
        return view('admin.user.create');
    }



    public function store(Request $request)
    {

        $request->validate([
            'name' => 'required',
            'email' => 'required|email|unique:users',
            'password' => 'required'
        ]);

        $user = new User();
        $user->name = $request->input('name');
        $user->email = $request->input('email');
        $user->password = bcrypt($request->input('password'));

        if($user->save())
        {
            return back()->with([
                'alert' => 'success',
                'message'=> 'Usuário cadastrado com sucesso'
            ]);
        }
    }



    public function edit(Request $request, $userId)
    {

        $user = User::find($userId);
        return view('admin.user.edit',compact('user'));
      
    }



    public function update(Request $request)
    {
        

        $request->validate([
            'name' => 'required',
            'email' => ['required','email', Rule::unique('users')->ignore($request->id),],
        ]);

        $user = User::find($request->input('id'));

        $user->name = $request->input('name');
        $user->email = $request->input('email');

        if($user->save())
        {
            return back()->with([
                'alert' => 'success',
                'message'=> 'Usuário atualizado com sucesso'
            ]);  
        }
        
    }



    public function destroy($userId)
    {

        $user = User::find($userId);

        if($user->delete())
        {
            return back()->with(['alert' => 'danger', 
                                  'message' => 'Exclusão realizada com sucesso']);
        }

        
    }



    public function profile()
    {
        $id = Auth::id();

        $user = User::find($id);
        
        return view('admin.user.profile', compact('user'));
       

    }


}
