<?php
 
namespace App\Http\Controllers;
 
use Illuminate\Http\Request;
use App\Http\Requests;
use App\ContactUS;
 
class ContactUSController extends Controller {
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactUS() {
       return view('contact');
   }
 
   /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Http\Response
    */
   public function contactSaveData(Request $request) {
        $this->validate($request, [
        'name' => 'required',
        'email' => 'required|email',
        'message' => 'required'
        ]);
 
        ContactUS::create($request->all());

        \Session::flash('message', 'Thanks for contacting us!'); 
        \Session::flash('alert-class', 'alert-success');
        
        \Mail::send('emails.contactus',
        array(
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'user_message' => $request->get('message')
        ), function($message) use ($request) {
            $message->from($_ENV['EMAIL']);
            $message->to($_ENV['EMAIL'], 'Admin')->subject('Attn: Freelancing Contact Form');
        });

        return back()->with('success', 'Thanks for contacting us!'); 
    }
}

?>