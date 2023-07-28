<?php

namespace App\Http\Controllers;

use App\Mail\emailMailable;
use App\Models\users;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class userController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        return view('register');
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
        return view('register'); // to be checked
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $this->validate($request, [
            'username' => 'required|unique:users,username',
            'fullName' => 'required',
            'birthdate' => 'required',
            'phonenumber' => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10',
            'address' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        //  Store data in database
        $user = new users();

        $user->username = $request->username;
        $user->fullName = $request->fullName;
        $user->birthdate = $request->birthdate;
        $user->phone = $request->phonenumber;
        $user->address = $request->address;
        $user->email = $request->email;
        $user->password = $request->password;

        $user->save();
        Mail::to($request->email)->send(new emailMailable($request->username));

        //session()->put('success', 'Your form has been submitted.');
        //return;
        //return response()->json(['success' => '']);

        return back()->with('success', 'Your form has been submitted.');

    }

    /**
     * Display the specified resource.
     */
    public function show(users $users)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(users $users)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, users $users)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(users $users)
    {
        //
    }
}