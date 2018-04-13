@extends('layouts.admin')



@section('content')

    <h1>Create Users</h1>

    {!! Form::open(['method'=>'POST', 'action'=>'AdminUsersController@store', 'files'=>true]) !!}
{{--files=>true >> enctype --}}
{{--    {{csrf_field()}}--}}

        <div class="form-group">

            {!! Form::label('name', 'Name') !!}
            {!! Form::text('name', null, ['class'=>'form-control']) !!}

        </div>


        <div class="form-group">
            {!! Form::label('email', 'Email:') !!}
            {!! Form::email('email', null, ['class'=>'form-control'])!!}
        </div>

        <div class="form-group">
            {!! Form::label('role_id', 'Role:') !!}
            {!! Form::select('role_id', ['' => 'Choose Options'] + $roles, null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('is_active', 'Status:') !!}
            {!! Form::select('is_active', array(1 => 'Active', 0 => 'Inactive'), 0, ['class'=>'form-control'])!!}
        </div>
    {{--default value = 0--}}


        <div class="form-group">
            {!! Form::label('file', 'Upload Photo:') !!}
            {!! Form::file('file', null, ['class'=>'form-control'])!!}
        </div>


        <div class="form-group">
            {!! Form::label('password', 'Password:') !!}
            {!! Form::text('password', null, ['class'=>'form-control'])!!}
        </div>



        <div class="form-group">
            {!! Form::submit('Create User', ['class'=>'btn btn-primary']) !!}
        </div>

    {!! Form::close() !!}

    @include('includes.form_error')

@stop