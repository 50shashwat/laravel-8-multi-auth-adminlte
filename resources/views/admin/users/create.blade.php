@extends('adminlte::page')

@section('content')
<div class="container">
    
    <h2>Create Users</h2>
    
    {!! Form::open(['url' => '/admin/users', 'class' => 'form-horizontal', 'files' => true]) !!}
        @include ('admin.users.form', ['submitButtonText' => 'Create User'])
    {!! Form::close() !!}


</div>
    
@endsection