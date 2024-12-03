<?php

namespace App\Http\Controllers;

use App\Http\Requests\ProfileRequest;


class ProfileController extends Controller
{
    /**
     * Invokable = somente um método
     */
    public function index()
    {
        return view('profile', ['user' => auth()->user()]);
    }


    public function update(ProfileRequest $request)
    {
        /**  @var User $user */
        $user = auth()->user();
        $user->fill($request->validated())->save();

        return back()->with('message', 'Profile atualizado com sucesso!!!');
    }
}
