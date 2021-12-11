require('axios');

var login = document.getElementById("login-form");
var gather_email1 = document.getElementById("gather_email1")
var gather_password1 = document.getElementById("gather_password1")

login.addEventListener("submit", (e) => {
    axios.post('https://healthhubb.herokuapp.com/users/signin', {

        emailaddress: gather_email1.value,
        password: gather_password1.value
    })

    .then(function(response) {
        console.log(response);

    })

    .catch(function(error) {
        console.log(error);
    });


})