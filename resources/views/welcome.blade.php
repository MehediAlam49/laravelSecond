{{-- @php
    $fruits = ["One" => "Apple", "Two" => "Bannana", "Three" => "Orange", "Four"=> "Guava"];
@endphp
@include('Pages.header', ['names' => $fruits])

<h1>That is ❤❤❤Home page❤❤❤</h1>

<ul>
    <li><a href="{{ route('about') }}">About</a></li>
    <li><a href="{{ route('post') }}">Post</a></li>
</ul>

@include('Pages.footer') --}}

{{-- Write this if you are not sure that this page exist or not exists and site not show error --}}
{{-- @includeIf('Pages.contect') --}}


@extends('layouts.masterlayout')

@section('content')
<h1>This is Home Page.</h1>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iure at necessitatibus aperiam! Deserunt consectetur quo tenetur non, eius, quisquam a veritatis quasi quis, omnis voluptas saepe? Exercitationem veritatis ex modi placeat dolorum voluptate unde esse ab. Nam atque earum eum, facilis cumque corporis! Eligendi magni qui nisi excepturi quidem eaque suscipit! Itaque delectus illum odit nesciunt veritatis ipsam quos quaerat assumenda quisquam placeat ut expedita accusamus ipsum, necessitatibus recusandae modi laboriosam laudantium sed! Neque quae quam laboriosam sapiente odit, eveniet repudiandae nulla aliquam excepturi, obcaecati id maiores sunt deserunt quos voluptate alias rem pariatur quibusdam vero facilis provident! Accusantium!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iure at necessitatibus aperiam! Deserunt consectetur quo tenetur non, eius, quisquam a veritatis quasi quis, omnis voluptas saepe? Exercitationem veritatis ex modi placeat dolorum voluptate unde esse ab. Nam atque earum eum, facilis cumque corporis! Eligendi magni qui nisi excepturi quidem eaque suscipit! Itaque delectus illum odit nesciunt veritatis ipsam quos quaerat assumenda quisquam placeat ut expedita accusamus ipsum, necessitatibus recusandae modi laboriosam laudantium sed! Neque quae quam laboriosam sapiente odit, eveniet repudiandae nulla aliquam excepturi, obcaecati id maiores sunt deserunt quos voluptate alias rem pariatur quibusdam vero facilis provident! Accusantium!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iure at necessitatibus aperiam! Deserunt consectetur quo tenetur non, eius, quisquam a veritatis quasi quis, omnis voluptas saepe? Exercitationem veritatis ex modi placeat dolorum voluptate unde esse ab. Nam atque earum eum, facilis cumque corporis! Eligendi magni qui nisi excepturi quidem eaque suscipit! Itaque delectus illum odit nesciunt veritatis ipsam quos quaerat assumenda quisquam placeat ut expedita accusamus ipsum, necessitatibus recusandae modi laboriosam laudantium sed! Neque quae quam laboriosam sapiente odit, eveniet repudiandae nulla aliquam excepturi, obcaecati id maiores sunt deserunt quos voluptate alias rem pariatur quibusdam vero facilis provident! Accusantium!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iure at necessitatibus aperiam! Deserunt consectetur quo tenetur non, eius, quisquam a veritatis quasi quis, omnis voluptas saepe? Exercitationem veritatis ex modi placeat dolorum voluptate unde esse ab. Nam atque earum eum, facilis cumque corporis! Eligendi magni qui nisi excepturi quidem eaque suscipit! Itaque delectus illum odit nesciunt veritatis ipsam quos quaerat assumenda quisquam placeat ut expedita accusamus ipsum, necessitatibus recusandae modi laboriosam laudantium sed! Neque quae quam laboriosam sapiente odit, eveniet repudiandae nulla aliquam excepturi, obcaecati id maiores sunt deserunt quos voluptate alias rem pariatur quibusdam vero facilis provident! Accusantium!</p>
<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Tenetur iure at necessitatibus aperiam! Deserunt consectetur quo tenetur non, eius, quisquam a veritatis quasi quis, omnis voluptas saepe? Exercitationem veritatis ex modi placeat dolorum voluptate unde esse ab. Nam atque earum eum, facilis cumque corporis! Eligendi magni qui nisi excepturi quidem eaque suscipit! Itaque delectus illum odit nesciunt veritatis ipsam quos quaerat assumenda quisquam placeat ut expedita accusamus ipsum, necessitatibus recusandae modi laboriosam laudantium sed!</p>
@endsection

@section('title')
Home
@endsection


@push('scripts')
<script src="example.js"></script>
<script src="example2.js"></script>
<script src="example3.js"></script>
@endpush

@push('style')
<link rel="stylesheet" href="style2.css">
@endpush



{{-- For In style css --}}
@prepend('style')
<style>
    article{
        background-color: tan;
    }
</style>
@endprepend
