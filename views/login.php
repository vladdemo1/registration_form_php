<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <title>Reg Form</title>
</head>
<body>
    <div id="login">
        <h3 class="text-center text-white pt-5">Login Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="txt-center text-info">Login</h3>
                            <div class="from-group">
                                <label for="username" class="txt-info">Username:</label>
                                <input type="text" name="username" id="username" class="form-control" />
                            </div>

                            <div class="from-group">
                                <label for="password" class="txt-info">Password:</label>
                                <input type="password" name="password" id="password" class="form-control" />
                            </div>
                            </br>

                            <div class="form-group">
                                <input type="submit" name="LoginSubmit"class="btn btn-info btn-md" value="submit" />
                            </div>

                            <div id="reg_link" class="text-right">
                                <a href="?register=true" class="text-info">Register here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>