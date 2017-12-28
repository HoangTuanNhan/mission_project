@extends('layouts.master')
@section('title', 'Confirm')

@section('content')
    @include('users.detail')
    <br>
    <div class="row">
        <div class="form-group col-sm-2">
            {!! Form::submit( 'Back', ['class'=>'btn-primary']) !!}
            {!! Form::submit( 'Save', ['class'=>'btn-primary']) !!}
        </div>
    </div>
@endsection