function validation() {
  let fullname = document.forms["myform"]["fullname"];
  var msg =document.forms["myform"]["message"]
  var subject = document.forms["myform"]["subject"];
  var phon = document.forms["myform"]["phone"];
  var email = document.forms["myform"]["email"];
  var posp = email.value.indexOf(".");
  var popat = email.value.indexOf("@");
  var lastposp = email.value.lastIndexOf(".");
  var l = email.value.length;
  countat = email.value.split("@").length - 1;
  if (fullname.value == "") {
    document.getElementById("error").classList.remove("hide")
    document.getElementById("error").innerHTML = "fullname invalide";
    fullname.focus();
    return false;
  } else {
    document.getElementById("error").classList.add("hide")
  }
  if (
    countat != 1 ||
    posp < 1 ||
    posp < 1 ||
    lastposp == l - 1 ||
    lastposp - popat < 3
  ) {
    document.getElementById("error").classList.remove("hide")
    document.getElementById("error").innerHTML = "email invalide";
    email.focus();
    return false;
  } else {
    document.getElementById("error").classList.add("hide")
  }

  if (phon.value == "" || !(phon.value.length == 8)) {
    document.getElementById("error").classList.remove("hide")
    document.getElementById("error").innerHTML =
      "phone must be 9 number whithout +216 or any cuntry number";
    phone.focus();
    return false;
  } else {
    document.getElementById("error").classList.add("hide")
  }

  if (subject.value == "") {
    document.getElementById("error").classList.remove("hide")
    document.getElementById("error").innerHTML = "subject must not be empty";
    subject.focus();
    return false;
  } else {
    document.getElementById("error").classList.add("hide")
  }
  if (msg.value == "") {
    document.getElementById("error").classList.remove("hide")
    document.getElementById("error").innerHTML = "message must not be empty";
    msg.focus();
    return false;
  } else {
    document.getElementById("error").classList.add("hide")
    document.getElementById("error").innerHTML = "";
  }
  /*send email */
  console.log("cv1");
  Email.send({
      SecureToken : "1f099934-5f8a-473b-9438-dc0c3fdd4fa2",
      To : 'vijak78567@djpich.com',
      From : email,
      Subject : subject,
      Body : `email from ${fullname} phone:${phon} the message is :
      ${msg}`
  }).then(
    message => alert(message)
  );
  console.log("cv2");
  return true;
}
