<!-- form name -->
{!! Form::open(['route' => 'user.index', 'method'=>'GET', 'id'=>'form-search']) !!}
<div class="row">
    <div class="form-group col-sm-6 ">
        {!! Form::label('name', 'Name:') !!}
        {!! Form::text('name', null, ['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>
<!-- form email -->
<div class="row">
    <div class="form-group col-sm-6 ">
        {!! Form::label('email', 'Email:') !!}
        {!! Form::text('email', null, ['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>

<!-- form phone -->
<div class="row">
    <div class="form-group col-sm-6 ">
        {!! Form::label('contact_number', 'Phone:') !!}
        {!! Form::text('contact_number', null, ['class'=>'form-control']) !!}
    </div>
    <div class="clearfix"></div>
</div>

<!-- form button search -->
<div class="row">
    <div class="form-group col-sm-2 ">
        {!! Form::submit('search', ['class'=>'btn-primary btn-confirm']) !!}
    </div>
    <div class="clearfix"></div>
</div>
<br/>
<div id="target">
    <div class="form-group table-list">
        <table class="table">
            <thead>
            <tr>
                <th>Name</th>
                <th>Contact_Number</th>
                <th>Email</th>
                <th>Action</th>
            </tr>
            </thead>
            <tbody>
            @foreach($listUser as $item)
            <tr>
                <td>{{$item->name}}</td>
                <td>{{ $item->contact_number }}</td>
                <td>{{ $item->email }}</td>
                <td><button class="btn-primary">Detail</button></td>
            </tr>
            @endforeach
            </tbody>
        </table>

        <nav class="text-center">
             @if(!is_null($listUser))
                    {{$listUser->links()}}
             @endif
        </nav>

    </div>
</div>
{!! Form::close() !!}
