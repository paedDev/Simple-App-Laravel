<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;

class CompanyController extends Controller
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
        //
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
    public function store(StoreCompanyRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCompanyRequest $request, Company $company)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        //
    }
}
