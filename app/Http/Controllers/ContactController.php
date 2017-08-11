<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index() {
        $contacts = Contact::all();
        return view('templates.list',  ['contacts' => $contacts]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create() {
        return view('templates.form');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request) {
        Contact::create($request->all());
        return redirect('/contact');
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id) {
        $contacts = Contact::findOrFail($id);
        return view('templates.edit', ['contacts' => $contacts]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */

    public function update(Request $request, $id) {
        $contact = Contact::findOrFail($id);
        $contact->update($request->all());
        return redirect('/contact');

        //$contact = Contact::findOrFail($id);
        //$contact->lastName = $request->lastName;
        //$contact->firstName = $request->firstName;
        //$contact->address = $request->address;
        //$contact->phoneNumber = $request->phoneNumber;
        //$contact->save();
        //return redirect('/contact');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)     {
         Contact::destroy($id);
         return redirect('/contact');
    }
}
