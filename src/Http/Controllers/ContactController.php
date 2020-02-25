<?php 

namespace Mirxan\Contact\Http\Controllers;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Mirxan\Contact\Models\Contact;
class ContactController extends Controller{

	public function index(){
		return view('contact::contact'); 
	}

	public function send(Request $request){
		// get acces to the our own config paramss
		// config('contact.send_email_to');

   		Contact::create($request->all());
   		return redirect()->back();
	}

}

?>