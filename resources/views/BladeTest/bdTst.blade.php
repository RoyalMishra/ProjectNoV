
<x-layout>
        <div>


            {{--  @include('name.xyz') will include the file but only if exist otherwise it will dispaly error msg --}}
            {{--  @includeIf('name.xyz') will not display error msg and ignore the error msg , but current page info will be displayed --}}

            <!--This will be using all the Blade and php Functions  -->
            <h1>
                This page Will dispay all the Blade Functions here.
            </h1>
        

            <h2>
                eg : This will Print a Random Value  {{rand();}}    
                {{-- Using a Random Function to Display Random Output --}}
            </h2>
            <h2>
                This Will Display A loop: 
              
                    @for ($i =0; $i <=10; $i++)
                    {{-- This Will use the for loop but we should use @ sign with this --}}
                    
                        {{$i;}}
                        
                    @endfor
            </h2>
            <h2>
                This Will be Display an output for the array function

                
              {{-- This will fetch the array "$usr From the Ctllr and Print here" --}}

              @foreach ($usr as $u)    
              {{-- Now here I have just Imported the value here from the Controller  --}}
                
                    <ul><li>{{$u;}}</li></ul> 
                    {{-- Value is now printed from the array --}}
                
                  
              @endforeach

                    
                    
            

            </h2>
        </div>
</x-layout>