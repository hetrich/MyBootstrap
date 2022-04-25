<?php

namespace App\Http\Controllers;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    // 圖片觀看頁面

    public function index()
    {
        //將所有Product資料從資料庫拿出來並輸出到列表頁上
        $products = Product::orderBy('id', 'desc')->get();

        //回去商品觀看頁面
        return view('product.productindex', compact('products'));
    }

    //新增頁面
    public function create()
    {
        //準備新增用的表單給使用者填寫
        return view('product.productcreate');
    }

    public function store(Request $request)
    {

        // dd($request->all());

        $path = Storage::disk('local')->put('public/product',$request->img);

        $path = str_replace('public', 'storage', $path);

        product::create([
            'img' => '/' . $path,
            'name' => $request->name,
            'description' => $request->description,
            'price' => $request->price,
            'quantity' => $request->quantity,
        ]);

        return redirect('/product');
    }

    //編輯頁面
    public function edit($id)
    {
        $product = product::find($id);


        return view('product.productedit',compact('product'));
    }




    public function update(Request $request, $id)
    {
        $product = Product::find($id);

        if ($request->hasfile('img')) {


            // Storage必須要記得dd確定變數名稱

            $path = Storage::disk('local')->put(
                'public/product',

                //這裡要記得確定變數名稱 不一定是 $request->img
                //也可能是 $request-> dd出來的變數
                $request->img
            );
            $path = str_replace('public', 'storage', $path);

            $target = str_replace('/storage', 'public', $product->img);
            Storage::Disk('local')->delete($target);

            $product->img = '/' . $path;
        }
        // 商品名稱, 介紹, 價格, 數量
        $product->name = $request->name;
        $product->description = $request->description;
        $product->price = $request->price;
        $product->quantity = $request->quantity;

        $product->save();

        return redirect('/product');
    }

    public function destroy($id)
    {

        $product = Product::find($id);
        $target = str_replace('/storage', 'public', $product->img);

        Storage::disk('local')->delete($target);
        $product->delete();

        return redirect('/product');
    }
}
