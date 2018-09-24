<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Contacts;

class MainController extends Controller
{


    //------------------------------------------------------------
    //directory functions
    //------------------------------------------------------------


    
    public function goPhonebookPage(){
        $contactslist = $this->getAllContacts();

        return view('phonebook')
        ->with(compact('contactslist'));
    }

    public function goNewContactPage(){
        return view('newcontact');
    }

    public function saveContact(Request $request){
        $generatedID= rand();       
        $this->addContactToDB($generatedID,$request->name,$request->address,$request->contact);

        return redirect(url('/'));
;    }

    public function deleteContact($contact_ID){
        $this->deleteContactbyID($contact_ID);

        return redirect(url('/'));
    }

    public function editContact($contact_ID){
        $contact = $this->getContactbyID($contact_ID);
        
        return view('editcontact')
        ->with(compact('contact'));
    }

    public function saveEditContact(Request $request){
        $this->updateContactbyID($request->contact_ID,$request->name,$request->address,$request->contact);
        
        return redirect(url('/'));
    }


    //------------------------------------------------------------
    //database dealing functions
    //------------------------------------------------------------



    //function that gets all contacts under the contact table
    public function getAllContacts(){
        $contacts = Contacts::get();

        return $contacts;
    }

    //function that gets a row of the contact table by ID
    public function getContactbyID($contact_ID){
        $contact = Contacts::where('contact_ID',$contact_ID)->first();
        
        return $contact;
    }

    //function that saves a contact to DB
    public function addContactToDB($contact_ID,$name,$address,$contact){

        Contacts::create([
            'contact_ID' => $contact_ID,
            'name' =>   $name,
            'address'=> $address,
            'contact'=> $contact
        ]);

        return;
    }

    //function that seeks out a contact ID and deletes it
    public function deleteContactbyID($contact_ID){
        Contacts::where('contact_ID',$contact_ID)->delete();

        return;
    }

    //function that seeks out a contact ID and updates it
    public function updateContactbyID($contact_ID,$name,$address,$contact){
        Contacts::where('contact_ID',$contact_ID)
        ->update([
            'contact_ID' => $contact_ID,
            'name' =>   $name,
            'address'=> $address,
            'contact'=> $contact
        ]);

        return;
    }
}
