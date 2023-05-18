<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Youtube;

class YoutubeController extends Controller
{
	protected $view = "admin.youtube";

	public function index(){
		$youtube=Youtube::get();
		return $this->view("index",compact(['youtube']));
	}

    public function edit($id) {
        $youtube = Youtube::find($id);

        return view("admin.youtube.edit", compact(["youtube"]));
    }

    public function update (Request $request, $id) {
        $youtube = Youtube::find($id);

        $youtube->name = $request->name;
        $youtube->position = $request->position;
        $youtube->url = $request->url;
        $youtube->languages = $request->languages;
        $youtube->date = $request->date;
        $youtube->types = $request->types;
        $youtube->playlists = $request->playlists;
        $youtube->img = $request->img;
        $youtube->followers = $request->followers;

        $youtube->save();
        return redirect("/admin/youtube");
    }

}
