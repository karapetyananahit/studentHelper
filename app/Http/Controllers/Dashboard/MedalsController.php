<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class MedalsController extends Controller
{
    protected $view = "dashboard.medals";

    public function index(){
        $medals = [
            [
                "points" => "30, 20, 15, 5",
                "name" => "Լավագույն արդյունք",
                "images" => [
                    "/img/medal_gold.png",
                    "/img/medal_silver.png",
                    "/img/medal_bronze.png",
                    "/img/medal_top_10.png"
                ],
                "text" => "Տրվում է ամսվա ընթացքում ամենաշատ հարցաշարերին ճիշտ պատասխանած անձանց"
            ],
            [
                "points" => 10,
                "name" => "JS-ի Արքա",
                "images" => ["/img/medal_task.png"],
                "text" => "Տրվում է լավագույն եղանակով Խնդիրը լուծած անձին"
            ],
            [
                "points" => 5,
                "name" => "JS-ի Կոնսոլ",
                "images" => ["/img/medal_count.png"],
                "text" => "Տրվում է ամսվա ընթացքում ամենաշատ հարցաշարերին պատասխանած անձին"
            ],
            [
                "points" => 10,
                "name" => "JS-ի Խելք",
                "images" =>["/img/medal_percent.png"],
                "text" => "Տրվում է ամսվա ընթացքում հարցաշարերին ամենաբարձր տոկոսային միավոր վաստակած անձին, ով առնվազն խաղացել է 50 անգամ"
            ],
        ];

        return $this->view("index", compact("medals"));
    }
}
