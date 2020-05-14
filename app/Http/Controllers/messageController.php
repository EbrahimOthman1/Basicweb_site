<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Message;

class messageController extends Controller
{
    public function submit (Request $request){
      $this -> validate ($request , [
      'name' => 'required',
      'email'=> 'required'
      // 'message' =>'required'
      ]);

      //create new message
      $message = new Message;
      $message->name = $request->input('name');
      $message->email= $request->input('email');
      $message->message = $request->input('message');

      //save message
      $message->save();
      //redirect
      return redirect('/')->with('success', 'message sent');
    }
    public function getmessages (){
      $messages = message :: all();
      return view ('messages')->with('messages', $messages);

    }
}
