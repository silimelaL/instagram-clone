<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;
use App\User;

class ProfilesController extends Controller
{
    public function index(User $user)
    {
        $follows = (auth()->user()) ? auth()->user()->following->contains($user->id) : false;
        //dd($follows);
        $postsCount = $user->posts->count();
        $followersCount = $user->profile->followers->count();
        $followingCount = $user->following->count();
        return view('profile/index', compact('user', 'follows', 'postsCount', 'followersCount', 'followingCount'));
    }

    public function edit(User $user)
    {
        $this->authorize('update', $user->profile);
        return view('profile/edit', compact('user'));
    }

    public function update(User $user)
    {
        $this->authorize('update', $user->profile);
        $data = request()->validate([
            'title' => 'required',
            'description' => 'required',
            'url' => '',
            'image' => ''
        ]);


        if (request("image")) {
            $imagePath = request('image');
            $imageName = time() . '.' . request('image')->extension();

            $imagePath->move(public_path('store/profile'), $imageName);
            // $imagePath = Image::make("/store/profile/{$imagePath}")->fit('800', '800');

            $array_image = ['image' => $imageName];
        }

        auth()->user()->profile->update(array_merge(
            $data,
            $array_image ?? []
        ));

        return redirect("/profile/{$user->id}");
    }
}