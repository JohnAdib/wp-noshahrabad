<?php
    $options[] = array( "name" => "contact",
    					"sicon" => "mail.png",
                        "type" => "heading");
    
    $options[] = array( "name" => "خلاصه اطلاعات نماس",
                        "id" => $shortname."_contact_summary",
                        "std" => "با خیال راحت اطلاعات تماس را پر کنید تا ما در سریع ترین زمان ممکن به شما پاسخ دهیم...",
                        "type" => "textarea");
                        
    $options[] = array( "name" => "رایانامه E-Mail",
                        "id" => $shortname."_contact_email",
                        "std" => "info@yoursite.com",
                        "type" => "text");
                        
    $options[] = array( "name" => "تلفن",
                        "id" => $shortname."_contact_phone",
                        "std" => "+98 000-000-0000",
                        "type" => "text");
						
	$options[] = array( "name" => "فکس",
                        "id" => $shortname."_contact_fax",
                        "std" => "+98 000-000-0000",
                        "type" => "text");
                        
	$options[] = array( "name" => "آدرس",
                        "id" => $shortname."_contact_address",
                        "std" => "شهر، آدرس، کدپستی",
                        "type" => "text");
	    

    $options[] = array( "name" => "روی نقشه",
                        "id" => $shortname."_contact_map",
                        "std" => "",
                        "type" => "textarea");
                        
    
    
    
?>