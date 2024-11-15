<x-layout>

    <div>
        <h1>
            Hi! This is the New Form Output page
        </h1>

            @foreach ($val as $r)
                {{$r}}
                
            @endforeach
    </div>
</x-layout>