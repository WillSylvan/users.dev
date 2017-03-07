
@foreach ($allUsers as $user)
<a href="/users/{{ $user->id}}">{{ $user->name }}</a> {{ $user->email}} <br/>

@endforeach
