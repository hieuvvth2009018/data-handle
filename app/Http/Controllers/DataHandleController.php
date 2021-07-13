<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DataHandleController extends Controller
{
    public function handlePathVariable($id){
        return $id;
    }

    public function handleQueryString(Request $request){
        $firstname =$request->get('firstName');
        $lastname =$request->get('lastname');
        $email =$request->get('email');
return view('datahandle',[
    'email'=>$email,
    'firstname'=>$firstname,
    'lastname'=>$lastname
]);
    }
    public function  returnForm(){
        return view('form-data');
    }
    public function  processForm(Request $request){
        $eventname=$request->get('eventname');
       $bandname=$request->get('bandname');
        $startdate=$request->get('startdate');
        $enddate=$request->get('enddate');
        $portfolio=$request->get('portfolio');
        $ticketprice=$request->get('ticketprice');
        $status=$request->get('status');
        return view("form-success",[
           'eventname'=>$eventname,
           'bandname'=>$bandname,
           'startdate'=>$startdate,
           'enddate'=>$enddate,
           'portfolio'=>$portfolio,
           'ticketprice'=>$ticketprice,
           'status'=>$status,
        ]);


    }

}
