const csrf = document.querySelector("meta[name = 'csrf-token']")
function submitForm(){
    let email = document.querySelector("#EI");
    let password = document.querySelector("#PI");
    fetch("/submitcode", {
        method:'POST', 
        headers:{'Content-Type':'application/json', 'X-CSRF-Token': csrf.content},
        body: JSON.stringify({'email': x.value, 'code': y.value})
    })
    .then(response => response.json())
    .then(data => {
        console.log(data)
    })
    .catch(error => {
        console.log('ErrorSubmittingCode', error)
    })
}