var currentTab = 0;
showTab(currentTab);

function showTab(n) {

  var x = document.getElementsByClassName("tab");
  x[n].style.display = "block";

  if (n == 0) {
    document.getElementById("prevBtn").style.display = "none";
    document.getElementById("submitBtn").style.display = "none";
  } else {
    document.getElementById("prevBtn").style.display = "inline";
    document.getElementById("submitBtn").style.display = "inline";
  }
  if (n == (x.length - 1)) {
    document.getElementById("nextBtn").style.display = "none";

  } else {
    document.getElementById("nextBtn").style.display = "inline";
    document.getElementById("nextBtn").innerHTML = "Next";
  }

  fixStepIndicator(n)
}

function nextPrev(n) {

  var x = document.getElementsByClassName("tab");
  
  if (n == 1 && !validateForm()) return false;
  // Hide the current tab
  x[currentTab].style.display = "none";
 
  currentTab = currentTab + n;
  // check tab for end
  if (currentTab >= x.length) {

    document.getElementById("regForm").submit();
    return false;
  }

  showTab(currentTab);
}

function validateForm() {

  var x, y, i, valid = true;
  x = document.getElementsByClassName("tab");
  y = x[currentTab].getElementsByTagName("input");

  for (i = 0; i < y.length; i++) {
    // check field if required
    if (y[i].value == "" && y[i].required == true) {
      // add an "invalid" class to the field
      y[i].className += " invalid";

      valid = false;
    }
  }
  if (valid) {
    document.getElementsByClassName("step")[currentTab].className += " finish";
  }
  // return the valid status
  return valid;
}

function fixStepIndicator(n) {

  var index, step = document.getElementsByClassName("step");
  for (index = 0; index < step.length; index++) {
    step[index].className = step[index].className.replace(" active", "");
  }
  step[n].className += " active";
}