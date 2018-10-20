<?php

namespace App\Http\Controllers;

use App\Models\ArticleClass;
use Illuminate\Http\Request;

class ArticleClassController extends Controller
{
    public function index(){
        //得到所有分类数据
        $classes = ArticleClass::all();
//        dd($classes);
        //显示并传递数据
        return view("ArticleClass.index",compact("classes"));
    }

    public function add(Request $request)
    {
        //得到所有分类数据
        $classes = ArticleClass::all();

        //判断提交方式
        if ($request->isMethod("post")){
//            dd(11);
//            dd($request->post());
            if (ArticleClass::create($request->post())){
                //跳转
                return redirect()->route("ArticleClass.index")->with("success","添加成功");
            }
        }
        return view("ArticleClass.add",compact("classes"));
    }

    public function del($id)
    {
        $article=ArticleClass::findOrFail($id);

        if ($article->delete()){
            return redirect()->route("ArticleClass.index")->with("success","删除成功");
        }
    }

    public function edit(Request $request,$id)
    {
//        //得到所有文章数据
        $article = ArticleClass::find($id);
        //得到所有分类数据
        $classes = ArticleClass::all();
        //判断提交方式
        if ($request->isMethod("post")){
            if ($article->update($request->post())){
                //跳转
                return redirect()->route("ArticleClass.index")->with("success","修改成功");
            }
        }
        return view("ArticleClass.edit",compact("article","classes"));
    }
}
