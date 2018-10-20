<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Article extends Model
{
    //
    protected $fillable=["title","author","intr","content","sorts_id"];

    public function csAll($id)
    {
        //构造sql语句
        return DB::select("select * from articles where sorts_id= :id",['id'=>$id]);
    }

    public function lb()
    {
       return $rows=  DB::table("articles")
            ->join("article_classes as ac","ac.id","=","articles.sorts_id")
            ->select("articles.*","ac.name")
            ->get();

    }
}
