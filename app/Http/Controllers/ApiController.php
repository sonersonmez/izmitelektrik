<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Statusable;
use Illuminate\Http\Request;
use Carbon\Carbon;

class ApiController extends Controller
{
    public function getContacts(){
        $contacts = Contact::all();
        return response()->json($contacts);
    }

    public function postContact(Request $request){
        

        $contact = new Contact;
       
        $contact->name = $request->name;
        $contact->email = $request->email;
        $contact->phone_number = $request->phone_number;
        $contact->subject = $request->subject;
        $contact->message = $request->message;
        $currentTime = Carbon::now();
        $contact->created_at = $currentTime;
        $contact->save();

        $lastContact = Contact::latest()->first();
        $lastContactId = $lastContact->id;

        $statusable = new Statusable;
        $statusable->status_id = 1;
        $statusable->statusables_id = $lastContactId;
        $statusable->statusables_type = 'App\Models\Contact';
        $statusable->save();

        return response()->json('Kayıt başarıyla eklendi.');


    }

    public function updateContactStatus(Request $request, $id){
        $statusable = Statusable::where('statusables_id', $id)->first();
        $statusable->status_id = 2;
        $statusable->status_id = $request->status_id;
        $statusable->save();
        return response()->json('Durum güncellendi.');
    }

    public function deleteContact($id){
        Contact::find($id)->delete();

        return response()->json('Silme işlemi başarılı.');

    }
}
