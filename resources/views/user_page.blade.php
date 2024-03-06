@extends('index')

@section('content')
<div class="card-header">
    <h3 class="card-title">
        <i class="ion ion-clipboard mr-1">User List</i>
    </h3>
</div>
<div class="ibox-tools" style="top: 8px;">
    <!-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> -->
    <a href="{{route('add_user')}}" class="btn btn-primary float-right">
        <i class="fa fa-plus-circle"></i>Add User
    </a>
</div>
<table class="table table-striped">
    <tbody>
        <tr>
            <th>Name</th>
            <th>About</th>
            <th>Action</th>
        </tr>
        @foreach($customer as $user)
        <tr>
            <td>{{$user->name}}</td>
            <td>{{$user->about}}</td>
            <td style="display:flex;">
                <x-button name="edit" />
                <a href="{{route('delete-user', $user->id)}}"><x-button name="delete" class="btn-danger" /></a>
            </td>
        </tr>
        @endforeach
    </tbody>
</table>
@endsection