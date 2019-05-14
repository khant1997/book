@extends('layouts.app')

@section('content')
<div>
    <home-page></home-page>
    <div id="templatemo_content" class="container">
        <el-card class="box-card my-4">
            <div class="row">
                <div class="col-3 border-right">
                    <div class="category-card mt-4">
                        <h4 class="pb-2 border-bottom"><i class="fas fa-stream"></i> Categories</h4>
                        @foreach($categories as $category)
                        <div class="text item mb-1">
                            <a href="/category/books/{{$category->id}}" style="color: #000; text-decoration: none"> {{$category->Category_Name}}</a>
                        </div>
                        @endforeach
                    </div>
                    <!-- <ul class="list-group">
                        @foreach($categories as $category)
                            <li class="list-group-item">
                                <a href="/category/books/{{$category->id}}"> {{$category->Category_Name}}</a>
                                <span class="badge badge-primary badge-pill">13</span>
                            </li>
                        @endforeach
                    </ul> -->
                </div>
                <div class="col-8">
                    <div class="d-flex flex-row" style="flex-wrap: wrap">
                        @foreach($book as $books)
                        <!-- @if($books == null)
                            <div>Sorrry! Nothing to show.</div>
                        @endif -->
                        <div class="book-card">
                            <img src="/uploads/books/{{$books->Image}}" style="height: 150px;width: 100%;">
                            <div class="p-2" style="height: 100px">
                                <h6>{{$books->Book_Name}}</h6>
                                <span>{{$books->Author_Name}}</span>
                                <br>
                                <a href="/book/details/{{$books->id}}">Detail</a>
                            </div> 
                        </div>
                        @endforeach
                    </div>
                </div>
            </div>
        </el-card>
    </div>
</div>
@endsection

