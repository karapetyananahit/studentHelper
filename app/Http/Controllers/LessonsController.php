<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LessonsController extends Controller
{
    protected $view = "pages.lessons";

    public function index()
    {

        $childLessons = [
            [
                "img" => "/img/child_html_css.png",
                "name" => "HTML & CSS",
                "age" => "11-16",
                "week" => "2 դաս 1 ժամ",
                "duration" => "3 ամիս",
                "slug" => "/lessons/child/html-css",
            ],
            [
                "img" => "/img/child_js.png",
                "name" => "JavaScript",
                "age" => "11-16",
                "week" => "2 դաս 1 ժամ",
                "duration" => "3 ամիս",
                "slug" => "/lessons/child/js",
            ],
            [
                "img" => "/img/child_js_plus.png",
                "name" => "JavaScript +",
                "age" => "11-16",
                "week" => "2 դաս 1 ժամ",
                "duration" => "3 ամիս",
                "slug" => "/lessons/child/js-plus",
            ]
        ];

        $adultLessons = [
            [
                "img" => "/img/adult_from_zero.png",
                "name" => "Ծրագրավորում 0-ից",
                "age" => "16+",
                "week" => "3 դաս 2 ժամ",
                "duration" => "6 ամիս",
                "slug" => "/lessons/adult/from-zero",
            ],
            [
                "img" => "/img/adult_js.png",
                "name" => "JavaScript",
                "age" => "16+",
                "week" => "3 դաս 2 ժամ",
                "duration" => "4 ամիս",
                "slug" => "/lessons/adult/js",
            ],
            [
                "img" => "/img/adult_php.png",
                "name" => "PHP & Laravel",
                "age" => "16+",
                "week" => "3 դաս 2 ժամ",
                "duration" => "3 ամիս",
                "slug" => "/lessons/adult/php",
            ],
            [
                "img" => "/img/adult_react.png",
                "name" => "React & Redux",
                "age" => "16+",
                "week" => "3 դաս 2 ժամ",
                "duration" => "2 ամիս",
                "slug" => "/lessons/adult/react",
            ],
            [
                "img" => "/img/adult_node.png",
                "name" => "Node JS",
                "age" => "16+",
                "week" => "3 դաս 2 ժամ",
                "duration" => "2 ամիս",
//                "slug" => "/lessons/adult/node",
                "slug" => "",
            ]
        ];

        return $this->view('index', compact("childLessons", "adultLessons"));
    }

    public function childHtmlCss () {
        return $this->view("child.html_css");
    }

    public function childJs () {
        return $this->view("child.js");
    }

    public function childJsPlus () {
        return $this->view("child.js_plus");
    }

    public function adultFromZero () {
        return $this->view("adult.from_zero");
    }

    public function adultJs () {
        return $this->view("adult.js");
    }

    public function adultPhp () {
        return $this->view("adult.php");
    }

    public function adultReact () {
        return $this->view("adult.react");
    }

    public function adultNode () {
        return $this->view("adult.node");
    }
}
