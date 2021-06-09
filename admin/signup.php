<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sign in as admin</title>
    <link href="./css/bootstrap.css" rel="stylesheet">
    <link href="./css/signup.css" rel="stylesheet">
</head>
<body>

<main class="flex-shrink-0">
<div class="container">
    <h1>Sign in to access as administrator</h1>
    <form action="./config/sign.php" method="post">
        
    <div class="row">
            <div class="col mb-4">
                <label>
                    <strong class="form-label">User</strong></label> : <input class="form-control" type="text" placeholder="Username" name="user"></div>
        
        <div class="col mb-4">
            <label>
                <strong class="form-label">Password</strong></label> : <input class="form-control" type="password" placeholder="Password" name="pw"></div></div>
        
       
        <input class="btn btn-primary" type="submit">
    </form>
    </div></main>
    <script src="./js/signup.js"></script>
</body>
</html>