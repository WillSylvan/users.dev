

@foreach ($allUsers as $user)
<a href="/person/{{ $user->id}}">{{ $user->name }}</a> {{ $user->email}} <br/>

@endforeach
