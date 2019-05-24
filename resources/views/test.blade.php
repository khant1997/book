@extends('layouts.app')

@section('content')
<div>
    <home-page></home-page>
    <div id="templatemo_content" class="container wow fadeInUp">
        <el-card class="box-card my-4">
            <div class="row">
                <div class="col-3 border-right">
                    <div class="category-card mt-3">
                        <h4 class="pb-2 border-bottom"><i class="fas fa-stream"></i> Categories</h4>
                        @foreach($categories as $category)
                        <div class="text item mb-1">
                            <a href="/category/books/{{$category->id}}" style="color: #000; text-decoration: none"><i class="fas fa-angle-right"></i> {{$category->Category_Name}}</a>
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="col-9">
                    <div class="search-box">
                        <!-- <a href="/" class="btn">All</a> -->
                        <form action="/search" method="POST" role="search">
                            {{ csrf_field() }}
                            <div class="searchbar mb-3">
                                <input class="search_input" type="text" name="q" placeholder="Search By Book Title Or Author" required>
                                <button type="submit" class="search_icon"><i class="fas fa-search"></i></button>
                            </div>
                        </form>
                    </div>
                    <div class="d-flex flex-row" style="flex-wrap: wrap">
                        @foreach($book as $books)
                        
                        <mdb-card class="book-card" :books="{{ $books }}"></mdb-card>
                        @endforeach
                    </div>
                    @if ( $book->links() )
                        <div class="float-right mr-5 mt-3">
                            {{ $book->links() }}
                        </div>
                    @endif
                </div>
            </div>
        </el-card>
    </div>
    <about-us class="wow slideInUp"></about-us>
</div>
@endsection
