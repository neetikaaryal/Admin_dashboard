@extends('index')

@section('content')
<div class="card-header">
    <h3 class="card-title">
        <i class="ion ion-clipboard mr-1">User List</i>
    </h3>
</div>
<div class="ibox-tools" style="top: 8px;">
    <!-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> -->
    <a href="{{route('add_project_list')}}" class="btn btn-primary float-right">
        <i class="fa fa-plus-circle"></i>Add Project
    </a>
</div>
<table class="table table-striped">
    <tbody>
        <tr>
            <th>Project Name</th>
            <th>Description</th>
            <th>Action</th>
        </tr>

        <tr>
            <td>dfs</td>
            <td>dsa</td>
            <td style=" display:flex;">
                <x-button name="edit" />
                <a href=""><x-button name="delete" class="btn-danger" /></a>
            </td>
        </tr>

    </tbody>
</table>
@endsection