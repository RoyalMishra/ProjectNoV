<x-layout>

    {{-- HTTPS is nothing but the method to call the APIs in the Laravel --}}
    {{-- APIs: Application Programming Interface , is noting but the Interface Between Two Programming Language or Frameworks or Plateforms 
    which Helps to transfer the data from one to another level Domain. --}}
    {{--  To Use the API we have to use HTTPS Method in the contrller This page Will show us the way  --}}
    <div>
        <h1>
            This page is about the APIS In  the Laravel .
            Here We will Fetch the details of an API availbe online on this page.

            <div>
                <table border="1">
                    <tr>
                        <th>ID</th>
                        <th>Name</th>
                        <th>User_Name</th>
                        <th>Email</th>
                    </tr>
                   
                   
                   
                   
                  
                    
                    <tr>
                        <th>{{$data->id}}</th>
                        <th>{{$data->name}}</th>
                        <th>{{$data->username}}</th>
                        <th>{{$data->email}}</th>
                    </tr>
                   
                    
                    
                    
                  
                    
                </table>
            </div>

        </h1>
    </div>
</x-layout>