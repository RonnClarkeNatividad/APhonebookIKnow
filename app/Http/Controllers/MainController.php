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

    //saves a contact entry to the database
    public function saveContact(Request $request){
        $generatedID= rand();       
        $this->addContactToDB(
            $generatedID,
            $request->firstname,
            $request->lastname,
            $request->nickname,
            $request->age,
            $request->address,
            $request->contact,
            $request->hobbies);

        return redirect(url('/'));
   }

   //deletes a contact entry from the database
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
        $this->updateContactbyID(
            $request->firstname,
            $request->lastname,
            $request->nickname,
            $request->age,
            $request->address,
            $request->contact,
            $request->hobbies);
        
        return redirect(url('/'));
    }

    //allows the user to search throughout the database for a matching entry on multiple fields
    public function searchContact(Request $request){
        $contactslist = $this->searchContactbyLike($request->search);
        return view('phonebook')
        ->with(compact('contactslist'));
    }

    public function viewProfile($contact_ID){
        $credentials=$this->getContactbyID($contact_ID);

        return view('profilepage')
        ->with(compact('credentials'));
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
    public function addContactToDB($contact_ID,$firstname,$lastname,$nickname,$age,$address,$contact,$hobbies){

        Contacts::create([
            'contact_ID' => $contact_ID,
            'firstname' =>   $firstname,
            'lastname' =>   $lastname,
            'nickname' =>   $nickname,
            'age' => $age,
            'address'=> $address,
            'contact'=> $contact,
            'hobbies'=> $hobbies
        ]);

        return;
    }

    //function that seeks out a contact ID and deletes it
    public function deleteContactbyID($contact_ID){
        Contacts::where('contact_ID',$contact_ID)->delete();

        return;
    }

    //function that seeks out a contact ID and updates it
    public function updateContactbyID($contact_ID,$firstname,$lastname,$nickname,$age,$address,$contact,$hobbies){
        Contacts::where('contact_ID',$contact_ID)
        ->update([
            'contact_ID' => $contact_ID,
            'firstname' =>   $firstname,
            'lastname' =>   $lastname,
            'nickname' =>   $nickname,
            'age' => $age,
            'address'=> $address,
            'contact'=> $contact,
            'hobbies'=> $hobbies
        ]);

        return;
    }
    
    //function that seeks out a contact that is like the item searched
    public function searchContactbyLike($searchitem){
        $searchedcontacts= 
        Contacts::where('firstname','like','%'.$searchitem.'%')
        ->orWhere('lastname','like','%'.$searchitem.'%')
        ->orWhere('nickname','like','%'.$searchitem.'%')
        ->orWhere('contact','like','%'.$searchitem.'%')
        ->orWhere('hobbies','like','%'.$searchitem.'%')  
        ->get();

        return $searchedcontacts;
    }
}
