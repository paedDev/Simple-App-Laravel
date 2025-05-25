<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;

class UserController extends Controller
{
    //     GET|HEAD        / ..................................  
    //   GET|HEAD        company company.index › CompanyCont…  
    //   POST            company company.store › CompanyCont…  
    //   GET|HEAD        company/create company.create › Com…  
    //   GET|HEAD        company/{company} company.show › Co…  
    //   PUT|PATCH       company/{company} company.update › …  
    //   DELETE          company/{company} company.destroy  …  
    //   GET|HEAD        company/{company}/edit company.edit…  
    public function index()
    {
        $users = User::with('companies')->simplePaginate(5);
        return view('welcome', ['users' => $users]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store()
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show()
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit()
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update()
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy()
    {
        //
    }
}
