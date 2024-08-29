

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ask Question</title>
</head>
<body>

    <div class="container">
    <h1 class="header ">Ask Question</h1>

    <form method="post" enctype="multipart/form-data" action="./server/request.php">
    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="title" class="form-label">Title</label>
        <input type="text" class="form-control" id="title" name="title" placeholder="Enter Question Title">
    </div>

    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="decription" class="form-label">Description</label>
        <textarea class="form-control" id="decription" name="decription"  placeholder="Enter decription"></textarea>
    </div>
    <div class="offset-sm-3 col-6 margin-bottom-15">
        <label for="category" class="form-label">Category</label>
        <?php
         include ("category.php");
        
        ?>
        </select>
    </div>
    <div class="offset-sm-3">
        <button type="submit" name="signup" class="btn btn-primary">Submit</button>
    </div>

    </form>

    </div>

</body>
</html>