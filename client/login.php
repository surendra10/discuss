<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

    <div class="container">
    <h1 class="header ">Login</h1>

    <form method="post" enctype="multipart/form-data" action="./server/request.php">

    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="email" class="form-label">User Email</label>
        <input type="email" class="form-control" name="email" id="email"  placeholder="Enter User Email">
    </div>

    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="password" class="form-label">User Password</label>
        <input type="password" class="form-control" name="password" id="password"  placeholder="Enter User Password">
    </div>
    <div class="offset-sm-3">
        <button type="submit" name="login" class="btn btn-primary">Login</button>
    </div>

    </form>

    </div>

</body>
</html>