<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SampleController extends Controller
{
    //get
    public function Index()
    {
        return view('sample.index');
    }
    //post
    public function ShowData(Request $req)
    {
        // print_r($req->all());
        $data['Formdata']=$req->all();
        return view('sample.show',$data);

    }
    //get
    public function Test(){
        return view('sample.test');
    }
    public function TestData(Request $req)
    {
        $req->validate([
            'name'=>'required|ends_with:a,A',
            'email'=>'required|email',
            'age'=>'required|numeric|digits:2',
            'username'=>'required|alpha_dash',
            'password'=>['required','regex:/(?=^.{8,}$)((?=.*\d)|(?=.*\W+))(?![.\n])(?=.*[A-Z])(?=.*[a-z]).*$/'],
            'cpassword'=>'required|same:password'
            

        ],
        [
            'name.required'=>'name is mandatory',
            'name.max'=>'max length should be 4 characters',
            'email.required'=>'email field is mandatory',
            'email.unique'=>'email must be unique',
            'age.numerice'=>'age should be in numbers',
            'password'=>'Password (UpperCase, LowerCase, Number/SpecialChar and min 8 Chars)'

            
        ]

    );
        print_r($req->all());
    }
   
    
}
