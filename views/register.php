<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Register</title>
</head>
<body>
<div id="register">
        <h3 class="text-center text-white pt-5">Register Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="txt-center text-info">Register</h3>

                            <div class="form-group">
                                <label for="firstName" class="txt-info">First Name*</label>
                                <input type="text" name="firstName" id="firstName" class="form-control" placeholder="Enter first name" required />
                            </div>

                            <div class="form-group">
                                <label for="lastName" class="txt-info">Last Name*</label>
                                <input type="text" name="lastName" id="lastName" class="form-control" placeholder="Enter last name" required />
                            </div>

                            <div class="form-group">
                                <label for="birthdate" class="txt-info">Birthdate*</label>
                                <input type="date" name="birthdate" id="birthdate" class="form-control" required />
                            </div>

                            <div class="form-group">
                                <label for="reportSubject" class="txt-info">Report Subject*</label>
                                <input type="text" name="reportSubject" id="reportSubject" class="form-control" placeholder="Enter subject" required />
                            </div>

                            <div class="form-group">
                                <?php
                                include('static/country.html');
                                ?>
                            </div>

                            <div class="form-group">
                                <label for="phone" class="txt-info">Phone*</label>
                                <input type="tel" name="phone" id="phone" class="form-control" placeholder="097-123-45-67" required/>
                            </div>
                            
                            <div class="form-group">
                                <label for="email">Email address*</label>
                                <input type="email" class="form-control" id="email" aria-describedby="emailHelp" placeholder="Enter email" required />
                            </div>


                            <div class="form-group">
                                <label for="company" class="txt-info">Company</label>
                                <input type="text" name="company" id="company" class="form-control" placeholder="Enter company"/>
                            </div>

                            <div class="form-group">
                                <label for="position" class="txt-info">Position</label>
                                <input type="text" name="position" id="position" class="form-control" placeholder="Enter position"/>
                            </div>

                            <div class="form-group">
                                <label for="aboutMe">About Me</label>
                                <textarea class="form-control" name="aboutMe" id="aboutMe" rows="3" placeholder="Enter about yourself"></textarea>
                            </div>

                            <div class="form-group">
                                <label for="photo" class="form-label">Photo</label>
                                <input class="form-control" name="photo" type="file" id="photo">
                            </div>

                            </br>
                            <div class="form-group">
                                <input type="submit" name="RegisterSubmit"class="btn btn-info btn-md" value="submit" />
                            </div>

                            <div id="reg_link" class="text-right">
                                <a href="?login=true" class="text-info">Login here</a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

</body>
</html>
