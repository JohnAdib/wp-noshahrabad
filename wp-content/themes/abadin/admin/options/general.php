<?php
$options[] = array( "name" => "genaral",
						"sicon" => "advancedsettings.png",
                        "type" => "heading");


    $options[] = array( "name" => "لوگوی شما",
                        "desc" => "با استفاده از آپلود می توانید لوگوی خود را آپلود نمایید",
                        "id" => $shortname."_clogo",
                        "std" => "$blogpath/logo.png",
                        "type" => "upload");
                        
    $options[] = array( "name" => "لوگوی متنی",
                        "desc" => "اگر شما لوگوی عکسی ندارید می توانید متنی را جهت نمایش جایگزین وارد کنید",
                        "id" => $shortname."_clogo_text",
                        "std" => "تیم میکسا",
                        "type" => "text");
						
    $options[] = array( "name" => "تعداد برترین های صفحه نخست",
                        "desc" => "برای استفاده شما باید کلیدواژه 'برتر' را در نوشته وارد کنید تا به صورت خودکار خوانده شود. در صورتی که اسلایدر باشد برترین ها نمایش داده نخواهند شد",
                        "id" => $shortname."_featuredhomeposts",
                        "std" => "2",
                        "type" => "select",
                        "class" => "tiny", //mini, tiny, small
                        "options" => $featuredhomeposts_array);
                        
    
    $options[] = array( "name" => "نوشته ها در صفحه نخست",
                        "desc" => "با استفاده از کلیدواژه 'homepost' می توانید نوشته های خاصی را در صفحه نخست نمایش دهید.اگر کلیدواژه را تنظیم نکردید آخرین نوشته ها به نمایش در خواهند آمد",
                        "id" => $shortname."_homeposts",
                        "std" => "6",
                        "type" => "select",
                        "class" => "tiny", //mini, tiny, small
                        "options" => $homeposts_array);
                        
    $options[] = array( "name" => "نحوه نمایش نوشته ها در آرشیو",
                        "desc" => "",
                        "id" => $shortname."_box_model",
                        "std" => "box",
                        "type" => "select",
                        "class" => "tiny", //mini, tiny, small
                        "options" => array("normal"=>"normal","box"=>"box"));
    
?>