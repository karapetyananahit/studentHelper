<?php


use App\Facades\Auth;
use App\Http\Controllers\Dashboard\DashboardController as Dashboard;
use App\Http\Controllers\Dashboard\FaqController as DashboardFaq;
use App\Http\Controllers\Dashboard\ProfileController as DashboardProfile;
use App\Http\Controllers\Dashboard\ContactController as DashboardContact;
use App\Http\Controllers\Dashboard\UsersController as DashboardUsers;
use App\Http\Controllers\Dashboard\QuestionsController as DashboardQuestions;
use App\Http\Controllers\Dashboard\TasksController as DashboardTasks;
use App\Http\Controllers\Dashboard\MedalsController as DashboardMedals;
use App\Http\Controllers\Dashboard\BooksController as DashboardBooks;
use App\Http\Controllers\Dashboard\PVPController as DashboardPVP;
use App\Http\Controllers\Dashboard\WebsitesController as DashboardWebsites;
use App\Http\Controllers\Dashboard\YouTubeController as DashboardYoutube;
use App\Http\Controllers\Dashboard\NewsController as DashboardNews;
use App\Http\Controllers\Dashboard\DiscussionsController as DashboardDiscussions;

use App\Http\Controllers\Admin\UsersController as AdminUsers;
use App\Http\Controllers\Admin\GroupsController as AdminGroups;
use App\Http\Controllers\Admin\MessagesController as AdminMessages;
use App\Http\Controllers\Admin\QuestionsController as AdminQuestions;
use App\Http\Controllers\Admin\FaqController as AdminFaqs;
use App\Http\Controllers\Admin\TasksController as AdminTasks;
use App\Http\Controllers\Admin\CommandsController as AdminCommands;
use App\Http\Controllers\Admin\WebsitesController as AdminWebsites;
use App\Http\Controllers\Admin\YoutubeController as AdminYoutube;
use App\Http\Controllers\Admin\BooksController as AdminBooks;
use App\Http\Controllers\Admin\BlogsController as AdminBlogs;


use App\Http\Controllers\AboutController;
use App\Http\Controllers\ContactController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\LessonsController;
use App\Http\Controllers\BlogsController;

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

//Route::get('/test', [TestController::class, "index"]);



Route::get('/', [HomeController::class, "index"])->name("home");

Auth::routes();

Route::get("/about", [AboutController::class, "index"])->name("about");


Route::prefix("contact")->name("contact")->group(function() {
    Route::get("/", [ContactController::class, "create"]);
    Route::post("/", [ContactController::class, "store"]);
});

Route::prefix("lessons")->name("lessons")->group(function() {
    Route::get("/", [LessonsController::class, "index"]);

    Route::prefix("child")->group(function() {
        Route::get("/html-css", [LessonsController::class, "childHtmlCss"]);
        Route::get("/js", [LessonsController::class, "childJs"]);
        Route::get("/js-plus", [LessonsController::class, "childJsPlus"]);
    });

    Route::prefix("adult")->group(function() {
        Route::get("/from-zero", [LessonsController::class, "adultFromZero"]);
        Route::get("/js", [LessonsController::class, "adultJs"]);
        Route::get("/php", [LessonsController::class, "adultPhp"]);
        Route::get("/react", [LessonsController::class, "adultReact"]);
        Route::get("/node", [LessonsController::class, "adultNode"]);
    });
});



Route::prefix("blogs")->name("blogs")->group(function() {
    Route::get("/", [BlogsController::class, "index"]);
    Route::get("/show/{id}", [BlogsController::class, "show"]);

//    Route::get("/hidden/", [BlogsController::class, "hidden"])->middleware(["auth", "admin"])->name(".hidden");
});




Route::prefix("dashboard")->middleware(["auth"])->name("dashboard")->group(function () {

    Route::get("/", [Dashboard::class, "index"]);

    Route::prefix("users")->name(".users")->group(function(){

        Route::get('/', [DashboardUsers::class, "index"]);

        Route::get('/month', [DashboardUsers::class, "month"]);

        Route::get('/count', [DashboardUsers::class, "count"]);

        Route::get('/percent', [DashboardUsers::class, "percent"]);





        Route::get('/menu/medals', [DashboardUsers::class, "medals"])->name(".medals");

    });

    Route::get("/faq", [DashboardFaq::class, "index"])->name(".faq");

    Route::prefix("profile")->name(".profile")->group(function(){

        Route::get('/', [DashboardProfile::class, "index"])->name(".edit");

        Route::post('/', [DashboardProfile::class, "update"]);

        Route::post('/change-password', [DashboardProfile::class, "changePassword"]);

        Route::post('/change-image', [DashboardProfile::class, "changeImage"]);

    });

    Route::prefix("contact")->name(".contact")->group(function(){

        Route::get('/', [DashboardContact::class, "index"])->name(".index");

        Route::post('/', [DashboardContact::class, "store"]);

    });

    Route::prefix("questions")->name(".questions")->group(function(){

        Route::get('/', [DashboardQuestions::class, "index"])->name(".index");

        Route::get('/start', [DashboardQuestions::class, "start"]);

        Route::post('/start', [DashboardQuestions::class, "check"]);

    });

    Route::prefix("discussions")->name(".discussions")->group(function(){

        Route::get('/', [DashboardDiscussions::class, "index"])->name(".index");

        Route::get('/create', [DashboardDiscussions::class, "create"]);
        Route::post('/create', [DashboardDiscussions::class, "store"]);

        Route::get('/{id}', [DashboardDiscussions::class, "show"]);
        Route::post('/{id}', [DashboardDiscussions::class, "send"]);

    });

    Route::get('/tasks', [DashboardTasks::class, "index"])->name(".tasks");


    Route::get('/medals', [DashboardMedals::class, "index"])->name(".medals");

    Route::get('/pvp', [DashboardPVP::class, "index"])->name(".pvp");

    Route::get('/books', [DashboardBooks::class, "index"])->name(".books");
    Route::post('/books/download/increment/{id}', [DashboardBooks::class, "increment"])->name(".increment");

    Route::get('/youtube', [DashboardYoutube::class, "index"])->name(".youtube");

    Route::get('/websites', [DashboardWebsites::class, "index"])->name(".websites");

    Route::get('/news', [DashboardNews::class, "index"])->name(".news");

});


