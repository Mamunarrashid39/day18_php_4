<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="action.php" method="POST">
    <table>
        <tr>
            <th>First Name</th>
            <th> <input type="text" " name=" first-name"></th>
        </tr>
        <tr>
            <th>Last Name</th>
            <th> <input type="text" name="last-name"></th>
        </tr>
        <tr>
            <th>Full Name</th>
            <th> <input type="text" value="<?php echo isset($result)? $result:''?> "</th>
        </tr>
        <tr>
            <th></th>
            <td> <input type="submit" name="btn" value="Submit"></td>
        </tr>
    </table>
</form>

</body>
</html>