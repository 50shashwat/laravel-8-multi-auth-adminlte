@extends('adminlte::page')

@section('content_header')
    <h3>User Entry View  {{ $user->name }}</h3>
@endsection


@section('title', 'User Edit')


@section('content')
    <div class="container">
            <div class="card card-body">
                <div class="panel panel-default">
                    <div class="panel-body">

                        <a href="{{ url('admin/users') }}" title="Back"><button class="btn btn-warning btn-xs"><i class="fa fa-arrow-left" aria-hidden="true"></i> Back</button></a>
                        <a href="{{ url('admin/users/' . $user->id . '/edit') }}" title="Edit subject"><button class="btn btn-primary btn-xs"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button></a>
                        {!! Form::open([
                            'method'=>'DELETE',
                            'url' => ['users', $user->id],
                            'style' => 'display:inline'
                        ]) !!}
                            {!! Form::button('<i class="fa fa-trash-o" aria-hidden="true"></i> Delete', array(
                                    'type' => 'submit',
                                    'class' => 'btn btn-danger btn-xs',
                                    'title' => 'Delete Tender Entry',
                                    'onclick'=>'return confirm("Confirm delete?")'
                            ))!!}
                        {!! Form::close() !!}
                        <br/>
                        <br/>

                        <div class="table-responsive">
                            <table class="table table-bordered table-striped">
                                <tbody>
                                    <tr>
                                        <th>ID</th><td>{{ $user->id }}</td>
                                    </tr>
                                    <tr><th>Name</th><td> {{ $user->name }} </td></tr>
                                    <tr><th>Email</th><td> {{ $user->email }} </td></tr>
                                    <tr><th>Phone No</th><td> {{ $user->phone }} </td></tr>
                                     </tbody>
                            </table>
                        </div>


                </div>
            </div>
        </div>
    </div>
@endsection
