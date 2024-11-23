<x-layout>
    <div>
        <h1>
           User Table Data
        
        </h1>
        <table border=1>
            <tr>
                <td>Name</td>
                <td>Email</td>
                <td>Password</td>
            </tr>
            @foreach ($data as $d)
            <tr>
                <td>{{$d->Name}}</td>
                <td>{{$d->Email}}</td>
                <td>{{$d->Password}}</td>
            </tr>
            @endforeach
        </table>


    </div>
    
</x-layout>