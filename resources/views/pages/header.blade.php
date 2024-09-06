<link rel="stylesheet" href="css/style.css">

<Header><h1>Header</h1></Header>

<ul>
    {{-- @foreach ($names as $name) --}}
        {{-- <li> {{$loop->index}} - {{ $name }}</li> --}}
        {{-- <li> {{$loop->iteration}} - {{ $name }}</li> --}}
        {{-- <li> {{$loop->count}} - {{ $name }}</li> --}}
        {{-- @if ($loop->first)
            <li style="color: yellow">{{$name}}</li>
        @elseif ($loop->last)
            <li style="color: blue">{{$name}}</li>
        @else
            <li>{{$name}}</li>
        @endif
    @endforeach --}}

    {{-- @forelse ($names as $name)
        <br>{{$name}}
    @empty
        No name sent!
    @endforelse --}}
</ul>