Route::prefix("admin")->middleware(["auth", "admin"])->name("admin")->group(function () {

    Route::prefix("users")->name(".users")->group(function(){

        Route::get('/', [AdminUsers::class, "index"])->name(".index");

        Route::get('/create', [AdminUsers::class, "create"]);
        Route::post('/create', [AdminUsers::class, "store"]);

        Route::get('/{id}', [AdminUsers::class, "edit"]);
        Route::post('/{id}', [AdminUsers::class, "update"]);

        Route::post('/delete/{id}', [AdminUsers::class, "delete"]);

        Route::post('/questions/reset', [AdminUsers::class, "questionReset"]);



    });


    Route::prefix("messages")->name(".messages")->group(function(){

        Route::get("/", [AdminMessages::class, "index"])->name(".index");

        Route::post("/delete/{id}", [AdminMessages::class, "delete"])->name(".delete");

    });

    Route::prefix("questions")->name(".questions")->group(function(){

        Route::get("/", [AdminQuestions::class, "index"])->name(".index");

        Route::get("/create", [AdminQuestions::class, "create"]);
        Route::post("/create", [AdminQuestions::class, "store"]);

        Route::get("/edit/{id}", [AdminQuestions::class, "edit"]);
        Route::post("/edit/{id}", [AdminQuestions::class, "update"]);

        Route::post("/delete/{id}", [AdminQuestions::class, "delete"]);

    });

    Route::prefix("faqs")->name(".faqs")->group(function(){

        Route::get("/", [AdminFaqs::class, "index"])->name(".index");

        Route::get("/create", [AdminFaqs::class, "create"]);
        Route::post("/create", [AdminFaqs::class, "store"]);

        Route::get("/edit/{id}", [AdminFaqs::class, "edit"]);
        Route::post("/edit/{id}", [AdminFaqs::class, "update"]);

        Route::post("/delete/{id}", [AdminFaqs::class, "delete"]);

    });

    Route::prefix("websites")->name(".websites")->group(function(){

        Route::get("/", [AdminWebsites::class, "index"])->name(".index");

        Route::get("/create", [AdminWebsites::class, "create"]);
        Route::post("/create", [AdminWebsites::class, "store"]);

        Route::get("/edit/{id}", [AdminWebsites::class, "edit"]);
        Route::post("/edit/{id}", [AdminWebsites::class, "update"]);

        Route::post("/delete/{id}", [AdminWebsites::class, "delete"]);

    });

    Route::prefix("tasks")->name(".tasks")->group(function(){

        Route::get("/", [AdminTasks::class, "index"])->name(".index");
        Route::post("/", [AdminTasks::class, "update"]);

    });

    Route::prefix("commands")->name(".commands")->group(function(){

        Route::get("/", [AdminCommands::class, "index"])->name(".index");
        Route::post("/migrate", [AdminCommands::class, "migrate"]);
        Route::post("/cache-clear", [AdminCommands::class, "cacheClear"]);
        Route::post("/view-clear", [AdminCommands::class, "viewClear"]);
        Route::post("/config-clear", [AdminCommands::class, "configClear"]);
        Route::post("/all-clear", [AdminCommands::class, "allClear"]);

    });

    Route::prefix("youtube")->name(".youtube")->group(function(){

        Route::get("",[AdminYoutube::class, "index"])->name(".index");
        Route::get("/edit/{id}",[AdminYoutube::class, "edit"]);
        Route::post('/edit/{id}', [AdminYoutube::class, "update"]);

    });


    Route::prefix("books")->name(".books")->group(function(){

        Route::get("",[AdminBooks::class, "index"])->name(".index");
        Route::get("/edit/{id}",[AdminBooks::class, "edit"]);
        Route::post('/edit/{id}', [AdminBooks::class, "update"]);

    });

    Route::prefix("blogs")->name(".blogs")->group(function(){

        Route::get("",[AdminBlogs::class, "index"])->name(".index");
        Route::get("/create",[AdminBlogs::class, "create"])->name(".create");
        Route::post("/create",[AdminBlogs::class, "store"])->name(".store");
        Route::get("/edit/{id}",[AdminBlogs::class, "edit"]);
        Route::post("/edit/{id}",[AdminBlogs::class, "update"]);
        Route::post("/hide/{id}",[AdminBlogs::class, "hide"]);
        Route::post("/show/{id}",[AdminBlogs::class, "show"]);

    });

});
