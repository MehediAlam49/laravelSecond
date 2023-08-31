<h1>User page.</h1>

{{-- <h3>Hello dear, <br><br> Name: {{ $user }} <br> City: {{ !empty($city) ? $city : 'No city' }}</h3> --}}
@foreach ($user as $id => $value)
<h2>{{ $id }} {{ $value['name'] }} | {{ $value['phone'] }} | {{ $value['city'] }}
    <a href="{{ route('view.user', $id) }}">Show</a>
</h2>
@endforeach

