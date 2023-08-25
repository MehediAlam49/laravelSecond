{{-- This is comment in blade syntax --}}
{{-- This is the blade secure output syntex like echo in php --}}
{{ 'This is ❤❤❤Blade practice page❤❤❤' }}

<br><br>
{{ 'The Sum of 50 & 20 is: ' . (50 + 20) }}

{{-- Write html code inside blade --}}
{!! '<h1>This is mehedi Alam</h1>' !!}
{{-- Write js code inside blade --}}
{!! "<script>alert('This is an alert.')</script>" !!}


{{-- print directly with syntax --}}
{{ '<h1>This is mehedi Alam</h1>' }}
<br>
{{ "<script>alert('This is an alert.')</script>" }}
<br><br>

{{-- Write php variable code inside blade template --}}
@php
    $user = 'Saiful Alam';
@endphp
{{ $user }}

{{-- Write an array inside blade --}}
@php
    $names = ['Salman khan', 'shahrukh khan', 'Amir khan', 'Shahid kapur', 'Ranvir kapur', 'Akshay Kumar'];
@endphp
@foreach ($names as $n)
    <li>{{ $n }}</li>
@endforeach
<br><br>
{{-- Start Checking foreach loop property --}}
@foreach ($names as $n)
    <li>{{ $loop->index }} - {{ $n }}</li>
@endforeach
<br><br>
@foreach ($names as $n)
    <li>{{ $loop->iteration }} - {{ $n }}</li>
@endforeach
<br><br>
@foreach ($names as $n)
    {{ $loop->count }}
@endforeach
<br><br>
@foreach ($names as $n)
    @if ($loop->first)
        <li style="color: red">{{ $n }}</li>
    @elseif ($loop->last)
        <li style="color: orange">{{ $n }}</li>
    @else
        <li>{{ $n }}</li>
    @endif
@endforeach
<br><br>
@foreach ($names as $n)
    @if ($loop->even)
        <li style="color: green">{{ $n }}</li>
    @elseif ($loop->odd)
        <li style="color: purple">{{ $n }}</li>
    @endif
@endforeach
{{-- End Checking foreach loop property --}}
