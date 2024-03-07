@extends('index')
@section('content')

<form method="POST" action="{{route('store-user')}}" enctype="multipart/form-data">
    @csrf
    
        <!-- <label for="name">Name:</label>
        <input type="text" id="name" name="name" class="form-control" required> -->
        <x-input-field type="text" name="name" label="Name" :required="true"/>
        <x-input-field type="textarea" name="about" label="About" :required="true"/>
        <x-input-field type="file" name="image" label="Image" :required="true"/>
        <x-button name="Submit" />
     <!-- <button type="submit" class="btn btn-primary">Submit</button> -->
</form>
@endsection