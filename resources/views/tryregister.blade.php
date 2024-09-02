<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
</head>
<body>
    <form action="/user/registerr" method="POST">
        <input type="hidden" name="_token" value="<?php echo csrf_token() ?>">

        <table class="table table-striped">
            <tr>
                <td>Name</td>
                <td><input type="text" name="name"></td>
            </tr>
            <tr>
                <td>Username</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="text" name="password"></td>
            </tr>
            <tr>
                <td colspan="2" align="center"><input type="submit" value="Register"></td>
            </tr>
            <button class="btn btn-primary">Hello</button>
        </table>

    </form>
    
</body>
</html>