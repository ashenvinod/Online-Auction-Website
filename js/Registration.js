function checkPassword() {
  if (
    document.getElementById("pwd").value !=
    document.getElementById("cnfrmpwd").value
  ) {
    alert("Password mismatch");
    return false;
  } else {
    alert("Success!");
    return true;
  }
}
function enableButton() {
  if (document.getElementById("checkBox").checked) {
    document.getElementById("registerbtn").disabled = false;
  } else {
    document.getElementById("registerbtn").disabled = true;
  }
}
