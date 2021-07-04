@extends('adminlte::page')

@section('content_header')
    <h2>Users</h2>
@endsection

@section('content')
<div class="container">

    <div class="card card-body">
        <div class="row" style="margin-bottom: 20px">
            <div class="col-md-6">
            </div>
            <div class="col-md-6" style="text-align:right">
                <a href="{{ route('admin.users.create') }}" class="btn btn-outline-dark" >Create New user</a>
            </div>
        </div>
        @if (session('message'))
            <div class="alert alert-info" style="margin-top: 10px">
                {{ session('message') }}
            </div>
        @endif

        <br />
        <br />
        <table class="table table-striped table-bordered">
            <tr>
                <th>ID</th>
                <th>Name</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            @foreach ($users as $item)

            <tr>
                <td>{{$item->id}}</td>
                <td>{{$item->name}}</td>
                <td>{{$item->email}}</td>
                <td><a href=" {{ url('admin/users/'.$item->id.'/edit' ) }}" class="btn btn-outline-primary">Edit</a>
                <a class="btn btn-info" href="{{ route('admin.users.show',$item->id) }}">Show</a>
                    {{ Form::open([
                        'method'=>'DELETE',
                        'url' => ['admin/users', $item->id],
                        'style' => 'display:inline'
                    ]) }}
                        {{ Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                'type' => 'submit',
                                'class' => 'btn btn-outline-danger',
                                'title' => 'Delete user',
                                'onclick'=>'return confirm("Confirm delete?")'
                        )) }}
                    {{ Form::close() }}

                </td>
            </tr>
            @endforeach
        </table>
    </div>



</div>

@endsection
