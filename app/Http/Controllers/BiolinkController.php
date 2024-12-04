<?php

namespace App\Http\Controllers;

use App\Models\User;

class BioLinkController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(User $user) //$handler
    {
        // $user = User::whereHandler($handler)->firstOrFail();

        return view('bio-links', compact('user'));
    }
}
