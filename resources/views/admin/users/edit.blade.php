@extends('adminlte::page')

@section('content_header')
    <h2>Edit user</h2>
@endsection


@section('content')
<div class="container">

   <div class="card" style="padding:10px">
        {!! Form::model($user, [
            'method' => 'PATCH',
            'url' => ['/admin/users', $user->id],
            'class' => 'form-horizontal',
            'files' => true
        ]) !!}

           @include ('admin.users.form', ['submitButtonText' => 'Update user'])
        {!! Form::close() !!}
   </div>

</div>

@endsection
