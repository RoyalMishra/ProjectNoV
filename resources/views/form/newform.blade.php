<x-layout>

            <div>
                <h1>
                    Hi! Welcome to the New Registrtion Form
                </h1>

                <form action="newu" method="post">
                    @csrf

                        <div style="margin:10px;">
                            <label>Please Select Your Skills: </br></label>
                            <input type="checkbox" name="skill[]" id="php" value="php">
                            <label for="php">PHP</label>
                            <input type="checkbox" name="skill[]" id="Java" value="Java">
                            <label for="Java">Java</label>
                            <input type="checkbox" name="skill[]" id="Python" value="Python">
                            <label for="Python">Python</label>
                        </div>
                        <div style="margin:10px;">
                            <label>Please Select Your Gender: </br></label>
                            <input type="radio" name="Gender" id="male" value="male">
                            <label for="male">Male</label>
                            <input type="radio" name="Gender" id="Female" value="Female">
                            <label for="Female">Female</label>
                            
                        </div>

                        <div style="margin:10px;">
                            <label>Please Select Your City: </br></label>
                            <select name="City" id="City">
                            <option value="Delhi">Delhi</option>
                            <option value="Noida">Noida</option>
                            <option value="Gurugram">Gurugram</option>
                        </select>
                        </div>
                        <div>
                            <button type="submit">Register</button>
                        </div>

                </form>
            </div>
</x-layout>