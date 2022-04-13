<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use Illuminate\Http\Request;

class ApiController extends Controller
{
    public function getContacts(){
        $contacts = Contact::all();
        return response()->json($contacts);
    }
}
