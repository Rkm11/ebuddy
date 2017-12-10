<?php

namespace App\Http\Controllers;

use App\User;
use App\UserInformation;
use App\UserAddress;
use App\Announcement;
use App\UserAnnouncement;
use App\PiplModules\roles\Models\Role;
use Validator;
use Auth;
use Mail;
use Hash;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use Illuminate\Foundation\Auth\ThrottlesLogins;
use Illuminate\Foundation\Auth\AuthenticatesAndRegistersUsers;

class AnnouncmentController extends Controller {

    public function __construct() {
        //  $this->middleware($this->guestMiddleware(), ['except' => 'logout']);
    }

    protected function myAnnouncment() {
        if (Auth::user()) {
            $arr_user = Auth::user();
            $user_details = $arr_user->userInformation;
            $user_personal_details = $arr_user->personalInfo;
            $user_personal_details->user_type = $user_details->user_type;
            $arr_announcements = DB::table('announcements')
                    ->select('announcements.*', 'user_announcements.is_read')
                    ->Join('user_announcements', 'announcements.id', '=', 'user_announcements.announcement_id')
                    ->where('user_announcements.user_id', '=', $arr_user->id)
                    ->orderBy('announcements.id', 'desc')
                    ->get();
//            $arr_announcements = \App\UserAnnouncement::where('user_id',$arr_user->id)->get();
//            $arr_announcements = $arr_announcements->announcement;
//            dd($arr_announcements);
            return view('announcments/announcment-list', array("user_details" => $user_personal_details,
                'title' => 'Announcments',
                'arr_announcements' => $arr_announcements));
        } else {
            $errorMsg = "Error! Something is wrong going on.";
            Auth::logout();
            return redirect("login")->with("issue-profile", $errorMsg);
        }
    }

    public function unreadMessage(Request $request) {
        if ($request->ajax()) {
            if (Auth::user()) {
                $arr_user = Auth::user();
                $arrAnnoucmentDetails = DB::table('announcements')
                        ->Join('user_announcements', 'announcements.id', '=', 'user_announcements.announcement_id')
                        ->where('user_announcements.user_id', '=', $arr_user->id)
                        ->where('user_announcements.announcement_id', '=', $request->id)
                        ->orderBy('announcements.id', 'desc')
                        ->first();
                if (!empty($arrAnnoucmentDetails) && count($arrAnnoucmentDetails) > 0) {
                    DB::table('user_announcements')
                            ->where('id', $arrAnnoucmentDetails->id)
                            ->update(['is_read' => 'Read']);
                    echo json_encode(array('code' => '0', 'message' => 'unread successfully'));
                } else {
                    echo json_encode(array('code' => '1', 'message' => 'Something went wrong.'));
                }
            }
        }
    }

}
