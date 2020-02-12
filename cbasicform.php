<?php
    $name = '';
    $password = '';
    $gender = '';
    $colour = '';
    $languages = [];
    $comments = '';
    $tc = '';
    if (isset($_POST['submit'])){
        $ok = true;
        if (!isset($_POST['name']) || $_POST['name'] === ''){
            $ok =false;
        }   else {
            $name = $_POST['name'];
        };
        if (!isset($_POST['password']) || $_POST['password'] === ''){
            $ok =false;
        }   else {
            $password = $_POST['password'];
        };
        if (!isset($_POST['gender']) || $_POST['gender'] === ''){
            $ok =false;
        }   else {
            $gender = $_POST['gender'];
        };
        if (!isset($_POST['colour']) || $_POST['colour'] === ''){
            $ok =false;
        }   else {
            $colour = $_POST['colour'];
        };
        if (!isset($_POST['languages']) || !is_array($_POST['languages'])
                || count($_POST['languages']) === 0){
            $ok =false;
        }   else {
            $languages = $_POST['languages'];
        };
        if (!isset($_POST['comments']) || $_POST['comments'] === ''){
            $ok =false;
        }   else {
            $comments = $_POST['comments'];
        };
        if (!isset($_POST['tc']) || $_POST['tc'] === ''){
            $ok =false;
        }   else {
            $tc = $_POST['tc'];
        };

        if ($ok === true) {
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
    }
?>

<form
    action=""
    method="post">
    User name: <input type="text" name="name" value="<?php
        echo htmlspecialchars($name,ENT_QUOTES);
    ?>"><br>
    Password: <input type="password" name="password"><br>
    Gender:
        <input type="radio" name="gender" value="f"<?php
        if ($gender === 'f') {
            echo ' checked';
        }
    ?>> female
        <input type="radio" name="gender" value="m"<?php
        if ($gender === 'm') {
            echo ' checked';
        }
    ?>> male
        <input type="radio" name="gender" value="o"<?php
        if ($gender === 'o') {
            echo ' checked';
        }
    ?>> other<br />
    Favourite Colour:
        <select name="colour">
            <option value="">Please Select</option>
            <option value="#f00"<?php
        if ($colour === '#f00') {
            echo ' selected';
        }
    ?>>Red</option>
            <option value="pink"<?php
        if ($colour === 'pink') {
            echo ' selected';
        }
    ?>>Pink</option>
            <option value="blue"<?php
        if ($colour === 'blue') {
            echo ' selected';
        }
    ?>>Blue</option>
            <option value="gold"<?php
        if ($colour === 'gold') {
            echo ' selected';
        }
    ?>>Gold</option>
        </select><br>
    Languages Spoken:
        <select name="languages[]" multiple size="3">
            <option value="en"<?php
        if (in_array('en', $languages)) {
            echo ' selected';
        }
    ?>>English</option>
            <option value="fr"<?php
        if (in_array('fr', $languages)) {
            echo ' selected';
        }
    ?>>French</option>
            <option value="it"<?php
        if (in_array('it', $languages)) {
            echo ' selected';
        }
    ?>>Italian</option>
        </select><br>
    Comments: <textarea name="comments"><?php
        echo htmlspecialchars($comments,ENT_QUOTES);
    ?></textarea><br>
    <input type="checkbox" name="tc" value="ok"<?php
        if ($tc === 'ok') {
            echo ' checked';
        }
    ?>>
        I accept the Terms&amp;Conditions<br>
    <input type="submit" name="submit" value="register">
</form> 

