<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;

class DashboardController extends Controller
{
    public function __invoke()
    {

        /** @var User $user */
        $user = auth()->user();

        // dump($user->links);
        return view('dashboard', ['links' =>  $user->links]);
    }
}
