<?php
return [
   'modules'=>array(
        "admin",
		"emailtemplate",
		'contactrequest',
		'faq',
		'testimonial',
		'blog',
                'category',
                'socialconnect',  
				'ims',	
		'contentpage', // It must include always in last
    ),
	'front-view-layout-location'=>'layouts.app',
	'back-view-layout-location'=>'layouts.admin',
        'back-view-layout-login-location'=>'layouts.admin-login',
        'back-left-view-layout-location'=>'layouts.admin-left'
];