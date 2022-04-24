<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Comment;


class ShoppingCarController extends Controller
{
    //購物網站首頁及購物車頁面
    public function index(){

        $data1 = DB::table('news')->orderby('id','desc')->take(3)->get();

        // 將數值 $data1 回傳至view.index的變數 $data 中
        return view('shopping.index',['data'=>$data1]);

        // compact也可達到一樣的效果
        // return view('index',compact('data'));

    }


    //購物網站留言板
    public function comment(){

$comments = Comment::orderby('id','desc')->get();

return view('comment.comment', compact('comments'));

    }

    public function save_comment(Request $request){

        Comment::Create([
            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,
        ]);

            return redirect('/comment');

    }


    public function edit_comment($id){


        $comment = DB::table('comments')->find($id);


        return view('comment.edit',compact('comment'));

    }



    public function update_comment($id, Request $request){




      DB::table('comments')->where('id',$id)->update([

            'title' => $request->title,
            'name' => $request->name,
            'content' => $request->content,

      ]);


      return redirect('/comment');

    }




    public function delete_comment($target){


        $delete = DB::table('comments')->where('id', $target)->delete();

        return redirect('/comment');
    }











    public function checkedout1(){
        return view('shopping.checkedout1');
    }

    public function checkedout2(){
        return view('shopping.checkedout2');
    }

    public function checkedout3(){
        return view('shopping.checkedout3');
    }

    public function checkedout4(){
        return view('shopping.checkedout4');
    }

    public function login(){
        return view('template.login');
    }
}
