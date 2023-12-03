<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/js/all.min.js" integrity="sha512-uKQ39gEGiyUJl4AI6L+ekBdGKpGw4xJ55+xyJG7YFlJokPNYegn9KwQ3P8A7aFQAUtUsAQHep+d/lrGqrbPIDQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>

<div class="container">
    <div class="row">
        <div class="col-md-6 m-auto mt-5 bg-white shadow border border-info">

        <p class="text-warning text-center">User Registertaion</p>
        <form action='insert2.php' method='post' enctype="multipart/form-data">
            <div class="mb-3">
                <label for="">username:</label>
                <input type="text" name="username" placeholder="enter username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">useremail:</label>
                <input type="email" name="useremail" placeholder="enter username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">usernumber:</label>
                <input type="number" name="usernumber" placeholder="enter username" class="form-control">
            </div>
            <div class="mb-3">
                <label for="">userpassword:</label>
                <input type="password" name="userpassword" placeholder="enter username" class="form-control">
            </div>
            <div class="mb-3">
            <button name="submit" class="w-100 bg-warning fs-4 text-white">registration</button>
            </div>
            <div class="mb-3">
            <button class="w-100 bg-danger fs-4 text-white "><a href="loginuser.php" class="text-decoration-none text-white">alredy account</a></button>
            </div>
        </form>
        </div>
    </div>
</div>
    
</body>
</html>