<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\employee;
use App\Models\country;

class HomeController extends Controller
{
    
    public function redirect(){

    
            $data = employee::All();

            return view('Admin.home', compact('data'));
      
    }

    public function AddEmployee(){
        return view('Admin.AddEmployee');
    }

    public function uploademployee(Request $request){

        $data = new employee;

        $data -> fname = $request -> fname;

        $data -> lname = $request -> lname;

        $data -> address = $request -> address;

        $data -> phone = $request -> phone;

        $data -> departiment = $request -> departiment;

        $data -> country = $request -> country;

        $data->save();

        return redirect('/')->with('message','employee created successfull');


    }

    public function country(){

        return view('Admin.country');



    }


    public function uploadcountry(Request $request){

        $data = new country;

        $data -> name = $request -> name;

        $data -> country_code = $request -> country_code;

        $data -> save();

        return redirect("/");

    }

    public function delete($id){

        $data = employee::find($id);

        $data -> delete();

        return redirect()->back();



    }

    public function update($id){

        $data = employee::find($id);

        return view('Admin.update', compact('data'));
    }

    public function updateemployee(Request $request, $id){

        $data = employee::find( $id);

        $data -> fname = $request -> fname;

        $data -> lname = $request -> lname;

        $data -> address = $request -> address;

        $data -> phone = $request -> phone;

        $data -> departiment = $request -> departiment;

        $data -> country = $request -> country;

        $data->save();

        return redirect("/")->with('message','employee updated successfull');


    }

  /*  public function showemployee()
    {


      $data = employee::where('phone', $employee-> phone)-> get();

      $count = employee::where('phone', $employee->phone)->count();

      return view('Admin.home',compact('count', 'data'));
    }
    */
}
