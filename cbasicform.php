<?php
    if (isset($_POST['searchterm'])){
        echo htmlspecialchars($_POST['searchterm'], ENT_QUOTES);
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
    <input type="submit" value="search">
</form> 