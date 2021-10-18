<?php

namespace App\Http\Controllers;

use App\Contact;
use App\Company;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $contacts = Contact::all();
        // $contacts = $contact->companyContact;



        return view("contact.index", ["contacts" => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $contacts = Contact::all();
        return view("contact.create", ["contacts" => $contacts]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $contact = new Contact;
        $contact->title = $request->contact_title;
        $contact->phone = $request->contact_phone;
        $contact->address = $request->contact_address;
        $contact->email = $request->contact_email;
        $contact->country = $request->contact_country;
        $contact->city = $request->contact_city;

        $contact->save();
        return redirect()->route("contact.index");

    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function show(Contact $contact)
    {
        return view('contact.show',["contact" => $contact]);

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function edit(Contact $contact)
    {
        return view("contact.edit", ["contact" => $contact]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, Contact $contact)
    {
        $contact->title = $request->contact_title;
        $contact->phone = $request->contact_phone;
        $contact->address = $request->contact_address;
        $contact->email = $request->contact_email;
        $contact->country = $request->contact_country;
        $contact->city = $request->contact_city;

        $contact->save();
        return redirect()->route("contact.index");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Contact  $contact
     * @return \Illuminate\Http\Response
     */
    public function destroy(Contact $contact)
    {
        //NEVEIKIA
        $contact->delete();
        return redirect()->route("contact.index");
    }
}
