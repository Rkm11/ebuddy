<!--Top Nav -->
        <div class="header-wrap">
            <div class="main-header">
                <div class="header-logo">
                    <a title="Home" href="{{url('/')}}">
                        <h3>LOGO HERE</h3>
                        <!-- <img style="box-sizing: border-box; border: 0px; vertical-align: baseline; margin: 0px; padding: 0px;height:50px;text-align: center;" src="img/logo.png"> -->
                    </a>
                </div>
                <div class="dropdown header-options">
                    <a style="margin-top: 9px" href="{{url('/')}}/logout" class="btn btn-primary dropdown-toggle" >Logout
                    </a>
                </div>
                <div class="header-name-role">
                    <p>	 
                        <a href="{{url('/')}}/edit-profile">{{$user_details->first_name}}&nbsp;{{$user_details->last_name}}</a>
                    </p>
                </div>
            </div>
        </div>
        <!-- Top nav ends -->