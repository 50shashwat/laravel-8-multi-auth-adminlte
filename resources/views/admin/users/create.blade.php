@extends('adminlte::page')

@section('content_header')
    <h2>Create Users</h2>
@endsection

@section('content')
<div class="container">


    {!! Form::open(['url' => '/admin/users', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('admin.users.form', ['submitButtonText' => 'Create User'])
    {!! Form::close() !!}


</div>

@endsection
