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
                    <h3 class="box-title">Permission Edit</h3>
                </div>
                @include('includes.messages')
               
                <form role="form" action="{{route('permission.update',$permission->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('patch')}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">
                            
                            <div class="form-group">
                                <label for="exampleInputEmail1">Permission Name</label>
                                <input type="text" class="form-control" name="name" value="{{$permission->name}}" id="exampleInputEmail1" placeholder="Title">
                            </div>

                              <div class="form-group">
                                <label for="for">Permission For</label>
                                <select name="for" id="for" class="form-control">
                                    <option selected disabled>Select for Permission</option>
                                    <option value="user">User</option>
                                    <option value="post">Post</option>
                                    <option value="other">Other</option>
                                </select>
                            </div>
                        

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button" href="{{route('permission.index')}}" class="btn btn-info">Back</a>
                            </div>


                        </div>

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
