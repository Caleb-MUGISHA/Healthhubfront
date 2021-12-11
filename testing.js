require('axios');

// var login = document.querySelector("input-submit");
// var gather_email1 = document.querySelector("gather_email1")
// var gather_password1 = document.querySelector("gather_password1")

// login.addEventListener("click", (e) => {


//     console.log(gather_email1.value)
console.log(gather_password1.value)
    // axios.post('https://healthhubb.herokuapp.com/users/signin', {

//     emailaddress: gather_email1.value,
//     password: gather_password1.value
// })

// .then(function(response) {
//     console.log(response);
//     render(home.php);
// })

// .catch(function(error) {
//     console.log(error);
// });
const form = document.querySelector('form');

const formEvent = form.addEventListener('submit', event => {
    event.preventDefault();

    const email = document.querySelector('#gather_email1').value;
    const password = document.querySelector('#gather_password1').value;

    axios.post('https://healthhubb.herokuapp.com/users/signin', {

        emailaddress: email,
        password: password
    })

});

// })