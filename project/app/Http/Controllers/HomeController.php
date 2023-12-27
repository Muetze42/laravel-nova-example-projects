<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Laravel\Nova\Nova;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        if (!User::count()) {
            User::factory()->create([
                'email' => 'name@example.com',
                'password' => 'secret'
            ]);
        }

        Auth::login(User::first(), true);

        return redirect(Nova::path());
    }
}
