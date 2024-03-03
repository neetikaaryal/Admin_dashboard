@extends('index')
@section('content')

<form method="POST" action="{{route('store-user')}}">
    @csrf
    <div>
        <label for="name" >Name:</label>
        <input type="text" id="name" name="name" class="form-control" required>
    </div>

    <div>
        <label for="about">About:</label>
        <textarea id="about" name="about" class="form-control" required></textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>
@endsection