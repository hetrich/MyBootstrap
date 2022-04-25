@extends('template.template')


@section('pageTitle')

編輯檔案

@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/comment.css')}}">
<style>

    form img{
        width: 400px;
    }

    form label{
        margin-top:10px;
    }
</style>
@endsection

@section('main')
        <div class="banner .container-fluid">
            <div class="list-detail">
                <div id="section1" class="container-xxl">
                    <!-- 標題 -->
                    <div class="shop-car">
                        <h3>編輯商品</h3>
                    </div>
                </div>

                <!-- 底部留言表單 -->
                <div id="section3">
                    <form action="/product/update/{{$product->id}}" class="form" method="post" enctype="multipart/form-data" >

@csrf

<div class="upload-box d-flex flex-column" >

      <!-- 預覽圖片 -->
<div>現在圖片</div>
      <img src="{{$product->img}}" alt="">
<label for="img"></label>
<input type="file" name="img" id="img" >

<label for="name">檔案名稱</label>
<input type="text" name="name" id="name" value="{{$product->name}}">

<label for="description">介紹</label>
<input type="text" name="description" id="description" value="{{$product->description}}">

<label for="price">價格</label>
<input type="number" name="price" id="price" value="{{$product->price}}">

<label for="quantity">數量</label>
<input type="number" name="quantity" id="quantity" value="{{$product->quantity}}">


</div>



            <!-- 按鈕 -->
                        <div class="button-box d-flex justify-content-center">
                            <button class="btn btn-secondary me-3" type="submit">取消</button>
                            <button type="submit" class="btn btn-primary">修改商品</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @endsection
