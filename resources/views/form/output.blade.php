<div>
    <h2> This is the user output </h2>
       
       
      {{$usd['userCity']}}
        
      {{gettype($usd)}}
     
     
        @foreach ($usd as $x) 
            {{$x}}
            
        @endforeach
        
     
        
</div>