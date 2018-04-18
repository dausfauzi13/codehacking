@extends('layouts.admin')



@section('content')

    <h1>Edit Users</h1>

    <div class="row">

        <div class="col-sm-3">

            <img src="{{$user->photo ? $user->photo->file : 'http://www.socialmediasearch.co.uk/wp-content/uploads/2014/12/s5.jpg'}}" alt="" class="img-responsive img-rounded">
            {{--http://placehold.it/400x400--}}
        </div>


        <div class="col-sm-9">


            {!! Form::model($user, ['method'=>'PATCH', 'action'=>['AdminUsersController@update', $user->id], 'files'=>true]) !!}
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
                {!! Form::select('role_id', $roles, null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('is_active', 'Status:') !!}
                {!! Form::select('is_active', array(1 => 'Active', 0 => 'Inactive'), null, ['class'=>'form-control'])!!}
            </div>
            {{--default value = 0--}}


            <div class="form-group">
                {!! Form::label('photo_id', 'Upload Photo:') !!}
                {!! Form::file('photo_id', null, ['class'=>'form-control'])!!}
            </div>


            <div class="form-group">
                {!! Form::label('password', 'Password:') !!}
                {!! Form::password('password', null, ['class'=>'form-control'])!!}
            </div>



            <div class="form-group">
                {!! Form::submit('Save Changes', ['class'=>'btn btn-primary']) !!}
            </div>

            {!! Form::close() !!}

        </div>
    </div>

    <div class="row">

        @include('includes.form_error')

    </div>

@stop