@extends('user.master')

@section('bg-img',asset('public/user/img/home-bg.jpg'))
@section('heading','Ebraheem Blog')
@section('sub-heading','New journey to Learn ')
@section('post-content')
<!-- Main Content -->
<div class="container">
    <div class="row">
        <div class="col-lg-8 col-md-10 mx-auto">
            @foreach($posts as $post)
            <div class="post-preview">
                <a href="{{url('/post',$post->slug)}}">
                    <h2 class="post-title">
                        {{$post->title}}
                    </h2>
                    <h3 class="post-subtitle">
                        {{$post->subtitle}}
                    </h3>
                </a>
                <p class="post-meta">Published by
                    <a href="#">Start Bootstrap</a>
                    {{$post->created_at->diffForHumans()}}</p>
            </div>

            <hr>
            @endforeach

            <!-- Pager -->
        
            <div>
                <ul class="pagination">

                    <li class="page-item">
                         {{$posts->links("pagination::bootstrap-4")}}
                    </li>

                </ul>
            </div>

        </div>
    </div>
</div>



@endsection