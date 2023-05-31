<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Models\User;

use App\Models\Food;

use App\Models\Reservation;

class AdminController extends Controller
{   
    //Start For Showing user Data(View all from user table)

    public function user(){
        $data=user::all();
        return view("admin.users",compact("data"));
    }

    //End For Showing user Data(View all from user table)



    //Start Delete user based on id

    public function deleteuser($id){
        $data=user::find($id);
        $data->delete();
        return redirect()->back();
    }

    //End Delete user based on id


     //Start For Showing Food menu Data(View all from food table)

     public function foodmenu(){
        $data=food::all();
        return view("admin.foodmenu",compact("data"));
    }

    //End For Showing Food menu Data(View all from food table)


    //Start For create food menu

    public function upload(Request $request){
        $data=new food;

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();
        
    }

    //End For create food menu


    //Start Delete food from menu based on id

    public function deletemenu($id){
        $data=food::find($id);
        $data->delete();
        return redirect()->back();
    }

    //End Delete food from menu based on id


    //to update view food menu starts here

    public function updateview($id){
        $data=food::find($id);
        return view("admin.updateview",compact("data"));
    }

    //to update view food menu ends here


    //update food starts here

    public function update(Request $request,$id){
        $data=food::find($id);

        $image=$request->image;

        $imagename =time().'.'.$image->getClientOriginalExtension();

        $request->image->move('foodimage',$imagename);

        $data->image=$imagename;

        $data->title=$request->title;

        $data->price=$request->price;

        $data->description=$request->description;

        $data->save();

        return redirect()->back();

    }

    //update food ends here


    //Start For create reservation

    public function reservation(Request $request){
        $data=new reservation;

        $data->name=$request->name;

        $data->email=$request->email;

        $data->phone=$request->phone;

        $data->guest=$request->guest;

        $data->date=$request->date;

        $data->time=$request->time;

        $data->message=$request->message;

        $data->save();

        return redirect()->back();
        
    }

    //End For create reservation



    //Start For Showing reservation data

    public function viewreservation(){
        $data=reservation::all();
        return view("admin.adminreservation",compact("data"));
    }

    //End For Showing reservation data



}
