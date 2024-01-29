const csrf = document.querySelector("meta[name = 'csrf-token']")
function submitForm(){
    let email = document.querySelector("#EI");
    let password = document.querySelector("#PI");
    fetch("/submitcode", {
        method:'POST', 
        headers:{'Content-Type':'application/json', 'X-CSRF-Token': csrf.content},
        body: JSON.stringify({'email': email.value, 'code': password.value})
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        window.location.href = "/reset"
    })
    .catch(error => {
        console.log('ErrorSubmittingCode', error)
    })
}

function submitReset(){
    let email = document.querySelector("#EI");
    let password = document.querySelector("#PI");
    fetch("/submitres", {
        method:'POST', 
        headers:{'Content-Type':'application/json', 'X-CSRF-Token': csrf.content},
        body: JSON.stringify({'email': email.value, 'code': password.value})
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
        window.location.href = "/login"
    })
    .catch(error => {
        console.log('ErrorSubmittingCode', error)
    })
}