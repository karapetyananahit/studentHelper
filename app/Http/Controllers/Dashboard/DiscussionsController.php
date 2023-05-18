<?php

namespace App\Http\Controllers\Dashboard;

use App\Http\Controllers\Controller;
use App\Models\Discussion;
use App\Models\DiscussionsMessage;
use App\Models\News;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class DiscussionsController extends Controller
{


    protected $view = "dashboard.discussions";

    public function index(){
;        $discussions = Discussion::with(["user","messages"])->orderBy("id", "DESC")->get();
//        dd($discussions->toArray());
        return view("dashboard.discussions.index", compact(["discussions"]));

    }

    public function create(){
        return $this->view("create");
    }

    public function store(Request $request){
        $rules = [
            "title" => "required",
            "message" => "required",
        ];
        $this->validate($request, $rules);
        $creator = User::find(Auth::id());

        $discussion = new Discussion();
        $discussion->title = $request->title;
        $discussion->user_id = $creator->id;
        $discussion->save();

        $message = new DiscussionsMessage();
        $message->user_id = $creator->id;
        $message->message = $request->message;
        $message->discussion_id = $discussion->id;
        $message->save();

        $aTag = generateTag("a", "հղումով", ["class" => "text-primary", "href" => "/dashboard/discussions/".$discussion->id]);
        $nameTag = generateTag("span", $creator->fullname, ["class" => "badge badge-primary"]);
        $titleTag = generateTag("span", $discussion->title, ["class" => "badge badge-warning text-white"]);



        $news = new News();
        $news->user_id = Auth::id();
        $news->type = "success";
        $news->description = "Հարգելի մասնակիցներ " . $nameTag . "-ը բացել է " . $titleTag . " քննարկման սենյակը։ Տեսնելու համար կարող եք անցնել հետևյալ " . $aTag;
        $news->date= getNewsDate();
        $news->save();
        return redirect("/dashboard/discussions/".$discussion->id);
    }

    public function show($id){
        $discussion = Discussion::with(["user","messages.user"])->find($id);
        return $this->view("show", compact(["discussion"]));
    }

    public function send(Request $request, $id){
        $rules = [
            "message" => "required"
        ];
        $this->validate($request, $rules);
        $message = new DiscussionsMessage();
        $message->message = $request->message;
        $message->user_id = Auth::id();
        $message->discussion_id = $id;
        $message->save();

        return redirect()->back();

    }
}
