<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;

class ContactFormAPIController extends Controller
{
    public function index() {
        $list = ContactForm::all();
        return response()->json(['lists' => $list]);
        // return response(ContactForm::all());
    }

    public function show($id) {
        $list = ContactForm::find($id);
        return response()->json(['lists' => $list]);
        // return response(ContactForm::find($id));
    }
}
