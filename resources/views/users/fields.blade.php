<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>
<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>

<div class="row">
    <div class="form-group col-sm-6">
        {!! Form::label('contact_number', 'Phone:') !!}
        {!! Form::text('contact_number', null, ['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>

<div class="form-group col-sm-2">

    {!! Form::submit( 'Confirm', ['class'=>'btn-primary ']) !!}

</div>
<div class="clearfix"></div>
</div>