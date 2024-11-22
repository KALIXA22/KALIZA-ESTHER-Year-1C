<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="formmuka.css">
    <title>ANYONE</title>


</head>
<body>
    <form action="formcapture.php" method="post">
        <fieldset>
            <legend>
            Personal details
            </legend>
           <label for="Fname">First name:
                    <input type="text" name="Fname" placeholder="Firstname" maxlength="30px" maxwidth="5px" required><br>
                    
                </label>
                <label for="Lname">
                    Last name:
                </label>
                    <input type="text" name="Lname" placeholder="Last name" maxlength="30px" maxwidth="5px" required><br>
               
                <label for="email1">
                    Email:<td><input type="text" name="email1" placeholder="Email" maxlength="30px" maxwidth="5px" required><br>
                </label> 
                <label for="Phonenumber1">
                    Phone number<td><input type="tel" name="Phonenumber1" placeholder="Phone number" maxlength="30px" maxwidth="5px" required><br>
                </label> 
            </fieldset>
            <fieldset>
            <legend>
                Family
            </legend>
            </tr>
            <tr>
            <label for="faname">
                   Father's name: <input type="text" name="faname" placeholder="Father's name" maxlength="30px" maxwidth="5px"
                required><br>
            </label> 
                <label for="email3">
                    Email :<input type="text" name="email3" placeholder="Email" maxlength="30px" maxwidth="5px" required><br>
                </label>
                <label for="Phonenumber3">
                    Phone number:<input type="tel" name="Phonenumber3" placeholder="Phone number" maxlength="30px" 
                    maxwidth="5px" required><br>
                </label>
                <label for="maname">
                    Mother's name:<input type="text" name="maname" placeholder="Mother's name" maxlength="30px" 
                    maxwidth="5px" required><br>
                </label>
                <label for="email2">
                    Email:<input type="text" name="email2" placeholder="Email" maxlength="30px" 
                    maxwidth="5px" required><br>
                </label>
                <label for="Phonenumber2">
                    Phone number:<input type="tel" name="Phonenumber2" placeholder="Phone number" maxlength="30px" 
                    maxwidth="5px" required><br>
                </label> 
            </fieldset>
            <fieldset>
            <legend>
                Schools attendeded
            </legend>
            <label for="Prischool">
                Primary School:<input type="text" name="Prischool" placeholder="Primary School" maxlength="30px" maxwidth="5px" required><br>
            </label>
            <label for="Secondary">
                Secondary school:<input type="text" name="Secondary" placeholder="secondary" maxlength="30px" 
                maxwidth="5px" required><br>

            <select id="level1">
                <legend>O'level</legend>
            <option value="choice 1">Lycee Notre Dames de Citeaux</option>
            <option value="choice 2">G.S Saint Andre </option>
            <option value="choice 3">FAWE GIRLS school</option>
            <option value="choice 4">St Ignas high school</option>
            <option value="choice 5">Ecoles des sciences Byimana</option>
            </select><br>
            <select id="level2">
                <label>A'Level:</label>
                <option value="choice 6">Lycee Notre Dames de Citeaux</option>
                <option value="choice 7">G.S Saint Andre </option>
                <option value="choice 8">FAWE GIRLS school</option>
                <option value="choice 9">St Ignas high school</option>
                <option value="choice 10">Ecoles des sciences Byimana</option>
                <option  value="choice 11">Rwanda Coding Academy</option>
            </select><br>
        </fieldset>
        <fieldset>
            <legend>
                Gender
            </legend>
            <label for="male">
            <input type="radio" name="male" value="male"> Male<br>
            <input type="radio" name="female" value="female">Female<br>
            </label>
        </fieldset>
        <fieldset>
            <legend>Meals</legend>
            <label for="Food">Food
            </label><br>
            <label>
            <input type="checkbox" name="options[]">Rice
            </label>
            <label for="Chips">
             <input type="checkbox" name="options[]">Chips
            </label><br>

            <label for="chicken">
             <input type="checkbox" name="options[]">Chicken
            </label><br>

            <label for="salad">
             <input type="checkbox" name="options[]">Salad
            </label><br>
            <label for="breakfast">
             <input type="checkbox" name="options[]">Milk and Biscuits
            </label><br>
        </fieldset>
        <fieldset>
            <legend>Message to convey:</legend>
            <label for="comment">Comment </label>
            <textarea name="textarea" rows="5" cols="20"></textarea> 
           
        <label>
            Favorite color
        <input type="color" name="colorful">
        </label><br>
        <button>SUBMIT</button>
    <fieldset>
</form>
</body>
</html>