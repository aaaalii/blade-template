<link rel="stylesheet" href="css/style.css">
@php
    // $names = ['Ali', 'Haram', 'Akash', 'Afaq'];
    $names = [];

@endphp
@include('pages.header')

<div class="container">
    <h1>Home Page</h1>
    <a href={{ route('about') }}>About us</a>
    <a href={{ route('post') }}>Posts</a>
</div>

{{-- <h1>Home Page</h1>
<a href={{route('about')}}>About us</a>
<a href={{route('post')}}>Posts</a> --}}

{{-- can also add javascript code through it --}}
{{-- {!! "<h1>Home Page Again " . 29  . "</h1>"!!} --}}

{{-- {{ 4 + 5 }}
<br>
{{"Hello World"}}
<br> --}}
{{-- Declaring and printing variables --}}
{{-- @php
    $user = "Ali";
    echo "<br>";
    echo $user;
@endphp
<br><br>
{{$user}} --}}

{{-- @if ()
    
@elseif()

@else
    
@endif --}}
{{-- @includeUnless(false, 'pages.footer') --}}
@includeWhen(true, 'pages.footer')


@includeIf('pages.name')
