<?php

namespace App\Http\Controllers;

use Auth;
use Auth\User;
use App\Http\Requests;
use Illuminate\Http\Response;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('home');		
    }
    public function permissionDenied() {

            $arr_user= Auth::user();
            $arr_user_data=$arr_user->userInformation;
            return view('permission_denied',array("user_info"=>$arr_user_data));

    }
		
	/**
	*
	*  Checks, whether user has role of administrator. If yes, then forwards to Admin Panel. If user registered from front end, then checks it's email verified status 
	*  and redirect to error page is not activated. If valid email, then checks for status and forward to respective dashboard.
	*	
	*/
	
	public function toDashboard(Request $request)
	{
		// he is admin, redirect to admin panel
            
		if(Auth::user()->isSuperadmin() || Auth::user()->isAdmin() || Auth::user()->userInformation->user_type=='1')
		{
                    if(Auth::user()->userInformation->user_status=="1")
			{   
                            return redirect("admin/dashboard");exit;
                        }
                        elseif(Auth::user()->userInformation->user_status=="0")
			{
                            $errorMsg  = "We found your account is not yet verified. Kindly see the verification email, sent to your email address, used at the time of registration.";
                        }elseif(Auth::user()->userInformation->user_status=="2")
                        {
                            $errorMsg = "We apologies, your account is blocked by administrator. Please contact to administrator for further details.";
                        }
                        Auth::logout();
			return redirect("/admin/login")->with("login-error",$errorMsg);
		}
		// he is not admin. check whether he has activated, ask him to verify the account, otherwise forward to profile page.
		else
		{
			
			if(Auth::user()->userInformation->user_status=="1")
			{
                             return redirect("profile");
			
			}
			elseif(Auth::user()->userInformation->user_status=="0" || Auth::user()->userInformation->user_status=="2" )
			{
				// some issue with the account activation. Redirect to login page.
				
				$is_register = $request->session()->pull('is_sign_up');	
				if(Auth::user()->userInformation->user_status=="0")
				{
					if($is_register)
					{
						$successMsg  = "Congratulations! your account is successfully created. We have sent email verification email to your email address. Please verify";
						
						Auth::logout();
						return redirect("login")->with("register-success",$successMsg);

					}
					else
					{
						$errorMsg  = "We found your account is not yet verified. Kindly see the verification email, sent to your email address, used at the time of registration.";
					}
				}
				else
				{
					$errorMsg = "We apologies, your account is blocked by administrator. Please contact to administrator for further details.";
				}
				
				Auth::logout();
				
				return redirect("login")->with("login-error",$errorMsg);
			}
			
		}
		
	}
	
	
	
}
