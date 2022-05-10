<?php
    if ($_SERVER["REQUEST_METHOD"] == "POST"){
        var_dump($_POST);
    }
?>
<!DOCTYPE html>
<html>
<head>
    <title>Forms</title>
    <meta charset="utf-8">
</head>
<body>

    <form method="post">

        <input name="username" value="John Doe">

        <input name="password" type="password">

        <div><p></p></div>
        <div> 
            Text: <input type="text" name="title">
        </div>
        <div><p></p></div>
        <div>
            Textarea: <textarea name="content" id="" cols="30" rows="10"></textarea>
        </div>
        <div><p></p></div>
        <div>
        <select name="dropdown[]" multiple>
            <optgroup label="First Group">
                <option value="optn1">1 Option</option>
                <option value="optn2">2 Option</option>
            </optgroup>
            <optgroup label="Second Group">
                <option value="optn3">3 Option</option>
                <option value="optn4">4 Option</option>
            </optgroup>
        </select>
        </div>
        <div><p></p></div>
        <button>Send</button>


    </form>
</body>
</html>