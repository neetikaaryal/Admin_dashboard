
@extends('index')

@section('content')
<div class="card-header">
                <h3 class="card-title">
                  <i class="ion ion-clipboard mr-1">User List</i>
                </h3>
              </div>
               <div class="ibox-tools" style="top: 8px;">
                <!-- <button type="button" class="btn btn-primary float-right"><i class="fas fa-plus"></i> Add item</button> -->
                <a href="{{route('add_user')}}" class="btn btn-primary float-right" >
                  <i class="fa fa-plus-circle"></i>Add User
                </a> 
            </div>
    <table class="table table-striped">
        <tbody>
            <tr>
                <th>Name</th>
                <th>About</th>                                                                                                                                                                                                                                                                                                                                                                                                                                                                                      
            </tr>
            <tr>
                <td>Data 1</td>
                <td>Data 2</td>
                
            </tr>
            <tr>
                <td>Data 4</td>
                <td>Data 5</td>
                
            </tr>
        </tbody>
    </table>
@endsection
