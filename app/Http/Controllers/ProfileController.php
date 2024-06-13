<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;
use App\Models\Profile;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class ProfileController extends Controller
{
    public function index(){
        // $profiles = Profile::all(); showing all data from the database table
        $profiles = Profile::paginate(12);

        return view('profile.index', compact('profiles'));
    }

    public function show(Profile $profile){
    //  $id = (int)$request->id;
    //     $profile = Profile::findOrFail($id);
    // */
        return view('profile.show', compact('profile'));
    }

    public function create(){
        return view('profile.create');
    }


    /*  public function store(Request $request){
        $name = $request->name;
        $email = $request->email;
        $password = $request->password;
        $bio = $request->bio;

        \//Validation
        $request->validate([
            'name' => 'required',


        \//Insertion
        Profile::create([
            'name' => $name,
            'email' => $email,
            'password' => Hash::make($password),
            'bio' => $bio,
        ]);

        return redirect()->route('profiles.index');
    }
    */

    public function store(ProfileRequest $request){

        $formFields = $request->validated();
        // $formFields = $request->validate([
        //         // 'name' => 'required|min:5|max:30',
        //         // 'email' => 'required|email|unique:profiles',
        //         // 'password' => 'required|max:50|confirmed',
        //         // 'bio' => 'required',
        // ]);

        // Hash
        $formFields['password']=Hash::make($request->password);


        Profile::create($formFields);

        return redirect()->route('profiles.index')->with('success','your account has been created successfully');
    }

    public function destroy(Profile $profile){
        $profile->delete();
        return to_route('profiles.index')->with('success', 'the profile has been deleted successfully');
    }

}

