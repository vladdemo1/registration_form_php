<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <link rel="stylesheet" href="static/style.css">

    <title>Register</title>
</head>
<body>

<div id="fb-root"></div>
<script async defer crossorigin="anonymous" src="https://connect.facebook.net/en_US/sdk.js#xfbml=1&version=v17.0" nonce="YpVpXpxB"></script>


<div class="cont">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3303.761723587065!2d-118.34625852349969!3d34.101244073138524!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x80c2bf20e4c82873%3A0x14015754d926dadb!2zNzA2MCBIb2xseXdvb2QgQmx2ZCwgTG9zIEFuZ2VsZXMsIENBIDkwMDI4LCDQodCo0JA!5e0!3m2!1sru!2sua!4v1692171050681!5m2!1sru!2sua" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
</div>


<div id="register">
        <h3 class="text-center text-white pt-5">Register Form</h3>
        <div class="container">
            <div id="login-row" class="row justify-content-center align-items-center">
                <div id="login-column" class="col-md-6">
                    <div id="login-box" class="col-md-12">
                        <form id="login-form" class="form" action="" method="post">
                            <h3 class="txt-center text-info">To participate in the conference, please fill out the form</h3>

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

                            <div id="dash_link" class="text-right">
                                <a href="?dashboard=true" class="text-info">List of participants here (<?=$_SESSION['usersCount'];?>)</a>
                            </div>

                        </form>
                    </div>

                    <div class="fb-share-button" data-href="http://127.0.0.1:8001/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8001%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

                    <a href="http://127.0.0.1:8001/" class="twitter-share-button" data-text="Check out this Meetup with SoCal AngularJS!" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
                    
                </div>
            </div>
        </div>
    </div>

</body>
</html>
