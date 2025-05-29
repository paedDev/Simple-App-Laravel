<?php

namespace App\Http\Controllers;

use App\Models\Company;
use App\Http\Requests\StoreCompanyRequest;
use App\Http\Requests\UpdateCompanyRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

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
        $companies = Company::latest()->paginate();
        return view('company.index', compact('companies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('company.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request, Company $company)
    {

        $companyAttributes = request()->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required'

        ]);
        $companyAttributes['user_id'] = 1;
        // create the company here
        Company::create($companyAttributes);
        return redirect("/company")->with('message', 'Succesfully created a company');
    }

    /**
     * Display the specified resource.
     */
    public function show(Company $company)
    {
        return view("company.show", compact('company'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Company $company)
    {
        return view("company.edit", compact('company'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Company $company)
    {
        $companyAttributes = $request->validate([
            'name' => 'required',
            'description' => 'required',
            'address' => 'required'
        ]);
        $companyAttributes['user_id'] = Auth::id();
        $company->update($companyAttributes);
        return redirect('/company');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Company $company)
    {
        $company->delete();
        return redirect('/company');
    }
}
