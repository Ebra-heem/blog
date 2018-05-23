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
                    <h3 class="box-title">Add Roles</h3>
                </div>
                @include('includes.messages')

                <form role="form" action="{{route('role.store')}}" method="POST">
                    {{csrf_field()}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">

                            <div class="form-group">
                                <label for="exampleInputEmail1">Role Name</label>
                                <input type="text" class="form-control" name="name" id="exampleInputEmail1" placeholder="Role Name">
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <label for="name">Post Permissions</label>
                                    @foreach($permissions as $permission)
                                    @if($permission->for =='post')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                                    </div>

                                    @endif
                                    @endforeach
                                </div>

                                <div class="col-lg-4">
                                    <label for="name">User Permissions</label>
                                    @foreach($permissions as $permission)
                                    @if($permission->for =='user')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                                    </div>

                                    @endif
                                    @endforeach
                                </div>

                                <div class="col-lg-4">
                                    <label for="name">Other Permissions</label>
                                    @foreach($permissions as $permission)
                                    @if($permission->for =='other')
                                    <div class="checkbox">
                                        <label><input type="checkbox" name="permission[]" value="{{$permission->id}}">{{$permission->name}}</label>
                                    </div>

                                    @endif
                                    @endforeach
                                </div>

                            </div>



                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button" href="{{route('role.index')}}" class="btn btn-info">Back</a>
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
