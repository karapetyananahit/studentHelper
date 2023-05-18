<?php



//dd($monthInArmenian["Sep"]);

if(!function_exists("generateTag")){
    function generateTag ($tag, $text="", $attributes= []) {
        $generatedAttributes = "";
        foreach($attributes as $attr => $value){
            $generatedAttributes .= "$attr='$value' ";
        }

        $generatedTag = "<$tag $generatedAttributes>$text</$tag>";
        return $generatedTag;
    }
}

if(!function_exists("getNewsDate")){
    function getNewsDate () {
        $monthInArmenian = [
            "Jan" => "Հունվար",
            "Feb" => "Փետրվար",
            "Mar" => "Մարտ",
            "Apr" => "Ապրիլ",
            "May" => "Մայիս",
            "Jun" => "Հունիս",
            "Jul" => "Հուլիս",
            "Aug" => "Օգոստոս",
            "Sep" => "Սեպտեմբեր",
            "Oct" => "Հոկտեմբեր",
            "Nov" => "Նոյեմբեր",
            "Dec" => "Դեկտեմբեր",
        ];

        return $monthInArmenian[date("M")] . ' ' . date('j, Y h:i');
    }
}
