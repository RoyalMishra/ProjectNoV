<x-layout>

    <div>
        <table border=1>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
            @foreach ($data as $d)
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->password}}</td>
                </tr>                
            @endforeach
        </table>
    </div>

    
</x-layout>