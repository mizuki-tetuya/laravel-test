<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Contact;

class ContactController extends Controller
{
    public function index()
    {
        return view('contact.index');
    }
    public function confirm(Request $request)
    {
        $this->validate($request, Contact::$rules);
        $create = new Contact;
        $form = $request->all();
        unset($form['_token_']);
        $create->fill($form)->save();
        
        return view('contact.confirm', ['create'=>$create]);
    }
    public function send(Request $request)
    {

    }
}
