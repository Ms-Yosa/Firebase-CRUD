<?php

namespace App\Http\Controllers\Firebase;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Kreait\Firebase\Database;


class ContactController extends Controller
{
    // DB and Table global declaration
    public function __construct(Database $database)
    {
        $this->database = $database;
        $this->tablename = 'contacts';
    }

    // Display Data
    public function index(){
        $contacts = $this->database->getReference($this->tablename)->getValue();
        return view('firebase.contact.index', compact('contacts'));
    }

    // Create Data
    public function create(Request $request){
       
        $postData = [
            // field in the database

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];
        $postRef = $this->database->getReference($this->tablename)->push($postData);

        if( $postData ){
            return redirect()->back()->with('success','New contact has been registered successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
      }
    }

    // Edit Data
    public function edit($id){
        $key=$id;
        $editdata = $this->database->getReference($this->tablename)->getChild($key)->getValue();

        if( $editdata ){
            return view('firebase.contact.edit', compact('editdata','key'));
        }else{
            return redirect()->back()->with('fail','Something went wrong, ID not found!');
      }
    }

    // Update Data
    public function update(Request $request, $id){
        $key =$id;
        $updateData = [
            // field in the database

            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'phone' => $request->phone,
        ];

        $res_updated = $this->database->getReference($this->tablename.'/'.$key)->update($updateData);

        if( $updateData ){
            return redirect()->route('contact-page')->with('success','Info has been updated successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, failed to register');
      }
    }

    // Delete Data
    public function destroy($id){
        $key =$id;
        $del_data = $this->database->getReference($this->tablename.'/'.$key)->remove();
        
        if( $del_data ){
            return redirect()->back()->with('success','Info has been deleted successfully');
        }else{
            return redirect()->back()->with('fail','Something went wrong, ID not found!');
      }
    }

}
