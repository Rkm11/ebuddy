<?php
namespace App\PiplModules\contactus\Controllers;
use Auth;
use Auth\User;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Validator;
use Storage;
use App\PiplModules\contactus\Models\ContactUs;
use Mail;
use Datatables;

class ContactUsController extends Controller
{


	
        
        public function ContactPage() {
            
            return view("contactus::contact-us");
            
        }
        
        
	
	
}

