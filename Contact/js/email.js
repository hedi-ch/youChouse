function send() {
    console.log("hi")
    let fullname = document.forms["myform"]["fullname"].value;
  var msg =document.forms["myform"]["message"].value;
  var subject = document.forms["myform"]["subject"].value;
  var phon = document.forms["myform"]["phone"].value;
  var email = document.forms["myform"]["email"].value;
  console.log("cv1");
Email.send({
    SecureToken : "4773ec5f-8a3a-4c1d-bb40-add56c45a707",
    To : 'vijak78567@djpich.com',
    From : email,
    Subject : subject,
    Body : `email from ${fullname} phone:${phon} the message is :
    ${msg}`
}).then(
  message => alert(message)
);
console.log("cv2");
}


