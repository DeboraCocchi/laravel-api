<?php

namespace App\Http\Controllers\Api;


use App\Http\Controllers\Controller;
use App\Mail\NewContact;
use App\Models\Lead;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Validator;

class LeadController extends Controller
{
    public function store(Request $request){
        $data=$request->all();
        //chiamo il validator
        $validator=Validator::make($data,
        [
            //faccio la validazione
            'name'=>'required|min:2',
            'email'=>'required|min:5',
            'object'=>'required|min:5',
            'message'=>'required|min:2'
        ],
        [
            //aggingo i msg di errore
            'name.required'=>'Il nome è un campo obbligatorio',
            'email.required'=>'L\'email è un campo obbligatorio',
            'message.required'=>'Il messaggio è un campo obbligatorio',
            'name.min'=>'Il nome deve avere almeno :min caratteri',
            'email.min'=>'L\'email deve avere almeno :min caratteri',
            'message.min'=>'Il messaggio deve avere almeno :min caratteri',
            'object.required'=>'L\'oggetto è un campo obbligatorio',
            'object.min'=>'L\'oggetto deve avere almeno :min caratteri',
        ]
        );
        if($validator->fails()){
            $success=false;
            $errors=$validator->errors();
            return response()->json(compact('success', 'errors'));
        }else{
            $success=true;
            $errors=false;
            return response()->json(compact('success', 'errors'));
        }

         //salvare i dati nel db
        $new_lead=new Lead();
        $new_lead->fill($data);
        $new_lead->save();



        //inviare la mail
        Mail::to('info@dvora.com')->send(new NewContact($new_lead));

        return response()->json($data);
    }
}
