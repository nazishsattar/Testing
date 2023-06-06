<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class TestController extends Controller
{
    //
    public function getData()
    {
        //$data=DB::select('select * from employees where id= 9');
        $data=DB::select('select * from employees where id= ?',[9]);
        echo '<pre>';
        print_r($data);
    }
    public function insertData()
    {
        $data=DB::insert('insert into employees (Firstname,Lastname,address) values(?,?,?)',['Maham','Nasir','House # 789']);
        return $data;
    }
    
    public function updateData(){
        $data=DB::update('update employees set Firstname = ? where id= ?',['Maham Khan',9]);
        return $data;
    }
    public function deleteData()
    {
        $data=DB::delete('delete from employees where id =?',[9]);
        return $data;
    }
}
