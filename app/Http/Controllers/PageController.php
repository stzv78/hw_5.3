<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Support\Facades\Input;


class PageController extends Controller
{
    public $title = "Записная книжка";

    public function index() {

        $pageTitle = "Новый контакт";

        return view('templates.form', compact('title', 'pageTitle'));
    }

    public function listContacts() {

        $pageTitle = "Мои контакты";
        $data = Contact::all()->toArray();
        return view('templates.list', compact('title', 'pageTitle', 'data'));
    }

    public function edit($id) {

        $pageTitle = "Редактировать контакт";
        $data = Contact::find($id)->toArray();

        return view('templates.edit', compact('title', 'pageTitle', 'data'));
    }

    public function delete($id) {

        $m = Contact::find($id);
        $m->delete();
        return redirect()->action('PageController@listContacts');
    }

    public function add() {

        Contact::create(Input::all());
        return redirect()->action('PageController@listContacts');
    }

}
