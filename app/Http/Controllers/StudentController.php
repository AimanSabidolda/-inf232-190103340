<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StudentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function get_students()
    {
        //
      static $students=array(0=>"Dauren",1=>"Talgat",2=>"Maksat");
      return $students;
    }
    public function get_students1()
    {
        //
      static $students=array(0=>13,1=>20,2=>2);
      return $students;
    }

    /**
     * Show the form for creating a new resource.
     *
    
     */
    public function get_students2()
    {
        //
      static $students=array(0=>"13.01.2008",1=>"14.3.2001",2=>"19.11.2019");
      return $students;
    }

    public function name_of_student($id)
    {
        //
        $students=$this->get_students();
        return view("new1",["name"=>$students[$id]]);
    }


    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function age($age)
    {
        //
       
        return view("new2");

    }
    public function date($id)
    {
        //
        $students=$this->get_students2();
        return view("new3",["date"=>$students[$id]]);

    }

   
    
    
   
}
