function hide() {
  var x = document.getElementById("submenu");
  if (x.style.display === "none") {
    x.style.display = "block";
  } else {
    x.style.display = "none";
  }
}

function displayToast(html){
toastr.options.preventDuplicates = true;
toastr.success(html)
/*toastr.error('Error', 'Error Title',{

  // tap to dismiss
  tapToDismiss: true,

  // toast class
  toastClass: 'toast',

  // container ID
  containerId: 'toast-container',

  // debug mode
  debug: false,

  // fadeIn, slideDown, and show are built into jQuery
  showMethod: 'fadeIn',

  // duration of animation
  showDuration: 300,

  // easing function
  showEasing: 'swing',

  // callback function
  onShown: undefined,
  onHidden: undefined,

  // hide animation
  hideMethod: 'fadeOut',

  // duration of animation
  hideDuration: 1000,

  // easing function
  hideEasing: 'swing',

  // close animation
  closeMethod: false,

  // duration of animation
  closeDuration: false,

  // easing function
  closeEasing: false,

  // timeout in ms
  extendedTimeOut: 1000,

  // you can customize icons here
  iconClasses: {
    error: 'toast-error',
    info: 'toast-info',
    success: 'toast-success',
    warning: 'toast-warning'
  },
  iconClass: 'toast-info',

  // toast-top-center, toast-bottom-center, toast-top-full-width
  // toast-bottom-full-width, toast-top-left, toast-bottom-right
  // toast-bottom-left, toast-top-right
  positionClass: 'toast-top-right',

  // set timeOut and extendedTimeOut to 0 to make it sticky
  timeOut: 5000,

  // title class
  titleClass: 'toast-title',

  // message class
  messageClass: 'toast-message',

  // allows HTML content in the toast?
  escapeHtml: false,

  // target container
  target: 'body',

  // close button
  closeHtml: '<button type="button">&times;</button>',

  // place the newest toast on the top
  newestOnTop: true,

  // revent duplicate toasts
  preventDuplicates: false,

  // shows progress bar
  progressBar: true

})*/
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
displayToast("Please Fill All The Required Fields");
}
else if(mail !='/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/'){
displayToast("Enter valid email.");
}
else if (password != confirmpassword) {
displayToast("Passwords don't match.");
} else {

  if(code =='')
  {
    jQuery.ajax({
    type: "POST",
    url: "php/registeruser.php",
    data: dataString,
    cache: false,
    success: function(html) {
    displayToast(html);
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
displayToast(html);
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
displayToast("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/registeraccomodation.php",
data: dataString,
cache: false,
success: function(html) {
displayToast(html);
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
  displayToast("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
  jQuery.ajax({
  type: "POST",
  url: "php/registerevent.php",
  data: dataString,
  cache: false,
  success: function(html) {
  displayToast(html);
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
displayToast("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/registerambassador.php",
data: dataString,
cache: false,
success: function(html) {
displayToast(html);
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
displayToast("Please Fill All The Required Fields");
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
  displayToast(html);
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
displayToast(html);
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
displayToast("Please Fill All Fields");

} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/loginuser.php",
data: dataString,
cache: false,
success: function(html) {
displayToast(html);
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
displayToast("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/loginadmin.php",
data: dataString,
cache: false,
success: function(html) {
displayToast(html);
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
displayToast("Please Fill All Fields");
} else {
// AJAX code to submit form.
jQuery.ajax({
type: "POST",
url: "php/forgotpassword.php",
data: dataString,
cache: false,
success: function(html) {
displayToast(html);
}
});
}
return false;
}
