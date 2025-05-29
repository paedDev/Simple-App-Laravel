<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function __invoke()
    {
        $users = User::with('companies')
            ->where('name', 'LIKE', '%' . request('search') . '%')
            ->simplePaginate(5);  // or simplePaginate(5)


        return view('result', compact('users'));
    }
}
