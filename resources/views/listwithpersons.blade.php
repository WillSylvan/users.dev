

@foreach ($allUsers as $user)
<a href="/registration/{{ $user->id}}">{{ $user->name }}</a> {{ $user->email}} <br/>

@endforeach
