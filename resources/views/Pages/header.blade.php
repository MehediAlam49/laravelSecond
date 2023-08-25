<h1>Header Page</h1>
{{-- Write this if the array value exists --}}
{{-- @foreach ($names as $keys => $value)
<p>{{ $keys }} - {{ $value }}</p>
@endforeach --}}

{{-- Write this if the array value exists OR not exists--}}
@forelse ($names as $keys => $value)
<p>{{ $keys }} - {{ $value }}</p>
@empty
<p>Not Value Found.</p>
@endforelse
