@extends('layouts.front-app')

@section('content')
        <!-- Main body starts -->
        <div id="container-wrap" class="box-shad-5-DDD">
            <div id="container-wrap-border">
                <div id="container" class="clearfix">
                    <div class="homeContent">
                        <!-- Left section starts -->
                        @include('includes.institute-sidebar');
                        <!-- Left section ends -->
                        <!-- Right section -->
                        <div class="box-wrap box-pull-left">
                            <div class="metro notifications" >
                                <div class="row-fluid"> 
                                    <div class=""> 
                                        <div class=" avatar-container  homeSection span2 text-center notification-box inline">
                                            <i class="fa fa-bullhorn fa-2x"></i><h3 style="display:inline;padding-left: 3px;" class="" id="announcementCount">113</h3>
                                            <h2 class="" style="background-color:#cfedfb;">Announcements</h2>
                                        </div>

                                        <div class="avatar-container homeSection span2 text-center notification-box inline" id="att">
                                            <i class="fa fa-sticky-note fa-2x"></i><h3 style="display:inline;padding-left: 3px;" class="" id="attendencePer">0</h3>
                                            <h2 class="" style="background-color:#DDCCE2;">Attendance</h2>
                                        </div> 	

                                        <div class="avatar-container homeSection span2  text-center notification-box inline">
                                            <i class="fa fa-sticky-note-o fa-2x"></i><h3 style="display:inline;padding-left: 3px;" class="" id="assignmentCount">0</h3>
                                            <h2 class="" style="background-color:#FEC9B8;">Assignments</h2>
                                        </div>
                                        <div class="avatar-container homeSection span2  text-center notification-box inline">
                                            <i class="fa  fa-table fa-2x"></i><h3 style="display:inline;padding-left: 3px;" class="" id="assignmentCount1">0</h3>
                                            <h2 class="" style="background-color:#45fffd;">Tasks</h2>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="parentDiv">
                                <div id="containerTimeTable" >
                                    <div id="viewTimetable">
                                        <div class="avatar-container homeSection">
                                            <div class="my-timetable">
                                                <div class="today-schedule">
                                                    <span>Today's Schedule</span>
                                                </div>
                                            </div>
                                            <table id="schedule1" border="1" class="table-condensed">
                                                <tbody>
                                                    <tr>
                                                        <th>8:00 AM</th>
                                                        <th>9:00 AM</th>
                                                        <th>10:00 AM</th>
                                                    </tr>
                                                    <tr>
                                                        <td>
                                                            English
                                                            <!--                                                            <span style="width:100%; ; font-size:12px; color:#7f7f7f;">
                                                                                                                            (no lectures)
                                                                                                                        </span>-->
                                                        </td>
                                                        <td>
                                                            Maths
                                                        </td>
                                                        <td>
                                                            Science
                                                        </td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>

                                <div class="avatar-container  homeSection dashboard-head">
                                    <span class="pull-left">MY DASHBOARD</span>
<!--                                    <span class="compose-msg-link pull-right">
                                        <a id="bulletinStatus" href="javascript:void(0);" onclick="bulletinStatus();">COMPOSE</a>
                                    </span>-->
                                </div>
                                <div class="posts">
                                    <div id="alumPost196582" class="post-div">
                                        <div class="post-sender">
                                            <!--Create user image of 25X25-->
                                            <img src="img/profile_pic.png" height="25" width="25"  onclick="showPostofUser(6)">
                                            <strong>XYZ</strong> shared this with <strong>You</strong>
                                        </div>
                                        <div style="padding: 10px;" id="description196582" contenteditable="false">
                                            <p>
                                        	Dear all,<br>
                                            </p>
<!--                                            <p>
                                            	Link is : <a href="https://youtu.be/UGBUp6gLgRY" target="_blank">https://youtu.be/UGBUp6gLgRY</a></p>
                                            <p>
                                                Share the link with your friends.
                                            </p>-->
                                            <!--<div id="attachment-10317"></div>-->                                            
                                        </div>
                                        <div style="padding: 5px; background-color: #FAFAFA; border-bottom: 1px solid #F0F0F0; font-size: 11px;">
                                            <!--<a data-toggle="popover" title="" data-content="" data-original-title="" id="reply5" href="javascript:void(0)" onclick="replyToBulletin(6,86428,'employee','yes',5,'24/L/473/2399')">Reply</a> ---> 
                                            <a href="javascript:void(0);" onclick="removePost(196582)">Remove</a>
                                            <span style="float: right;"> Oct 08,2017 05:08 PM</span>
                                        </div>
                                        
                                    </div>
                                    <div id="alumPost196582" class="post-div">
                                        <div class="post-sender">
                                            <!--Create user image of 25X25-->
                                            <img src="img/profile_pic.png" height="25" width="25"  onclick="showPostofUser(6)">
                                            <strong>XYZ</strong> shared this with <strong>You</strong>
                                        </div>
                                        <div style="padding: 10px;" id="description196582" contenteditable="false">
                                            <p>
                                        	Dear all,<br>
                                            </p>
<!--                                            <p>
                                            	Link is : <a href="https://youtu.be/UGBUp6gLgRY" target="_blank">https://youtu.be/UGBUp6gLgRY</a></p>
                                            <p>
                                                Share the link with your friends.
                                            </p>-->
                                            <!--<div id="attachment-10317"></div>-->                                            
                                        </div>
                                        <div style="padding: 5px; background-color: #FAFAFA; border-bottom: 1px solid #F0F0F0; font-size: 11px;">
                                            <!--<a data-toggle="popover" title="" data-content="" data-original-title="" id="reply5" href="javascript:void(0)" onclick="replyToBulletin(6,86428,'employee','yes',5,'24/L/473/2399')">Reply</a> ---> 
                                            <a href="javascript:void(0);" onclick="removePost(196582)">Remove</a>
                                            <span style="float: right;"> Oct 08,2017 05:08 PM</span>
                                        </div>
                                        
                                    </div>
                                    <div id="alumPost196582" class="post-div">
                                        <div class="post-sender">
                                            <!--Create user image of 25X25-->
                                            <img src="img/profile_pic.png" height="25" width="25"  onclick="showPostofUser(6)">
                                            <strong>XYZ</strong> shared this with <strong>You</strong>
                                        </div>
                                        <div style="padding: 10px;" id="description196582" contenteditable="false">
                                            <p>
                                        	Dear all,<br>
                                            </p>
<!--                                            <p>
                                            	Link is : <a href="https://youtu.be/UGBUp6gLgRY" target="_blank">https://youtu.be/UGBUp6gLgRY</a></p>
                                            <p>
                                                Share the link with your friends.
                                            </p>-->
                                            <!--<div id="attachment-10317"></div>-->                                            
                                        </div>
                                        <div style="padding: 5px; background-color: #FAFAFA; border-bottom: 1px solid #F0F0F0; font-size: 11px;">
                                            <!--<a data-toggle="popover" title="" data-content="" data-original-title="" id="reply5" href="javascript:void(0)" onclick="replyToBulletin(6,86428,'employee','yes',5,'24/L/473/2399')">Reply</a> ---> 
                                            <a href="javascript:void(0);" onclick="removePost(196582)">Remove</a>
                                            <span style="float: right;"> Oct 08,2017 05:08 PM</span>
                                        </div>
                                        
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                        <!-- Right section ends -->
                    </div>
                </div>
            </div>
        </div>

        <!-- Main body ends -->
@endsection
