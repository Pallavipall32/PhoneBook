<?php

namespace App\Http\Controllers;
use App\Models\phonebook;
use Illuminate\Http\Request;

class BookController extends Controller
{
    //
    public function index()
    {
        return view("home",["phonebook"=>phonebook::all()]);
    }
    public function store(Request $req)
    {
        $req->validate([
            "name" => "required",
            "contact" => "required|size:10",
            "contact2" => "required|size:10",
            "email" => "required",
            "city" => "required",
        

        ]);
   $book=new phonebook();
   $book->name=$req->name;
   $book->contact1=$req->contact;
   $book->contact2=$req->contact2;
   $book->email=$req->email;
   $book->city=$req->city;
   $book->save();
return redirect()->route("homepage")->with("msg", "data inserted successfully");
}
 public function destroy($book_id){
    $data=phonebook::find($book_id);
    $data->delete();
return redirect()->route("homepage")->with("error", "data delete successfully");
    
 }
   
 public function viewPage($index){
     $phonebook=phonebook::find($index);
     return view("book",["book"=>$phonebook]);
 }
}
