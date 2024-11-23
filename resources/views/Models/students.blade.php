<x-layout>
    <div>
        <h3>
            Hi! This Will Display the List of Students From the Students table of the Database
        </h3>
        <h2>
            <table border="1">
                <tr>
                    <th>Id</th>
                    <th>Name</th>
                    <th>Email</th>
                    <th>Password</th>
                </tr>
                @foreach ($a as $d)
                    
                
                <tr>
                    <th>{{$d->Id}}</th>
                    <th>{{$d->Name}}</th>
                    <th>{{$d->Email}}</th>
                    <th>{{$d->Password}}</th>
                </tr>
                @endforeach
            </table>
        </h2>
    </div>
</x-layout>