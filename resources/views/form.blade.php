<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
</head>
<body>
    <h2>Buat Account Baru!</h2>
    <h3>Sign Up Form</h3>

    <form action="/welcome" method="post">
    @csrf
        <p>First Name:</p>
        <input type="text" name="first_name" required>

        <p>Last Name:</p>
        <input type="text" name="last_name" required>

        <p>Gender:</p>
        <input type="radio">Male <br>
        <input type="radio">Female <br>
        <input type="radio">Other <br>

        <p>Nationality:</p>
        <select>
            <option value="">Indonesia</option>
            <option value="">Malaysia</option>
            <option value="">Singapura</option>
            <option value="">Namex</option>
        </select>
        <br>
        <p>Language Spoken:</p>
        <input type="checkbox">Bahasa Indonesia <br>
        <input type="checkbox">English <br>
        <input type="checkbox">Other <br>

        <p>Bio:</p>
        <textarea cols="30" rows="10"></textarea>
        <br>
        <button type="submit">Sign Up</button>
    </form>
</body>
</html>
