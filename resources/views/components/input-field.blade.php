<div>
    <label for="{{$name}}">{{$label}}:</label>
    <input type="{{$type}}" id="{{$name}}" name="{{$name}}" class="form-control" {{ $required ? 'required' : '' }}>
</div>