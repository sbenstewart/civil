function regUser() {
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
url: "registeruser.php",
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
  var dataString = 'name1=' + name + '&mail1=' + mail + '&phone1=' + phone;
  if (name == '' || mail == '' || phone == '') {
  alert("Please Fill All Fields");
  } else {
  // AJAX code to submit form.
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
  return false;
}
