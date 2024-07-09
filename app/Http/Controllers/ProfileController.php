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
        $publications = $profile->publications()->orderBy('created_at', 'desc')->get();

        // Return the view with the profile and its publications
        return view('profile.show', compact('profile', 'publications'));


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


    // public function research(Profile $profile)
    // {
    //     $profiles = Profile::all('*');

    //     return view('profile.index', compact('profiles'));
    // }


    public function store(ProfileRequest $request, Profile $profile){

        $formFields = $request->validated();
        // $formFields = $request->validate([
        //         // 'name' => 'required|min:5|max:30',
        //         // 'email' => 'required|email|unique:profiles',
        //         // 'password' => 'required|max:50|confirmed',
        //         // 'bio' => 'required',
        // ]);

        // Hash
        $formFields['password'] = Hash::make($request->password);

        //update file
        $formFields['image'] = $this->uploadImage($request,$profile);
        //$formFields['image'] = $request->file('image')->store('profile','public'); */


        Profile::create($formFields);

        return redirect()->route('profiles.index')->with('success','your account has been created successfully');
    }

    public function destroy(Profile $profile){
        $profile->delete();
        return to_route('profiles.index')->with('success', 'the profile has been deleted successfully');
    }

    public function edit(Profile $profile){
        return view( 'profile.edit', compact('profile') );
    }

    public function update(ProfileRequest $request, Profile $profile){

        $formFields = $request->validated();

        //Hash / Encryption
        $formFields['password'] = Hash::make($request->password);

        //update file
        $formFields['image'] = $this->uploadImage($request, $profile);

        $profile->fill($formFields)->save();

        return to_route('profiles.show',$profile)->with('success', 'the profile has been successfully modified');
    }

    private function uploadImage(ProfileRequest $request, Profile $profile){
        if ($request->hasFile('image')) {
            return $request->file('image')->store('profile', 'public');
        }
        elseif($profile->image){
            return $profile->image;
        }
        else{
            return 'profile/user.png'; // Return existing image path if no new image is uploaded
        }
    }

}

