<?php

namespace App\Http\Controllers;

use App\Company;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $companies = Company::all();
        return view("company.index", ["companies" => $companies]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $companies = Company::all();
        return view("company.create", ["companies" => $companies]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $company = new Company;
        $company->title = $request->company_title;
        $company->description = $request->company_description;

        if($request->has('company_logo'))
        {
            $imageName = time().'.'.$request->company_logo->extension();
            $company->logo = '/images/'.$imageName;
            $request->company_logo->move(public_path('images'), $imageName);
        }
        // } else {
        //     $company->logo = '/images/placeholder.png';
        // }

        $company->save();

        return redirect()->route("company.index");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function show(Company $company)
    {
        return view('company.show',["company" => $company]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function edit(Company $company)
    {
        return view('company.edit',["company" => $company]);

    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Company $company)
    {
        $company->title = $request->company_title;
        $company->description = $request->company_description;

        if($request->has('company_logo'))
        {
            $imageName = time().'.'.$request->company_logo->extension();
            $company->logo = '/images/'.$imageName;
            $request->company_logo->move(public_path('images'), $imageName);
        }
        // } else {
        //     $company->logo = '/images/placeholder.png';
        // }

        $company->save();

        return redirect()->route("company.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Company  $company
     * @return \Illuminate\Http\Response
     */
    public function destroy(Company $company)
    {
        //
    }
}
