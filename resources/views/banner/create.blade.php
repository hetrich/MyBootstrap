@extends('template.template')


@section('pageTitle')

留言板

@endsection


@section('css')
    <link rel="stylesheet" href="{{asset('css/comment.css')}}">

@endsection

@section('main')
        <div class="banner .container-fluid">
            <div class="list-detail">
                <div id="section1" class="container-xxl">
                    <!-- 留言板標題 -->
                    <div class="shop-car">
                        <h3>BANNER新增</h3>
                    </div>
                </div>
                <!-- 中間留言文章 -->
                <div id="section2">


                </div>
                <!-- 底部留言表單 -->
                <div id="section3">
                    <form action="/banner/store" class="form" method="post" >


<label for="#">品名</label>
<input type="text" name="#">

<label for="#">價格</label>
<input type="text" name="#">

<label for="#">數量</label>
<input type="text" name="#">

<label for="#">介紹</label>
<input type="text" name="#">




            <!-- 按鈕 -->
                        <div class="button-box d-flex justify-content-center">
                            <button class="btn btn-secondary me-3" type="submit">清除</button>
                            <button type="submit" class="btn btn-primary">新增BANNER</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        @endsection
