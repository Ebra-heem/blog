
@extends('admin.master')
@section('title')
Admin | Home
@endsection

@section('mainContent')

<!-- <div class="content-wrapper">-->
<!-- Content Header (Page header)-->
<section class="content-header">
    <h1>
        Blank page
        <small>it all starts here</small>
    </h1>
    <ol class="breadcrumb">
        <li><a href="#"><i class="fa fa-dashboard"></i> Home</a></li>
        <li><a href="#">Examples</a></li>
        <li class="active">Blank page</li>
    </ol>
</section>

<!-- Main content -->
<section class="content">

    <!-- Default box -->
    <div class="box">
        <div class="box-header with-border">
            <h3 class="box-title">Title</h3>
            @can('posts.create',Auth::user())
            <center><a href="{{route('category.create')}}" class="btn btn-success">Add New</a></center>
            @endcan
            <div class="box-tools pull-right">
                <button type="button" class="btn btn-box-tool" data-widget="collapse" data-toggle="tooltip"
                        title="Collapse">
                    <i class="fa fa-minus"></i></button>
                <button type="button" class="btn btn-box-tool" data-widget="remove" data-toggle="tooltip" title="Remove">
                    <i class="fa fa-times"></i></button>
            </div>
        </div>
        <div class="box-body">
            <table id="example1" class="table table-bordered table-striped">
                <thead>
                    <tr>
                        <th>S.No</th>
                        <th>Category Name</th>
                        <th>Slug</th>

                        <th>Edit</th>

                        <th>Delete</th>
                      
                    </tr>
                </thead>
                <tbody>
                    @foreach($categories as $category)
                    <tr>
                        <td>{{$loop->index + 1}}</td>
                        <td>{{$category->name}}</td>
                        <td>{{$category->slug}}</td>

                        <td><a href="{{route('category.edit',$category->id)}}"><span class="btn  btn-success glyphicon glyphicon-edit"></span></a></td>


                        <td>
                            <form action="{{ route('category.destroy', $category->id) }}" method="POST">
                                {{csrf_field()}}
                                {{ method_field('DELETE') }}
                                <input type="submit" value="&#xf014;" title="Delete" class="btn btn-lg btn-danger fa fa-trash-o" onclick='return confirm("are you sure ?")'>
                            </form>
                        </td>

                    </tr>
                    @endforeach

                </tbody>
                <tfoot>
                    <tr>
                      <th>S.No</th>
                      <th>Category Name</th>
                      <th>Slug</th>

                      <th>Edit</th>

                      <th>Delete</th>

                    </tr>
                </tfoot>
            </table>
        </div>
        <!-- /.box-body -->
    </div>
    <!-- /.box -->
    <!-- /.box-body -->
    <div class="box-footer">
        Footer
    </div>
    <!-- /.box-footer-->
</div>
<!-- /.box -->

</section>
<!-- /.content -->
<!--  </div>-->
@endsection
