<form id="regForm" class="form" action="" method="post">

<h3 class="txt-center text-info" id="form_title">To participate in the conference, please fill out the form</h3>

<div class="tab">
  <p><input type="text" name="firstName" id="firstName" placeholder="First name..." oninput="this.className = ''" required /></p>
  <p><input type="text" name="lastName" id="lastName" placeholder="Last name..." oninput="this.className = ''" required /></p>
  <p><input type="date" name="birthdate" id="birthdate" placeholder="Birthdate..." oninput="this.className = ''" required /></p>
  <p><input type="text" name="reportSubject" id="reportSubject" placeholder="Report subject..." oninput="this.className = ''" required /></p>
  <p>
  <?php include('static/country.html'); ?>
  </p>
  <p><input type="tel" name="phone" id="phone" placeholder="Phone..." oninput="this.className = ''" required/></p>
  <p><input type="email" name="email" id="email" aria-describedby="emailHelp" placeholder="Email..." oninput="this.className = ''" required /></p>
</div>

<div class="tab">
  <p><input type="text" name="company" id="company" placeholder="Company..." oninput="this.className = ''"/></p>
  <p><input type="text" name="position" id="position" placeholder="Position..." oninput="this.className = ''"/></p>
  <p><textarea name="aboutMe" id="aboutMe" rows="3" placeholder="About yourself..." oninput="this.className = ''"></textarea></p>
  <p><input name="photo" type="file" id="photo" oninput="this.className = ''" /></p>
</div>

<div style="overflow:auto;">
  <div style="float:right;">
    <button type="button" class="btn btn-info btn-md" id="prevBtn" onclick="nextPrev(-1)">Previous</button>
    <button type="button" class="btn btn-info btn-md" id="nextBtn" onclick="nextPrev(1)">Next</button>
  </div>
  <input type="submit" id="submitBtn" name="RegisterSubmit" class="btn btn-info btn-md mt-3" value="submit" />
</div>

<div style="text-align:center;margin-top:40px;">
  <span class="step"></span>
  <span class="step"></span>
</div>

<div id="dash_link" class="text-right">
    <a href="?dashboard=true" class="text-info">List of participants here (<?php echo $users_count; ?>)</a>
</div>

<div class="fb-share-button" data-href="http://127.0.0.1:8001/" data-layout="" data-size=""><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=http%3A%2F%2F127.0.0.1%3A8001%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Share</a></div>

<a href="http://127.0.0.1:8001/" class="twitter-share-button" data-text="Check out this Meetup with SoCal AngularJS!" data-show-count="false">Tweet</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>

</form> 