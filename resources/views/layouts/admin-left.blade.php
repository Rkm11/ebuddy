<?php 
$segments=Request::segment(2);
$segment_prameter='';
$segment_value='';
switch ($segments) {
                case 'manage-roles':
                    $segment_prameter = 'role';
                    $segment_value = 'global';
                    break;

		case 'update-role':
                     $segment_prameter = 'role';
                    $segment_value = 'global';
                    break;

		case 'roles':
                     $segment_prameter = 'role';
                    $segment_value = 'global';
                    break;
		
		case 'global-settings':
                     $segment_prameter = 'globalsetting';
                    $segment_value = 'global';
                    break;
	
		case 'update-global-setting':
                    $segment_prameter = 'globalsetting';
                    $segment_value = 'global';
                    break;

		case 'countries':
                    $segment_prameter = 'countries';
                    $segment_value = 'global';
                    break;
		
		case 'countries':
                    $segment_prameter = 'countries';
                    $segment_value = 'global';
                    break;
		
		case 'states':
                    $segment_prameter = 'states';
                    $segment_value = 'global';
                    break;
                
		case 'cities':
                    $segment_prameter = 'cities';
                    $segment_value = 'global';
                    break;
		
		case 'admin-users':
                    $segment_prameter = 'admin-user';
                    $segment_value = 'user';
                    break;
	
		case 'manage-users':
                    $segment_prameter = 'register-user';
                    $segment_value = 'user';
                    break;
		
		case 'content-pages':
                    $segment_prameter = 'content-pages';
                    $segment_value = 'cms';
                    break;

		case 'email-templates':
                    $segment_prameter = 'email-template';
                    $segment_value = 'email';
                    break;
	
		case 'categories_list':
                    $segment_prameter = 'category';
                    $segment_value = 'category';
                    break;
                
		case 'category':
                    $segment_prameter = 'category';
                    $segment_value = 'category';
                    break;

		case 'contact-request-categories':
                    $segment_value = 'contact';
                    break;

		case 'contact-requests':
                    $segment_value = 'contact';
                    break;
		
		case 'faq-categories':
                    $segment_value = 'faq';
                    break;

		case 'faqs':
                    $segment_value = 'faq';
                    break;

		case 'blog-categories':
                    $segment_value = 'blog';
                    break;

		case 'blog':
                    $segment_value = 'blog';
                    break;


		case 'testimonials':
                    $segment_value = 'testimonial';
                    break;

                case 'newsletters':
                    $segment_value = 'newsletters';
                    break;






            }


