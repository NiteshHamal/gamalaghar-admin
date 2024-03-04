<?php

namespace App\Http\Controllers;

use App\Models\ContactUs;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function index()
    {

        $messages = ContactUs::latest()->paginate(10);
        return view('admin.contact.contact', compact('messages'));
    }
}
