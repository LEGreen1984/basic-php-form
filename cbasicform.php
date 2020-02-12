<?php
    $name = '';
    $password = '';
    $gender = '';
    $colour = '';
    $languages = [];
    $comments = '';
    $tc = '';
    if (isset($_POST['submit'])){
        if (isset($_POST['name'])) {
            $name = $_POST['name'];
        };
        if (isset($_POST['password'])) {
            $password = $_POST['password'];
        };
        if (isset($_POST['gender'])) {
            $gender = $_POST['gender'];
        };
        if (isset($_POST['colour'])) {
            $colour = $_POST['colour'];
        };
        if (isset($_POST['languages'])) {
            $languages = $_POST['languages'];
        };
        if (isset($_POST['comments'])) {
            $comments = $_POST['comments'];
        };
        if (isset($_POST['tc'])) {
            $tc = $_POST['tc'];
        };

        printf('User name: %s
        <br>Password: %s
        <br>Gender: %s
        <br>Colour: %s
        <br>Language(s): %s
        <br>Comments: %s
        <br>Terms&ampConditions: %s',
        htmlspecialchars($name, ENT_QUOTES),
        htmlspecialchars($password, ENT_QUOTES),
        htmlspecialchars($gender, ENT_QUOTES),
        htmlspecialchars($colour, ENT_QUOTES),
        htmlspecialchars(implode(' ',$languages), ENT_QUOTES),
        htmlspecialchars($comments, ENT_QUOTES),
        htmlspecialchars($tc, ENT_QUOTES));
    }
?>

<form
    action=""
    method="post">
    User name: <input type="text" name="searchterm"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f"> female
        <input type="radio" name="gender" value="m"> male
        <input type="radio" name="gender" value="o"> other<br />
    Favourite Colour:
        <select name="colour">
            <option value="">Please Select</option>
            <option value="#foo">Red</option>
            <option value="pink">Pink</option>
            <option value="blue">Blue</option>
            <option value="gold">Gold</option>
        </select><br>
    Languages Spoken:
        <select name="languages[]" multiple size="3">
            <option value="en">English</option>
            <option value="fr">French</option>
            <option value="it">Italian</option>
        </select><br>
    Comments: <textarea name="comments"></textarea><br>
    <input type="checkbox" name="tc" value="ok">
        I accept the Terms&amp;Conditions<br>
    <input type="submit" name="submit" value="register">
</form> 
