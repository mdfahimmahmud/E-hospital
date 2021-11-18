<?php

namespace App\Http\Controllers;

use BotMan\BotMan\BotMan;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;
use App\Models\Doctor;
use App\Models\Appoinment;
use BotMan\BotMan\Messages\Incoming\Answer;

class HomeController extends Controller
{
    public function reidrect(){


        if(Auth::id()){

            if(Auth::user()->usertype=='0'){

                $doctor=doctor::all();
                return view('user.home',compact('doctor'));


            }
            else{

                return view('admin.home');
            }




        }
        else{

            return redirect()->back();
        }
    }



    public function index(){

        if(Auth::id()){

            return redirect('home');
        }
        else

        $doctor=doctor::all();


        return view('user.home',compact('doctor'));
    }

    public function appoinment(Request $request){


        $data=new appoinment;
        $data->name=$request->name;
        $data->email=$request->email;
        $data->date=$request->date;
        $data->phone=$request->number;
        $data->message=$request->message;
        $data->doctor=$request->doctor;
        $data->status='In progress';


        if(Auth::id()){
        $data->user_id =  Auth::user()->id;
        }
        $data->save();
        return redirect()->back()->with('message','Appoinment Successful,We will contact with you soon ');
    }

    public function myappoinment(){

        if(Auth::id()){


            $userid=Auth::user()->id;
            $appoint=appoinment::where('user_id',$userid)->get();



        return view('user.my_appoinment',compact('appoint'));

        }
        else

        {

            return redirect()->back();
        }
    }


    public function cancel_appoint($id){

        $data=appoinment::find($id);
        $data->delete();


        return redirect()->back();
    }

    public function about(){


        return view ('user.about');
    }

    public function news(){


        return view ('user.news');
    }









    public function handle()

    {

        $botman = app('botman');

  

        $botman->hears('{message}', function($botman, $message) {

  

            if ($message == 'hi') {

                $this->askName($botman);

            }else{

                $botman->reply("write 'hi' for testing...");

            }

  

        });

  

        $botman->listen();

    }





    public function askName( $botman)

    {

        $botman->ask('Hello! What is your Name?', function($answer) {

  

            $name = $answer->getText();

  

            $this->say('Nice to meet you '.$name);

        });

    }

}



    






  


    



