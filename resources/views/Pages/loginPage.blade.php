<x-layout>

        <div>
            <h1>
                Welcome to the Login Page {{$name}}       <!-- This Will Fetch the data from the controller -->

            </h1>
            <div>
                <div class="form-group">
                  <label for="">Enter Your Name</label>
                  <input type="text"
                    class="form-control" name="" id="" aria-describedby="helpId" placeholder="">
                  <small id="helpId" class="form-text text-muted">Enter Your Full Name</small>
                </div>
            </div>
        </div>

</x-layout>