?>
<div class="page-sidebar-wrapper">

		<div class="page-sidebar navbar-collapse collapse">
		
			<ul class="page-sidebar-menu " data-keep-expanded="false" data-auto-scroll="true" data-slide-speed="200">
				<li class="start active ">
					<a href="{{url("admin/dashboard")}}">
					<i class="icon-home"></i>
					<span class="title">Dashboard</span>
					</a>
				</li>
                              
                                <li  class="@if($segment_value=='global') open @endif">
					<a href="javascript:void(0);">
					<i class="glyphicon glyphicon-cog"></i>
					<span class="title">Manage Global Values</span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu" @if($segment_value=='global') style='display:block' @endif>
                                               @if(Auth::user()->hasPermission('view.roles')==true || Auth::user()->isSuperadmin())
						<li class="@if($segment_prameter=='role') active @endif"> 
							<a href="{{url('admin/manage-roles')}}">
							<i class="glyphicon glyphicon-check"></i> Manage Roles {{ Route::getCurrentRoute()->getPrefix()}}
                                                        </a>
						</li>
                                                @endif
                                                
                                                   @if(Auth::user()->hasPermission('view.global-settings')==true || Auth::user()->isSuperadmin())
                                                <li class="@if($segment_prameter=='globalsetting') active @endif"> 
							<a href="{{url('admin/global-settings')}}">
							<i class="glyphicon glyphicon-cog"></i> Manage Global Settings
                                                        </a>
						</li>
                                                @endif
                                                
                                                   @if(Auth::user()->hasPermission('view.email-templates')==true || Auth::user()->isSuperadmin())
                                                <li class="@if($segment_prameter=='countries') active @endif"> 
							<a href="{{url('admin/countries/list')}}">
							<i class="glyphicon glyphicon-globe"></i> Manage Countries
                                                        </a>
						</li>
                                                  @endif
                                                   @if(Auth::user()->hasPermission('view.manage-countries')==true || Auth::user()->isSuperadmin())
                                                <li class="@if($segment_prameter=='states') active @endif"> 
							<a href="{{url('admin/states/list')}}">
							<i class="glyphicon glyphicon-globe"></i> Manage States
                                                        </a>
						</li>
                                                  @endif
                                                   @if(Auth::user()->hasPermission('view.manage-cities')==true || Auth::user()->isSuperadmin())
                                                <li class="@if($segment_prameter=='cities') active @endif"> 
							<a href="{{url('admin/cities')}}">
							<i class="glyphicon glyphicon-globe"></i> Manage Cities
                                                        </a>
						</li>
                                                  @endif
						
					</ul>
				</li>
				<li  class="@if($segment_value=='user') open @endif">
					<a href="javascript:void(0);">
					<i class="icon-user"></i>
					<span class="title">Manage Users</span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu" @if($segment_value=='user') style='display:block' @endif>
                                                @if(Auth::user()->hasPermission('view.admin-users')==true || Auth::user()->isSuperadmin())
                                               
						<li class="@if($segment_prameter=='admin-users') active @endif"> 
							<a href="{{url('admin/admin-users')}}">
							 Manage Admin Users</a>
						</li>
                                                @endif
                                                
                                                    @if(Auth::user()->hasPermission('view.registered-users')==true || Auth::user()->isSuperadmin())
                                               
                                                <li class="@if($segment_prameter=='register-user') active @endif"> 
							<a href="{{url('admin/manage-users')}}">
							 Manage Registered Users</a>
						</li>
                                              @endif
						
					</ul>
				</li>
                                   @if(Auth::user()->hasPermission('view.content-pages')==true || Auth::user()->isSuperadmin())
                                               
                                <li class="start">
					<a href="{{url("admin/content-pages/list")}}">
					<i class="icon-list"></i>
					<span class="title">Manage CMS Pages</span>
					</a>
				</li>
                                @endif
                                
                                 @if(Auth::user()->hasPermission('view.email-templates')==true || Auth::user()->isSuperadmin())
                                               
                                  <li class="start ">
					<a href="{{url("admin/email-templates/list")}}">
					<i class="icon-list"></i>
					<span class="title">Manage Email template</span>
					</a>
				</li>
                                @endif
                                
                                 @if(Auth::user()->hasPermission('view.category')==true || Auth::user()->isSuperadmin())
                                               
                                  <li class="start ">
					<a href="{{url("admin/categories-list")}}">
					<i class="icon-list"></i>
					<span class="title">Manage Categories</span>
					</a>
				</li>
                                @endif
                                 @if(Auth::user()->hasPermission('view.contact-requests')==true || Auth::user()->isSuperadmin())
                               <li>
					<a href="javascript:void(0);">
					<i class="icon-envelope"></i>
					<span class="title">Manage Contact Us</span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
                                                @if(Auth::user()->hasPermission('view.admin-users')==true || Auth::user()->isSuperadmin())
                                               
						<li>
                                                    <a href="{{url("admin/contact-request-categories")}}">Manage Contact Categories</a>
						</li>
                                                
                                                @endif
                                                
                                                    @if(Auth::user()->hasPermission('view.registered-users')==true || Auth::user()->isSuperadmin())
                                               
                                                <li>
							 <a href="{{url("admin/contact-requests")}}">Manage Contact Requests</a>
						</li>
                                              @endif
						
					</ul>
				</li>
					
                                @endif
                             @if(Auth::user()->hasPermission('view.faqs')==true || Auth::user()->isSuperadmin())
                               <li>
					<a href="javascript:void(0);">
					<i class="icon-question"></i>
					<span class="title">Manage Faq's</span>
					<span class="arrow"></span>
					</a>
					<ul class="sub-menu">
                                                @if(Auth::user()->hasPermission('view.faq-categories')==true || Auth::user()->isSuperadmin())
                                               
						<li>
                                                    <a href="{{url("admin/faq-categories")}}">Manage Faq Categories</a>
						</li>
                                                
                                                @endif
                                                
                                                    @if(Auth::user()->hasPermission('view.faqs')==true || Auth::user()->isSuperadmin())
                                               
                                                <li>
							 <a href="{{url("admin/faqs")}}">Manage Faq's</a>
						</li>
                                              @endif
						
					</ul>
				</li>
					
                                @endif
                                
                               @if(Auth::user()->hasPermission('view.blog')==true || Auth::user()->isSuperadmin())
                               <li>
					<a href="javascript:void(0);">
                                            <i class="icon-list"></i>
                                            <span class="title">Manage Blogs</span>
                                            <span class="arrow"></span>
					</a>
					<ul class="sub-menu">
                                                @if(Auth::user()->hasPermission('view.blog-categories')==true || Auth::user()->isSuperadmin())
                                               
						<li>
                                                    <a href="{{url("/admin/blog-categories")}}">Manage Blog Categories</a>
						</li>
                                                
                                                @endif
                                                
                                                    @if(Auth::user()->hasPermission('view.blog')==true || Auth::user()->isSuperadmin())
                                               
                                                <li>
							 <a href="{{url("admin/blog")}}">Manage Blogs</a>
						</li>
                                              @endif
						
					</ul>
				</li>
                                @endif
                                  @if(Auth::user()->hasPermission('view.testimonials')==true || Auth::user()->isSuperadmin())
                                               
                                <li class="start">
					<a href="{{url("admin/testimonials/list")}}">
					  <i class="icon-list"></i>
					 <span class="title">Manage Testimonials</span>
					</a>
				</li>
                                
                                @endif
                                  @if(Auth::user()->hasPermission('view.testimonials')==true || Auth::user()->isSuperadmin())
                                               
                                <li class="start">
					<a href="{{url("admin/testimonials/list")}}">
					  <i class="icon-list"></i>
					 <span class="title">Manage Testimonials</span>
					</a>
				</li>
                                @endif
                                
			</ul>
			<!-- END SIDEBAR MENU -->
		</div>
	</div>