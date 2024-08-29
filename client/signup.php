

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Signup</title>
</head>
<body>

    <div class="container">
    <h1 class="header ">Signup</h1>

    <form method="post" enctype="multipart/form-data" action="./server/request.php">
    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="username" class="form-label">User Name</label>
        <input type="text" class="form-control" id="username" name="username" placeholder="Enter User Name">
    </div>

    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="email" class="form-label">User Email</label>
        <input type="email" class="form-control" id="email" name="email"  placeholder="Enter User Email">
    </div>

    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="address" class="form-label">User Address</label>
        <input type="text" class="form-control" id="address" name="address" placeholder="Enter User Address">
    </div>

    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="password" class="form-label">User Password</label>
        <input type="password" class="form-control" id="password" name="password" placeholder="Enter User Password">
    </div>
    <div class="offset-sm-3">
        <button type="submit" name="signup" class="btn btn-primary">Submit</button>
    </div>

    </form>

    </div>

</body>
</html>