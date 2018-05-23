@extends('admin.master')
@section('title')
Admin|post
@endsection

@section('mainContent')
<section class="content-header">
    <h1>
        Text Editors
        <small>Advanced form element</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Forms</a></li>
        <li class="active">Editors</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">
    <div class="row">
        <!-- left column -->
        <div class="col-md-12">
            <!-- general form elements -->
            <div class="box box-primary">
                <div class="box-header with-border">
                    <h3 class="box-title">Title</h3>
                </div>
                @if(count($errors)>0)
                @foreach($errors->all() as $error)
                <p class="alert alert-danger">{{$error}}</p>
                @endforeach
                @endif
                <!-- /.box-header -->
                <!-- form start -->
                <form role="form" action="{{route('post.update',$post->id)}}" method="POST" enctype="multipart/form-data">
                    {{csrf_field()}}
                    {{method_field('patch')}}
                    <div class="box-body">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">Title</label>
                                <input type="text" class="form-control" name="title" value="{{$post->title}}" id="exampleInputEmail1" placeholder="Title">
                            </div>
                            <div class="form-group">
                                <label for="exampleInputEmail1">SubTitle</label>
                                <input type="text" class="form-control" name="subtitle" value="{{$post->subtitle}}" id="exampleInputEmail1" placeholder="Subtitle">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Slug</label>
                                <input type="text" class="form-control" name="slug" value="{{$post->slug}}" id="exampleInputEmail1" placeholder="Slug">
                            </div>

                        </div>

                        <div class="col-lg-6">
                            <div class="form-group">
                                <div class="pull-left" >
                                    <label for="exampleInputFile">File input</label>
                                    <input type="file" name="image" id="exampleInputFile">
                                </div>
                                <div class="checkbox pull-right">
                                    <label>
                                        <input type="checkbox" name="status" value="1" @if($post->status==1)
                                               {{'checked'}}
                                               @endif> Publish
                                    </label>
                                </div>

                            </div>
                            <br>
                            <br>

                            <br>
                            <div class="form-group">
                                <label>Select Tags</label>
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;" name="tags[]">
                                    @foreach($tags as $tag)
                                    <option value="{{$tag->id}}"
                                            @foreach($post->tags as $postTag)
                                            @if($postTag->id == $tag->id)
                                            selected
                                            @endif
                                            @endforeach
                                            >{{$tag->name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form-group">
                                <label>Select Category</label>
                                <select class="form-control select2" multiple="multiple" data-placeholder="Select a State"
                                        style="width: 100%;" name="categories[]">
                                     @foreach($categories as $category)
                                    <option value="{{$category->id}}"
                                             @foreach($post->categories as $postCategory)
                                            @if($postCategory->id == $category->id)
                                            selected
                                            @endif
                                            @endforeach
                                            >{{$category->name}}</option>
                                    @endforeach
                                </select>
                            </div>

                        </div>

                    </div>
                    <!-- /.box-body -->

                    <div class="box">
                        <div class="box-header">
                            <h3 class="box-title">Body Text
                                <small>Simple and fast</small>
                            </h3>
                            <!-- tools box -->
                            <div class="pull-right box-tools">
                                <button type="button" class="btn btn-default btn-sm" data-widget="collapse" data-toggle="tooltip"
                                        title="Collapse">
                                    <i class="fa fa-minus"></i></button>

                            </div>
                            <!-- /. tools -->
                        </div>
                        <!-- /.box-header -->
                        <div class="box-body pad">

                            <textarea  name="body" id="editor1"
                                      style="width: 100%; height: 200px; font-size: 14px; line-height: 18px; border: 1px solid #dddddd; padding: 10px;">
                                {{$post->body}}
                            </textarea>

                        </div>
                    </div>

                    <div class="box-footer">
                        <button type="submit" class="btn btn-primary">Submit</button>
                        <a type="button" href="{{route('post.index')}}" class="btn btn-info">Back</a>
                    </div>
                </form>
            </div>


            <!-- /.box -->
        </div>
        <!--/.col (right) -->
    </div>
    <!-- /.row -->
</section>
@endsection
