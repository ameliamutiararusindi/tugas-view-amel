<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>tugas amel formulir</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <form action="welcome" method="get">
    <h1>Buat Account Baru</h1>
    <h3>Sign Up Form</h3>
    <br>
        <label for="fname">First name :</label><br>
        </br>
        <input type="text" id="firstname" name="firstname" value=""><br>
        </br>
        <label for="lastname"> Last name :</label><br>
        </br>
        <input type="text" id="lastname" name="lastname" value=""><br>
        </br>

    <br>
    <form>
        <p>Gender</p>
        <input type="radio" id="male" name="gender" value="Male">
        <label for="male">Male</label><br>
        <input type="radio" id="female" name="gender" value="Female">
        <label for="female">Female</label>
    <br>
    <br>
    <label for="nationality">Nationality</label>
    <br>
        <select id="nationality" name="nationality">
            <option value="Indonesia">Indonesia</option>
            <option value="Amerika">Amerika</option>
            <option value="Inggris">Inggris</option>
        </select>

    </br>

    <p>Language Spoke</p>
    <form>
        <input type="checkbox" id="language1" name="language" value="Indonesia">
        <label for="language">Bahasa Indonesia</label><br>
        <input type="checkbox" id="language2" name="language" value="English">
        <label for="language">English</label><br>
        <input type="checkbox" id="language3" name="language" value="Other">
        <label for="languagex">Other</label><br></br>

         <p>Bio</p>
         <textarea name="massage" rows="10" cols="30">
         </textarea>
         <br>
         <input type="submit" value="Sign Up">
</form>    
</body>
</html>