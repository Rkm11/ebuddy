@inject('request', 'Illuminate\Http\Request')

 <!-- Left section starts -->
                        <div class="user-left-section">
                            <!-- user profile pic -->
                            <div class="avatar-container homeSection" >
                                @if(isset($user_details->profie_pic) && $user_details->profie_pic!="")
                                <img src="public/img/user_images/{{$user_details->profie_pic}}" alt="Photo" >
                                @else
                                <img src="public/img/default-user.png" alt="Photo" >
                                @endif
                                <div>
                                    <span id="rollNo">
                                        Roll No.&nbsp;{{$user_details->roll_no}},&nbsp;
                                        {{$user_details->standard}}<br>{{$user_details->batch_name}}
                                    </span>
                                </div>
                            </div>
                            <!-- user profile pic ends -->
                            <!--Left section menu-->
                            <div class="left-menu">
                                <ul class="user-left-list">
                                    <li class="user-menu">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-user-circle fa-2x"></i>Profile
                                        </a>
                                    </li>
                                    <li class="user-menu">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-list fa-2x"></i>Syllabus
                                        </a>
                                    </li>
                                    <li class="user-menu">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-calendar-plus-o fa-2x"></i>Calendar
                                        </a>
                                    </li>
                                    <li class="user-menu">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-calendar fa-2x"></i>Time Table
                                        </a>
                                    </li>
                                    <li class="user-menu">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-map-signs fa-2x"></i>Leave Details
                                        </a>
                                    </li>
                                    <li class="user-menu">
                                        <a href="javascript:void(0);">
                                            <i class="fa fa-money fa-2x"></i>Fees Details
                                        </a>
                                    </li>
                                </ul>
                            </div>
                            <!--Left section menu ends-->
                        </div>
                        <!-- Left section ends -->
