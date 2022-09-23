@foreach ($users as $user)
    <form action="/api/user/{{$user->id}}" method="post">
        {{csrf_field()}}
        {{method_field('GET')}}
        <div class="form-group">
            <input type="submit" value="{{$user->name}}">
        </div>
    </form>
@endforeach