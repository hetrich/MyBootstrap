@extends('template.template')


@section('pageTitle')

Banner頁面

@endsection


@section('css')
<link rel="stylesheet" href="{{asset('css/comment.css')}}">
<link rel="stylesheet" href="https://cdn.datatables.net/1.11.5/css/jquery.dataTables.min.css">

@endsection

@section('main')
        <div class="banner .container-fluid">
            <div class="list-detail">
                <div id="section1" class="container-xxl">
                    <!-- 留言板標題 -->
                    <div class="shop-car d-flex justify-content-between mb-2">
                        <h3>Banner管理頁面</h3>
                        <a href="/banner/create" class="btn btn-success">新增BANNER</a>
                    </div>
                </div>
                <!-- 中間留言文章 -->


                <div id="section2">
                    <table id="banner_list" class="display">
                        <thead>
                            <tr>

                                <th>品名</th>
                                <th>價格</th>
                                <th>數量</th>
                                <th>介紹</th>
                                <th>功能</th>

                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <p></p>
                                </td>
                                <td>
                                    <button class="btn btn-success">編輯</button>
                                    <button class="btn btn-danger">刪除</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>

                </div>
            </div>
        </div>

@endsection

@section('Js')

<script src="https://code.jquery.com/jquery-3.6.0.slim.min.js" integrity="sha256-u7e5khyithlIdTpu22PHhENmPcRdFiHRjhAuHcs05RI=" crossorigin="anonymous"></script>

<script src="https://cdn.datatables.net/1.11.5/js/jquery.dataTables.min.js"></script>

<script>
    $(document).ready( function () {
    $('#banner_list').DataTable();
} );
</script>

@endsection
