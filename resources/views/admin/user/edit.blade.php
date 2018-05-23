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
                    <h3 class="box-title">Update Admin</h3>
                </div>
                @include('includes.messages')

                <form role="form" action="{{route('user.update',$user->id)}}" method="POST">
                    {{csrf_field()}}
                    {{method_field('patch')}}
                    <div class="box-body">
                        <div class="col-lg-offset-3 col-lg-6">
                            <div class="form-group">
                                <label for="exampleInputEmail1">New User</label>
                                <input type="text" class="form-control" name="name" value="{{$user->name}}"  id="exampleInputEmail1" placeholder="User Name">
                            </div>


                            <div class="form-group">
                                <label for="exampleInputEmail1">Email</label>
                                <input type="text" class="form-control" name="email" value="{{$user->email}}" id="exampleInputEmail1" placeholder="Email">
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Phone</label>
                                <input type="text" class="form-control" name="phone" value="{{$user->phone}}" id="exampleInputEmail1" placeholder="Phone number">
                            </div>




                            <div class="form-group">
                                <label for="exampleInputEmail1">Status</label>
                                <div class="checkbox">
                                    <label><input type="checkbox" name="status" 
                                                  @if(old('status')== 1 || $user->status ==1)
                                                  checked
                                            
                                                  @endif
                                                  
                                                  
                                                  value="1" 

                                               >Status</label>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="exampleInputEmail1">Assign Role</label>
                                <div class="row">
                                    @foreach($roles as $role)
                                    <div class="col-lg-4">
                                        <div class="checkbox">
                                            <label><input type="checkbox" name="role[]" value="{{$role->id}}"
                                                          @foreach($user->roles as $user_role)
                                                          @if($user_role->id == $role->id )
                                                          checked
                                                          @endif
                                                          @endforeach
                                                          >{{$role->name}}</label>
                                        </div>
                                    </div>
                                    @endforeach
                                </div>

                            </div>

                            <div class="form-group">
                                <button type="submit" class="btn btn-primary">Submit</button>
                                <a type="button" href="{{route('user.index')}}" class="btn btn-info">Back</a>
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
