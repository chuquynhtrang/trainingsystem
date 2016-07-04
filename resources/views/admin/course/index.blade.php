@extends('layouts.app')

@section('title')
    Course Management
@stop

@section('content')
    <div class="container">
        <section>
            <div class="row page-title-row">
                <div class="col-md-6">
                    <h3> Courses <small>&raquo; Listing </small></h3>
                </div>
                <div class="col-md-6 text-right">
                    <a href="/admin/course/create" class="btn btn-success btn-md">
                        <i class="fa fa-plus-circle"></i> New Course
                    </a>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                            Course Tables
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="dataTable_wrapper">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th><input type="checkbox" id="checkAll"></th>
                                            <th>ID</th>
                                            <th>Course Name</th>
                                            <th>Description</th>
                                            <th>Created at</th>
                                            <th>Updated at</th>
                                            <th>&nbsp;</th>
                                            <!-- <th>&nbsp;</th> -->
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach ($courses as $course)
                                            <tr>
                                            <td><input type="checkbox" name="checkbox[]" value=" {{$course->id}} "></td>
                                                <td>{{ $course->id }}</td>
                                                <td>{{ $course->name }}</td>
                                                <td>{{ $course->description }}</td>
                                                <td>{{ $course->created_at }}</td>
                                                <td>{{ $course->updated_at }}</td>
                                                <td>
                                                    <a href="/admin/course/{{ $course->id }}/edit" class="btn btn-primary btn-sm">
                                                        <i class="fa fa-edit"></i> Edit
                                                    </a>
                                                </td>
                                                <td>
                                                    <button type="submit" class="btn btn-danger btn-sm" onclick="return(confirm('Are you sure delete?'))">
                                                        <i class="fa fa-times-circle"></i> Delete
                                                    </button>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {!! $courses->render() !!}
        </section>
    </div>
@stop

@section('script')
<script>
    var input = document.getElementsByTagName('input');
    var selectAll = input[0];
    selectAll.onclick = function(){
        var state = (selectAll.checked) ? true : false;
        for (var i = 1; i < input.length; i++) {
            input[i].checked = state;
        }
    };
</script>
@stop