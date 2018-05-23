@extends('user.master')

@section('bg-img',asset($post->image))﻿
@section('heading',$post->title)
@section('sub-heading',$post->subtitle)

@section('post-content')
<article>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-md-10 mx-auto">
                <small>Created at
                    {{$post->created_at->diffForHumans()}}
                </small>
                @foreach($post->categories as $category)

                <small class="pull-right" style="margin-right: 5px;"><a href="{{url('/post/category',$category->name)}}"><span style="color:blueviolet;font-weight: bolder;">{{$category->name}}</span></a></small>

                @endforeach

                {!! $post->body !!}
                <h3>Tags clouds</h3>
                @foreach($post->tags as $tag)
                <a href="{{url('/post/tag',$tag->name)}}">
                    <small class="pull-left" style="margin-right: 5px;border-radius: 5px;border:1px solid #777;padding: 5px;">
                        {{$tag->name}}
                    </small>
                </a>
                @endforeach

            </div>

        </div>
        <center><div class="fb-comments" data-width="{{Request::url()}}"></div></center>
        
    </div>
</article>

<hr>
@endsection