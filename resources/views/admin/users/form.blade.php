@csrf

    <div class="row form-group {{ $errors->has('name') ? 'has-error' : ''}}">
        {!! Form::label('name', 'Name ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('name', null, ('' == 'required') ? ['class' => 'form-control', 'required' => 'required'] : ['class' => 'form-control']) !!}
            {!! $errors->first('name', '<p class="help-block">:message</p>') !!}
        </div>
    </div>

    <div class="row form-group {{ $errors->has('email') ? 'has-error' : ''}}">
        {!! Form::label('email', 'Email ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::text('email', null, ('' == 'required') ? ['class' => 'form-control'] : ['class' => 'form-control']) !!}
            {!! $errors->first('email', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="row form-group {{ $errors->has('password') ? 'has-error' : ''}}">
        {!! Form::label('password', 'Password ', ['class' => 'col-md-4 control-label']) !!}
        <div class="col-md-6">
            {!! Form::password('password', ['placeholder'=>'Password', 'class'=>'form-control'] ) !!}
            {!! $errors->first('password', '<p class="help-block">:message</p>') !!}
        </div>
    </div>


    <div class="form-group">
        <div class="col-md-offset-4 col-md-4">
            {!! Form::submit(isset($submitButtonText) ? $submitButtonText : 'Create', ['class' => 'btn btn-primary']) !!}
        </div>
    </div>
