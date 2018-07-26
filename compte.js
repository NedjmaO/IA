$('button').click(e => {
  var email = $('#mail').val()
  if ((email.indexOf("@")>0)&&(email.indexOf(".")>0)){
    alert("L'adresse email est valide");
  }
  else{
    alert("Veuillez saisir une adresse mail valide.")
  }
})
