<?php

namespace App\Http\Controllers;

use App\Http\Requests\PublicationRequest;
use App\Models\Profile;
use App\Models\Publication;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::with('profile')->orderBy('created_at', 'desc')->paginate(10);

        return view('publication.index', compact('publications'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('publication.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(PublicationRequest $request, Publication $publication)
    {
         // Validate the request and retrieve validated data
        $data = $request->validated();

         // Handle the image upload
        if ($request->hasFile('image')) {
            $data['image'] = $request->file('image')->store('publications', 'public');
        }

         // Set the profile ID
        $data['profile_id'] = Auth::id();

         // Create the publication
        Publication::create($data);

        // Redirect with a success message

        return redirect()->route('publication.index')->with('success','your Post has been created successfully');
    }

    /**
     * Display the specified resource.
     */
    public function show(Publication $publication)
    {
        return view('publication.show', compact('publication'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Publication $publication)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        //
    }
}
