 @foreach ($users as $user) {
     <p>{{ $user->name }} (<a href="mailto:{{ $user->email }}">{{ $user->email }}</a>)</p>
 }
	      