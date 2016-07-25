<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //Inserting records in role table
            DB::table('roles')->insert([
                'name' => 'Super Admin',
                'slug' => 'superadmin',
                'description' => 'Full Priviliges',
                'level'=>'1'    
            ]);
			
            DB::table('roles')->insert([
                'name' => 'Registered Users',
		'slug' => 'registered.user',
		'description' => 'For Registered Users',
                'level'=>'2' 
            ]);
            DB::table('roles')->insert([
                'name' => 'Admin Users',
		'slug' => 'subadminuser',
		'description' => 'For Admin Users',
                'level'=>'1' 
            ]);
	 //end
            
        //insrting permissions to the table
          DB::table('permissions')->insert(['name'=>'View Roles','slug'=>'view.roles','description'=>'Using this permission, the specified personnel can view Roles Page','model'=>'Role','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Roles','slug'=>'update.roles','description'=>'Using this permission, the specified personnel can update Roles Page','model'=>'Role','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Roles','slug'=>'create.roles','description'=>'Using this permission, the specified personnel can create a Role','model'=>'Role','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Roles','slug'=>'delete.roles','description'=>'Using this permission, the specified personnel can view Roles Page','model'=>'Role','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
         
          DB::table('permissions')->insert(['name'=>'View Globalsettings','slug'=>'view.global-settings','description'=>'Using this permission, the specified personnel can view globalsettings','model'=>'Globalsettings','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Globalsetting','slug'=>'update.global-settings','description'=>'Using this permission, the specified personnel can update Globalsettings','model'=>'Role','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
		
          DB::table('permissions')->insert(['name'=>'View Countries','slug'=>'view.manage-countries','description'=>'Using this permission, the specified personnel can view countries list','model'=>'Countries','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Country','slug'=>'update.countries','description'=>'Using this permission, the specified personnel can update country','model'=>'Countries','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Country','slug'=>'delete.countries','description'=>'Using this permission, the specified personnel can delete country','model'=>'Countries','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Country','slug'=>'create.countries','description'=>'Using this permission, the specified personnel can create country','model'=>'Countries','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
		
          DB::table('permissions')->insert(['name'=>'View States','slug'=>'view.manage-states','description'=>'Using this permission, the specified personnel can view states list','model'=>'States','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update State','slug'=>'update.states','description'=>'Using this permission, the specified personnel can update state','model'=>'States','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete States','slug'=>'delete.states','description'=>'Using this permission, the specified personnel can delete state','model'=>'States','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create States','slug'=>'create.states','description'=>'Using this permission, the specified personnel can create state','model'=>'States','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
		
          DB::table('permissions')->insert(['name'=>'View Cities','slug'=>'view.manage-cities','description'=>'Using this permission, the specified personnel can view cities list','model'=>'Cities','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update City','slug'=>'update.cities','description'=>'Using this permission, the specified personnel can update city','model'=>'Cities','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete City','slug'=>'delete.cities','description'=>'Using this permission, the specified personnel can delete city','model'=>'Cities','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create City','slug'=>'create.cities','description'=>'Using this permission, the specified personnel can create city','model'=>'Cities','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
		
          DB::table('permissions')->insert(['name'=>'View Admin user','slug'=>'view.admin-users','description'=>'Using this permission, the specified personnel can view admin users list','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Admin user','slug'=>'update.admin-users','description'=>'Using this permission, the specified personnel can update user','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Admin user','slug'=>'delete.admin-users','description'=>'Using this permission, the specified personnel can delete user','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Admin user','slug'=>'create.admin-users','description'=>'Using this permission, the specified personnel can create user','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
		
          DB::table('permissions')->insert(['name'=>'View Registered user','slug'=>'view.registered-users','description'=>'Using this permission, the specified personnel can view registered users list','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Registered user','slug'=>'create.register-users','description'=>'Using this permission, the specified personnel can update user','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Registered user','slug'=>'delete.registered-users','description'=>'Using this permission, the specified personnel can delete user','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Registered user','slug'=>'update.registered-users','description'=>'Using this permission, the specified personnel can create user','model'=>'Users','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
		
            
          DB::table('permissions')->insert(['name'=>'View Content Pages','slug'=>'view.content-pages','description'=>'Using this permission, the specified personnel can view content list','model'=>'ContentPages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Content Page','slug'=>'update.content-pages','description'=>'Using this permission, the specified personnel can update user','model'=>'ContentPages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          	
          DB::table('permissions')->insert(['name'=>'View Content Pages','slug'=>'view.email-templates','description'=>'Using this permission, the specified personnel can view email template list','model'=>'Emailtemplates','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Emailtemplate Page','slug'=>'update.email-templates','description'=>'Using this permission, the specified personnel can update email template','model'=>'Emailtemplates','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
           
             	
          DB::table('permissions')->insert(['name'=>'View Categories','slug'=>'view.categories','description'=>'Using this permission, the specified personnel can view category list','model'=>'Categories','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Categories','slug'=>'update.categories','description'=>'Using this permission, the specified personnel can update category','model'=>'Categories','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Categories','slug'=>'delete.categories','description'=>'Using this permission, the specified personnel can delete category','model'=>'Categories','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Categories','slug'=>'create.categories','description'=>'Using this permission, the specified personnel can create category','model'=>'Categories','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
           
          DB::table('permissions')->insert(['name'=>'View Contact Request','slug'=>'view.contact-requests','description'=>'Using this permission, the specified personnel can view contact request','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Contact Request Reply','slug'=>'do.contact-reply','description'=>'Using this permission, the specified personnel can reply','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Contact Request','slug'=>'delete.contact-requests','description'=>'Using this permission, the specified personnel can delete contact request','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'View Contact Request Category','slug'=>'view.contact-request-categories','description'=>'Using this permission, the specified personnel can view category list','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Contact Request Category','slug'=>'update.contact-requests-categories','description'=>'Using this permission, the specified personnel can update category','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Contact Request Category','slug'=>'delete.contact-requests-categories','description'=>'Using this permission, the specified personnel can delete category','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Create Requestcategories','slug'=>'create.contact-request-categories','description'=>'Using this permission, the specified personnel can create category','model'=>'Contactpages','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
           
          DB::table('permissions')->insert(['name'=>'View Faq ','slug'=>'view.faqs','description'=>'Using this permission, the specified personnel can view Faqs','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Faq','slug'=>'create.faqs','description'=>'Using this permission, the specified personnel can create faq','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Faq','slug'=>'update.faqs','description'=>'Using this permission, the specified personnel can update faq','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Faq','slug'=>'delete.faqs','description'=>'Using this permission, the specified personnel can delete faq','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'View   Faq Category','slug'=>'view.faq-categorie','description'=>'Using this permission, the specified personnel can update category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Contact Request Category','slug'=>'update.faq-category','description'=>'Using this permission, the specified personnel can delete category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Faq category','slug'=>'create.faq-category','description'=>'Using this permission, the specified personnel can create category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Faq category','slug'=>'delete.faq-category','description'=>'Using this permission, the specified personnel can create category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
           
          DB::table('permissions')->insert(['name'=>'View   Testimonial','slug'=>'view.testimonials','description'=>'Using this permission, the specified personnel can view tetimonials','model'=>'Tetimonials','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Testimonial','slug'=>'create.testimonials','description'=>'Using this permission, the specified personnel can create tetimonials','model'=>'Tetimonials','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Testimonial','slug'=>'update.testimonials','description'=>'Using this permission, the specified personnel can update tetimonials','model'=>'Tetimonials','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Testimonial','slug'=>'delete.testimonials','description'=>'Using this permission, the specified personnel can delete tetimonials','model'=>'Tetimonials','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
         
          DB::table('permissions')->insert(['name'=>'View Blogs ','slug'=>'view.blog','description'=>'Using this permission, the specified personnel can view Blogs','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create Blog','slug'=>'create.blogPost','description'=>'Using this permission, the specified personnel can create blog','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update Blog','slug'=>'update.blogPost','description'=>'Using this permission, the specified personnel can update blog','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete Blog','slug'=>'delete.blogPost','description'=>'Using this permission, the specified personnel can delete blog','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'View   blog Category','slug'=>'view.blog-categories','description'=>'Using this permission, the specified personnel can update category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Update blog Category','slug'=>'update.blog-category','description'=>'Using this permission, the specified personnel can delete category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Create blog category','slug'=>'create.blog-category','description'=>'Using this permission, the specified personnel can create category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
          DB::table('permissions')->insert(['name'=>'Delete blog category','slug'=>'delete.blog-category','description'=>'Using this permission, the specified personnel can create category','model'=>'Faqs','created_at'=>date("Y-m-d H:i:s"),'updated_at'=>date("Y-m-d H:i:s")]);
         
          
        //inserting super admin details in user table
            DB::table('users')->insert([
                'email' => 'anuj@panaceatek.com',
		'password' => bcrypt('Pass@12345'),
                'created_at'=>date('Y-m-d h:i:s'),
            ]);
			
             DB::table('user_informations')->insert([
                'first_name' => 'Admin',
                'last_name' => 'Admin',
                'user_id' => '1',
                'user_status'=>'1',
                'user_type'=>'1',
                'gender'=>'3'
            ]);
		
            DB::table('role_user')->insert([
                    'role_id' => '1',
                    'user_id' => '1'
            ]);
            
	   //inserting Default values in global Setting	
		DB::table('global_settings')->insert(['name'=>'Site Email','value'=>'anuj@panaceatek.com','validate'=>'required|email','slug'=>'site-email']);
		DB::table('global_settings')->insert(['name'=>'Site Title','value'=>'p996','validate'=>'required','slug'=>'site-title']);
		DB::table('global_settings')->insert(['name'=>'Contact Email','value'=>'sofia@panaceatek.com','validate'=>'required|email','slug'=>'contact-email']);
		DB::table('global_settings')->insert(['name'=>'Date Format','value'=>'Y-m-d H:i:s','validate'=>'required','slug'=>'date-format']);
		DB::table('global_settings')->insert(['name'=>'Per Page Records','value'=>'10','validate'=>'required|numeric','slug'=>'per-page-record']);
		DB::table('global_settings')->insert(['name'=>'Facebook Page Link','value'=>'http://www.facebook.com/','validate'=>'required|url','slug'=>'facebook-link']);
		DB::table('global_settings')->insert(['name'=>'Youtube Page Link','value'=>'http://youtube.com/','validate'=>'required|url','slug'=>'youtube-link']);
		DB::table('global_settings')->insert(['name'=>'Instragram Page Link','value'=>'https://instagram.com/','validate'=>'required|url','slug'=>'instagram-link']);
		DB::table('global_settings')->insert(['name'=>'Twitter Page Link','value'=>'http://twitter.com','validate'=>'required|url','slug'=>'twitter-link']);
		DB::table('global_settings')->insert(['name'=>'Flicker Page Link','value'=>'https://www.flickr.com/','validate'=>'required|url','slug'=>'flickr-link']);
		DB::table('global_settings')->insert(['name'=>'Tumblr Page Link','value'=>'https://www.tumblr.com/','validate'=>'required|url','slug'=>'tumblr-link']);
		DB::table('global_settings')->insert(['name'=>'Google+ Page Link','value'=>'https://plus.google.com/','validate'=>'required|url','slug'=>'google-link']);
		DB::table('global_settings')->insert(['name'=>'Zip Code','value'=>'71423','validate'=>'required','slug'=>'zip-code']);
		DB::table('global_settings')->insert(['name'=>'Street','value'=>'pune','validate'=>'required','slug'=>'street']);
		DB::table('global_settings')->insert(['name'=>'City','value'=>'pune','validate'=>'required','slug'=>'city']);
		DB::table('global_settings')->insert(['name'=>'Address','value'=>'Salunkhe vihar, Wanowari','validate'=>'required','slug'=>'address']);
		DB::table('global_settings')->insert(['name'=>'Contact Us Page Short Description','value'=>'Please use below section to contact us ','validate'=>'required','slug'=>'contact-us-page-short-descripton-text']);
		DB::table('global_settings')->insert(['name'=>'Phone No','value'=>'-8120247546','validate'=>'required','slug'=>'phone-no']);
		DB::table('global_settings')->insert(['name'=>'Site Logo','value'=>'1450941897.png','validate'=>'required|image','slug'=>'site-logo']);
		
           //inserting Default values in email template	    
		DB::table('email_templates')->insert([
                'subject' => 'Reset your password',
                'locale' => 'en',
                'template_keywords' => '{{$RESET_LINK}},{{$USER_NAME}}',
                'template_key' => 'request-reset-password',
                'html_content'=>'<html><body>Hello |USER_NAME|, Please see below link to reset your password.<br><br><a href="|REST_LINK|">|REST_LINK|</a><br></br>Thanks,<br>PIPL Lib Team'
            ]);
            DB::table('email_templates')->insert([
                'subject' => 'Registraion completed successfully',
                'locale' => 'en',
                'template_keywords' => '{{$VERIFICATION_LINK}},{{$FIRST_NAME}}, {{$LAST_NAME}}',
                'template_key' => 'registration-successfull',
                'html_content'=>'<html><body>Hello {{$FIRST_NAME}} {{$LAST_NAME}},   <br>
                                Your registration has been completed successfully!

                                Please activate your account by clicking on the link provided belowground

                               {{$VERIFICATION_LINK}}
                                Thanks,<br>PIPL Lib Team'
            ]);
            DB::table('email_templates')->insert([
                'subject' => 'Registraion completed successfully as an Admin user',
                'locale' => 'en',
                'template_keywords' => '{{$VERIFICATION_LINK}},{{$FIRST_NAME}}, {{$LAST_NAME}}',
                'template_key' => 'admin-registration-successfull',
                'html_content'=>'<html><body>Hello {{$FIRST_NAME}} {{$LAST_NAME}},   <br>
                                Your registration has been completed successfully!

                                Please activate your account by clicking on the link provided belowground

                               {{$VERIFICATION_LINK}}
                                Thanks,<br>PIPL Lib Team'
            ]);
          
            DB::table('email_templates')->insert([
            'subject' => 'Email has been updated',
            'locale' => 'en',
            'template_keywords' => '{{$VERIFICATION_LINK}},{{$FIRST_NAME}}, {{$LAST_NAME}}',
            'template_key' => 'email-change',
            'html_content'=>'<html><body>Hello {{$FIRST_NAME}} {{$LAST_NAME}}, Your email has been changed successfully. Please verify your email by clicking on the link provided belowground
                                <br><br><a href="{{$VERIFICATION_LINK}}">{{$VERIFICATION_LINK}}</a><br></br>
                         Thanks,
                         Code Library Team'
            ]);
            
            DB::table('email_templates')->insert([
            'subject' => 'Email has been updated',
            'locale' => 'en',
            'template_keywords' => '{{$VERIFICATION_LINK}},{{$FIRST_NAME}}, {{$LAST_NAME}}',
            'template_key' => 'admin-email-change',
            'html_content'=>'<html><body>Hello {{$FIRST_NAME}} {{$LAST_NAME}}, Your email has been changed successfully. Please verify your email by clicking on the link provided belowground
                                <br><br><a href="{{$VERIFICATION_LINK}}">{{$VERIFICATION_LINK}}</a><br></br>
                         Thanks,
                         Code Library Team'
            ]);
           DB::table('email_templates')->insert([
            'subject' => 'Contact Request',
            'locale' => 'en',
            'template_keywords' => '{{$USER_NAME}},{{$USER_EMAIL}}, {{$USER_PHONE}},  {{$CATEGORY}}, {{$SUBJECT}}, {{$MESSAGE}}, {{$REFERENCE}}',
            'template_key' => 'contact-request',
            'html_content'=>'<p>Dear Admin, A user {{$USER_NAME}} has submit an contact request. Please check admin Panel and manage accordingly Below are the contact request details:- Name: {{$USER_NAME}} Email: {{$USER_EMAIL}} Phone: {{$USER_PHONE}} Category: {{$CATEGORY}} SUBJECT: {{$SUBJECT}} Message: {{$MESSAGE}} REFERENCE No: {{$REFERENCE}} Thanks,<br />
                                PIPL Lib Team</p>'
            ]);
            DB::table('email_templates')->insert([
            'subject' => 'Contact Request Reply',
            'locale' => 'en',
            'template_keywords' => '{!! $MESSAGE !!}',
            'template_key' => 'contact-request-reply',
            'html_content'=>'<html><body style="font-family:Arial, Helvetica, sans-serif;font-size:12px;">{!! $MESSAGE !!}</body></html>'
            ]);
               
          //inserting Default values in cms template	           
           DB::table('content_pages')->insert([
                'page_alias' => 'about-us',
                'page_status' => '1',
                'created_by' => '1'
            ]);
           
            DB::table('content_page_translations')->insert([
                'page_title' => 'About Us Page',
                'page_content' => 'About Us Testing Text. About Us Testing Text. About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text
                                   About Us Testing Text. About Us Testing Text. About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text
                                   About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text.About Us Testing Text.',
                'page_seo_title' => 'About Us',
                'page_meta_keywords' => 'About Us',
                'page_meta_descriptions' => 'About Us',
                'locale' => 'en',
                'content_page_id' => '1',
            ]);
		
    }
    
}
