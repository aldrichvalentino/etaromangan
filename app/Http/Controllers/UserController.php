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
        if (Auth::id() != $user->id) {
            return redirect('login');
        }
        if ($user->isRestaurant) {
            return redirect()->route('dashboard', [Auth::id()]);
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
        if (is_null(Auth::id())) {
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
        $isRestaurant = User::find($id)->isRestaurant;
        if ($isRestaurant) {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'address' => 'required|string|max:255',
                'phone' => 'required|numeric|digits_between:8,12',
                'password' => 'nullable|min:6|confirmed',
                'image' => 'nullable|image',
            ]);
        } else {
            $validator = Validator::make($request->all(), [
                'name' => 'required|string|max:255',
                'password' => 'nullable|min:6|confirmed',
                'image' => 'nullable|image',
            ]);
        }

        if ($validator->fails()) {
            return back()->withErrors($validator)->withInput();
        }

        if (!$isRestaurant && !is_null($request->password) && !is_null($request->password_confirmation)) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'password' => Hash::make($request->password)
                ]);
        } elseif (!$isRestaurant && is_null($request->password) && is_null($request->password_confirmation)) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                ]);
        } elseif ($isRestaurant && !is_null($request->password) && !is_null($request->password_confirmation)) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                    'password' => Hash::make($request->password)
                ]);
            DB::table('restaurants')
                ->where('id', $id)
                ->update([
                    'phone' => $request->phone,
                    'address' => $request->address,
                ]);
        } elseif ($isRestaurant && is_null($request->password) && is_null($request->password_confirmation)) {
            DB::table('users')
                ->where('id', $id)
                ->update([
                    'name' => $request->name,
                ]);
            DB::table('restaurants')
                ->where('id', $id)
                ->update([
                    'phone' => $request->phone,
                    'address' => $request->address,
                ]);
        }

        // file upload
        $file = $request->file('image');
        if (!is_null($file)) {
            list($width, $height) = getimagesize($file);
            if ($width > 512 || $height > 512) {
                return back()->withErrors(['image' => 'Maximum image size is 512x512 px'])->withInput();
            }

            $destinationPath = 'images/userpic';
            $fileName =  md5('user'. $id . '_profpic') . '.' . $file->getClientOriginalExtension();
            $file->move(public_path($destinationPath), $fileName);

            DB::table('users')
                ->where('id', $id)
                ->update([
                    'image' => $fileName,
                ]);
        }

        if ($isRestaurant) {
            return redirect()->route('dashboard.edit', [Auth::id()]);
        } else {
            return view('users.userProfile', [
                'user' => User::find($id),
                'show_navbar' => true,
                'trans_navbar' => false,
                'show_footer' => true
            ]);
        }
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
