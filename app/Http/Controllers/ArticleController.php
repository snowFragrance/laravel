<?php

namespace App\Http\Controllers;

use App\Models\Article;
use App\Models\ArticleClass;
use Illuminate\Http\Request;

class ArticleController extends Controller
{
    //
    public function index()
    {
        //得到所有文章数据
        $ac=new Article();
        $articles = $ac->lb();
        //得到所有分类数据
        $classes = ArticleClass::all();
        //显示并传递数据
        return view("article.index",compact("articles","classes"));
    }

    public function adm(){
        //得到所有文章数据
        $rows = new Article();
        $rows = $rows->lb();
//        dd($rows);
        //得到所有分类数据
        $classes = ArticleClass::all();
        //显示并传递数据
        return view("article.adm",compact("rows","classes"));
    }

    public function ac(Request $request,$id){
        //查询某一类的文章
        $ac=new Article();
        $rows = $ac->csAll($id);
        //得到所有分类数据
        $classes = ArticleClass::all();
        if ($rows){
            return view("article.cs",compact("rows","classes"));
        }else{
            return redirect()->route("article.index")->with("danger","没有相关数据");
        }
    }

    public function edit(Request $request,$id)
    {
        //得到所有文章数据
        $article = Article::find($id);
        //得到所有分类数据
        $classes = ArticleClass::all();
        //判断提交方式
        if ($request->isMethod("post")){
            if ($article->update($request->post())){
                //跳转
                return redirect()->route("article.adm")->with("success","修改成功");
            }
        }
        return view("article.edit",compact("article","classes"));
    }

    public function del($id)
    {
        $article=Article::findOrFail($id);

        if ($article->delete()){
            return redirect()->route("article.adm")->with("success","删除成功");
        }
    }

    public function add(Request $request)
    {
        //得到所有分类数据
        $classes = ArticleClass::all();
        //判断提交方式
        if ($request->isMethod("post")){
            if (Article::create($request->post())){
                //跳转
                return redirect()->route("article.adm")->with("success","添加成功");
            }
        }
        return view("article.add",compact("classes"));
    }
}
