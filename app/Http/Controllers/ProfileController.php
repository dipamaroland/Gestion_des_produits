<?php

namespace App\Http\Controllers;

//use App\Http\Requests\ProfileUpdateRequest;
//use Illuminate\Contracts\Auth\MustVerifyEmail;
//use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
//use Illuminate\Support\Facades\Auth;
//use Illuminate\Support\Facades\Redirect;
//use Inertia\Inertia;
//use Inertia\Response;
use App\Models\User;


class ProfileController extends Controller
{
    /**
     * Display the user's profile form.
     */
    public function edit($id)
    {
        $user = User::find($id);
        return view('profile.edit', compact('user'));

    }

    /**
     * Update the user's profile information.
     */
    public function update(Request $request, $id)
    {
        
        $request->validate([
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'lowercase', 'email', 'max:255', 'unique:'.User::class],
            'password' => ['required', 'confirmed'],
        ]);

        $user = User::find($id);
        $user->update($request->all());
        
        $request->user()->save();

        return redirect()->route('welcome')->with('success', 'Utilisateur mis à jour avec succès.');

       
    }

    /**
     * Delete the user's account.
     */
    public function destroy($id)
    {
       
       
        $user = User::find($id);

        $user->delete();

        return redirect()->route('welcome')->with('success', 'Utilisateur supprimé avec succès.');

       
    }

    




}
