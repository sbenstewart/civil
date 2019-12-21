function hide() {
  var x = document.getElementById("submenu");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function regUser() {
var name = document.getElementById("name").value;
var mail = document.getElementById("mail").value;
var phone = document.getElementById("phone").value;
var code = document.getElementById("code").value;
var college = document.getElementById("college").value;
var year = document.getElementById("year").value;
var dept = document.getElementById("dept").value;
var course = document.getElementById("course").value;
var password = document.getElementById("password").value;
var confirmpassword = document.getElementById("confirmpassword").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&mail1=' + mail + '&phone1=' + phone + '&code1=' + code+ '&college1=' + college+ '&year1=' + year+ '&dept1=' + dept + '&course1=' + course + '&password1=' + password;
if (name == '' || mail == '' || phone == '' || college == '' || year == '' || dept == '' || course == '') {
alert("Please Fill All The Required Fields");
}
else if (password != confirmpassword) {
alert("Passwords don't match.");
} else {

  if(code =='')
  {
    jQuery.ajax({
    type: "POST",
    url: "php/registeruser.php",
    data: dataString,
    cache: false,
    success: function(html) {
    alert(html);
    }
    });
  }
  else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/registeruserwithcode.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
}
return false;
}

function regAccomodation() {
var date = document.getElementById("datepicker").value;
var time = document.getElementById("timepicker").value;
var hours = document.getElementById("hours").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&date1=' + date + '&time1=' + time + '&hours1=' + hours;
if (date == '' || time == '' || hours == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/registeraccomodation.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function regExtras() {
var extras = document.getElementById("extras").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString ='&extras1=' + extras;
if (extras == '') {
alert("Don't you want lunch and a T-shirt?");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/registerextras.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}



function regEvent() {
  var name = 'temp';
  var mail = 'temp';
  var phone = 'temp';
  var event = document.getElementById("event").value;
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'event1=' + event;
  if (name == '' || mail == '' || phone == '') {
  alert("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
  jQuery.ajax({
  type: "POST",
  url: "php/registerevent.php",
  data: dataString,
  cache: false,
  success: function(html) {
  alert(html);
  }
  });
  }
  return false;
}

function regAmbassador() {
var name = document.getElementById("name").value;
var mail = document.getElementById("mail").value;
var phone = document.getElementById("phone").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&mail1=' + mail + '&phone1=' + phone;
if (name == '' || mail == '' || phone == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/registerambassador.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function editUser() {
var name = document.getElementById("name").value;
var mail = document.getElementById("mail").value;
var phone = document.getElementById("phone").value;
var code = document.getElementById("code").value;
var college = document.getElementById("college").value;
var year = document.getElementById("year").value;
var dept = document.getElementById("dept").value;
var course = document.getElementById("course").value;
var cid = document.getElementById("cid").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = 'name1=' + name + '&mail1=' + mail + '&phone1=' + phone + '&code1=' + code+ '&college1=' + college+ '&year1=' + year+ '&dept1=' + dept + '&course1=' + course + '&cid1=' + cid;
if (name == '' || mail == '' || phone == '' || college == '' || year == '' || dept == '' || course == '' || cid == '') {
alert("Please Fill All The Required Fields");
} else {
// AJAX code to submit form.
if(code =='')
{
  jQuery.ajax({
  type: "POST",
  url: "php/edituser.php",
  data: dataString,
  cache: false,
  success: function(html) {
  alert(html);
  }
  });
}
else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/edituserwithcode.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
}
return false;
}


function loginUser() {
var mail = document.getElementById("mail").value;
var password = document.getElementById("password").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&mail1=' + mail + '&password1=' + password;
if (mail == '' || password == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/loginuser.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function loginAdmin() {
var mail = document.getElementById("mail").value;
var password = document.getElementById("password").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&mail1=' + mail + '&password1=' + password;
if (mail == '' || password == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/loginadmin.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}

function forgotPassword() {
var mail = document.getElementById("mail").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&mail1=' + mail;
if (mail == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/forgotpassword.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
