<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\contact_list_model;


class listController extends Controller
{
    //

    public function index(){

    $ContactLists =  contact_list_model::get();

    return view('list',['ContactLists'=>$ContactLists]);
    }

    public function CreateContact(){
     
        return view('create_contact');

    }
    public function ContactStore(Request  $Req){
 


    $Req->validate([
    'FirstName' => 'required|max:60',
    'LastName' => 'required|max:60',
    'Number' => 'required|unique:contact_list',
    'Email' => 'required|unique:contact_list'
    ]);

   $Contact = new contact_list_model();
   $Contact->firstname = $Req->FirstName;
   $Contact->lastname = $Req->LastName;
   $Contact->number = $Req->Number;
   $Contact->email = $Req->Email;

   $Contact->save();
   
   return redirect('/')->withSuccess('Contact name has been added successfully');

    }

    public function ContactEdit($id){

      //  dd($id);
       $Contact = contact_list_model::where('id',$id)->first();
        return view ('edit_contact',['Contact'=>$Contact]);
    }

    public function ContactUpdate(Request $Req ,$id){
         $Contact = contact_list_model::where('id',$id)->first();
         $Contact->firstname = $Req->FirstName;
         $Contact->lastname = $Req->LastName;
         $Contact->number = $Req->Number;
         $Contact->email = $Req->Email;
         $Contact->save();
         return redirect('/');
      }

      public function ContactDelete($id){
        $Contact = contact_list_model::where('id',$id)->first();
        $Contact->delete();
        return redirect('/');
      }

}
