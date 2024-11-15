<x-layout>


        <h2> This is the Registration Page</h2>
        <form action="/addusr" method="post" style="background-color:">
            @csrf
            <input type="text" name="userName" id="UserName" placeholder="Enter Your Name"  onclick="alert('Please Enter a valid Name')" required/>
            <input type="email" name="userEmail" id="UserEmail" placeholder="Enter Your Email" required/>
            <input type="text" name="userCity" id="UserCity" placeholder="Enter Your City" required/>
            <label for="favcolor">Select your favorite color:</label>
            {{-- <input type="color" id="favcolor" name="favcolor" value=""> --}}
            <input type="color" id="html5colorpicker" onchange="clickColor(0, -1, -1, 5)" value="" style="width:25%;" name="favcolor">

            <button type="submit" style="margin: 10px;">Register</button>
            <input type="reset" value="Reset">

            {{-- URL Generation of curent and previous page --}}
            {{-- {{URL::previous()}} --}}
            {{-- {{URL::current()}} --}}
                    {{-- This Will Use Full Url Along Arrtribute eg : 127.0.0.1/home/name=?royal instead of 127.0.0.1/home/name  --}}
                    {{-- {{URL::full()}}          --}}
            {{-- {{url()->previous()}} --}}
            {{-- {{url()->current()}} --}}
            

            {{-- *****Now This will redirect to the original url of the view Home --}}
            <a href={{route('hm')}}>Home Page</a> 


        </form>

</x-layout>