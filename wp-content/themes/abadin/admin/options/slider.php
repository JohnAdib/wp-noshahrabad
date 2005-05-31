<?php
	$options[] = array( "name" => "slider",
	                    "sicon" => "slider-32x32.png",
	                    "type" => "heading");
    
    $options[] = array( "name" => "نمایش اسلایدر?",
                        "desc" => "اسلایدر در صفحه نخست نمایش داده شود؟",
                        "id" => $shortname."_displayslider",
                        "std" => "nivo",
                        "type" => "checkbox",
                        "class" => "tiny", //mini, tiny, small
                        "options" => $sliders_array);
    
    $options[] = array( "name" => "انتخاب مدل",
                        "desc" => "مدل اسلایدر را انتخاب کنید",
                        "id" => $shortname."_slidertype",
                        "std" => "nivo",
                        "type" => "select",
                        "class" => "tiny", //mini, tiny, small
                        "options" => $sliders_array);
    
    /*
    $options[] = array( "name" => "Number of Slider Items",
                        "desc" => "How many entries do you want to display?",
                        "id" => $shortname."_showslide",
                        "std" => "3",
                        "type" => "select",
                        "class" => "tiny", //mini, tiny, small
                        "options" => $numberofs_array);
    */
    $options[] = array( "name" => "افکت",
                        "desc" => "پیش فرض : 'random'",
                        "id" => $shortname."_slidereffect",
                        "std" => "random",
                        "type" => "select",
                        "class" => "tiny", //mini, tiny, small
                        "options" => $slidersfx_array);
						
    $options[] = array( "name" => "سرعت انیمیشن",
                        "desc" => "پیش فرض 500",
                        "id" => $shortname."_slideranimationspeed",
                        "std" => "500",
                        "type" => "text");
    $options[] = array( "name" => "مدت زمان مکث انیمیشن",
                        "desc" => "پیش فرض 3000",
                        "id" => $shortname."_sliderpausetime",
                        "std" => "3000",
                        "type" => "text");
                        
    

?>