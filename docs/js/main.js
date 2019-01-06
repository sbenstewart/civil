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
    url: "registeruser.php",
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
url: "registeruserwithcode.php",
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
url: "registeraccomodation.php",
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
  // Returns successful data submission message when the entered information is stored in database.
  var dataString = 'event1=' + "sample";
  if (name == '' || mail == '' || phone == '') {
  alert("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
  jQuery.ajax({
  type: "POST",
  url: "registerevent.php",
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
url: "registerambassador.php",
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
  url: "edituser.php",
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
url: "edituserwithcode.php",
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
var cid = document.getElementById("cid").value;
// Returns successful data submission message when the entered information is stored in database.
var dataString = '&mail1=' + mail + '&cid1=' + cid;
if (mail == '' || cid == '') {
alert("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "loginuser.php",
data: dataString,
cache: false,
success: function(html) {
alert(html);
}
});
}
return false;
}
