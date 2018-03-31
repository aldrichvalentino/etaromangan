<?php

namespace App\Http\Controllers;

use Validator;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

class UserController extends Controller
{
    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = User::find($id);
        if($user->isRestaurant){
            return redirect('dashboard');
        } else {
            return view('users.userProfile', [
                'user' => $user,
                'show_navbar' => true,
                'trans_navbar' => false,
                'show_footer' => true
            ]);
        }
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(is_null(Auth::id())){
            return redirect('login');
        } else {
            return redirect()->route('users.show', [Auth::id()]);
        }
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        return view('users.editProfile', [
            'user' => User::find($id),
            'show_navbar' => true,
            'trans_navbar' => false,
            'show_footer' => true
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        // if($request->password != $request->password_confimation){
        //     return $request;
        //     return back()->withInput()->withErrors(['password' => 'Password does not match']);
        // }
        
        $validator = Validator::make($request->all(), [
            'name' => 'required|string|max:255',
            'email' => 'required|string|email|max:255',
            'password' => 'nullable|min:6|confirmed',
        ]);
        
        //return $validator->fails();
        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if(!is_null($request->password) && !is_null($request->password_confirmation)){
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email,
                    'password' => Hash::make($request->password)
                ]);
        } else {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'email' => $request->email
                ]);
        }
        return view('users.userProfile', [
            'user' => User::find($id),
            'show_navbar' => true,
            'trans_navbar' => false,
            'show_footer' => true
        ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
