<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Str;

class HomeController extends Controller
{
    //compact,with,array
    public function Index()
    {
        $number=-14;
        $marks=75;
        $age=18;
    //    $course='MS OFFICE';
    //    $dept='Physics';
    //     return view('home.index',compact('course','dept'));
        // return view('home.index')->with(['course1'=>'MS OFFICE','course2'=>'SQL','course3'=>'PHP']);
        // return view('home.index',['product1'=>'shampoo','product2'=>'cooking oil']);
        // $data['course']=['MS OFFICE','PHP','HTML','C#'];
        // $data['dept']=['Marketing','Accounts','Academics'];
        // return view('home.index',$data);
        return view('home.index',compact('number','marks','age'));
        // return view('Home.index');
      
       
    }
    
    public function Std($name)
    {
        if($name=="aptech")
        {
            return view('home.index');
        }
        else{
            return view('home.contact');
           
        }
    }
    public function About()
    {
        return view('home.about');
    }
    
    public function contact()
    {
        return view('home.contact');
    }

    public function fluenteg()
    {
        $name="APTECH LEARNING CENTER";
        // $name=Str::replaceFirst('Learning', 'Korangi', $name);
        // $name=Str::lower($name);
        // $name=Str::start($name,'Welcome ');
        //return view('Home.fluenteg',compact('name'));
       $name=Str::of($name)
       ->replaceFirst('Learning', 'Korangi', $name)
       ->lower()
       ->start('Welcome ');
        return view('Home.fluenteg')->with('name',$name);
    }
    
}
