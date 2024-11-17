<x-layout>
    <div>
        <h1>
            {{-- ALl Working fine always use $array->name instead of $array['name']  with @foreach loop for array--}}

            {{-- Just to migrate the file You need do some changes in the app->providers->AppServiceProviders file just Add --}}
            {{-- use Illuminate\Support\Facades\Schema; in name space and limit the  public function boot(): void
                    {
                        //
                        Schema::defaultStringLength(191);
                    }   ||Function as the Code Defined|| --}}
                       {{-- To use Database Without migration just config the .env file || SESSION_DRIVER=database || and set to || SESSION_DRIVER=file || --}}
            Hi ! This is the View For Database View.
            <br>
            
           

            <table border="1">
                <tr>
                    <td>Name</td>
                    <td>Email</td>
                    <td>Password</td>
                </tr>
                @foreach ($ds as $d )
                <tr>
                    <td>{{$d->name}}</td>
                    <td>{{$d->email}}</td>
                    <td>{{$d->password}}</td>
                </tr>

                @endforeach
            </table>
            {{-- {{print_r($ds)}} --}}
            {{-- //{{return DB::select('selcet * from users');}} --}}
        </h1>
    </div>
</x-layout>