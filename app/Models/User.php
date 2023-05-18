<?php

namespace App\Models;

use Carbon\Carbon;
use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Support\Facades\DB;

class User extends Authenticatable
{
    use HasFactory, Notifiable;

    static $medalGold = 30;
    static $medalSilver = 20;
    static $medalBronze = 15;
    static $medalTop10 = 5;
    static $medalTask = 10;
    static $medalCount = 5;
    static $medalPercent = 10;
    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'surname',
        'email',
        'password',
        'img',
        'is_admin',
        'questions_times',
        'questions_times_today',
        'questions_corrects',
        'tasks_times',
        'tasks_corrects',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];

    protected $appends = [
        'fullname',
        'firstLetters',
        'fourLettersName',
        'points'
    ];


    // Methods
    static function getWithoutAdmin(){
        return User::where("is_admin", 0)->get();
    }
    static function orderByPoints(){
        return User::where("is_admin", 0)->orderBy(DB::raw(
            "
                `tasks_corrects` +
                `questions_corrects` +
                `medal_gold` * " . self::$medalGold . "+
                `medal_silver` * " . self::$medalSilver . " +
                `medal_bronze` * " . self::$medalBronze . "+
                `medal_top_10` * " . self::$medalTop10 . "+
                `medal_task` * " . self::$medalTask . "+
                `medal_count` * " . self::$medalCount . "+
                `medal_percent` * " . self::$medalPercent
        ), 'desc');
    }
    static function orderByPointsWithMe(){
        return User::orderBy("is_admin", "desc")->orderBy(DB::raw("`tasks_corrects` + `questions_corrects`"), 'desc');
    }

    // Relations
    public function gu()
    {
        return $this->hasMany(GroupUsers::class);
    }

    // Functions
    public function getPointsAttribute ()
    {


        return $this->questions_corrects +
            $this->tasks_corrects +
            $this->medal_gold * self::$medalGold +
            $this->medal_silver * self::$medalSilver +
            $this->medal_bronze * self::$medalBronze +
            $this->medal_top_10 * self::$medalTop10 +
            $this->medal_task * self::$medalTask +
            $this->medal_count * self::$medalCount +
            $this->medal_percent * self::$medalPercent;
    }

    public function getFullnameAttribute ()
    {
        return $this->surname ? $this->name . ' ' . $this->surname : $this->name;
    }

    public function getFirstLettersAttribute ()
    {
        return $this->surname ?
            $this->name[0] . '' . $this->surname[0] :
            $this->name[0];
    }

    public function getFourLettersNameAttribute ()
    {
        $name = substr($this->name, 0, 4);

        return "$name.";
    }

    public function getAge(){
        return $this->birthdate->diff(Carbon::now())->format('%y years, %m months and %d days');
    }
}
