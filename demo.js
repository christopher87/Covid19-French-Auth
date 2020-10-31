
function refreshData() {
    const firstname = document.getElementById("first-name").value; //firstname
    const lastname = document.getElementById("last-name").value; //lastname
    const birthday = document.getElementById("birthdate").value; //birthday
    const lieunaissance = document.getElementById("birth-place").value; //place of born
    const address = document.getElementById("address").value; //address
    const town = document.getElementById("city").value; //city
    const zipcode = document.getElementById("post-code").value; //zipcode
    var   reason = document.getElementById('motive').value;

    var data = {
        f: firstname,
        l: lastname,
        b: birthday,
        p: lieunaissance,
        a: address,
        c: town,
        z: zipcode,
        r: reason
    }
    document.querySelector("#generation-link > a").href = window.location.origin + "/generate.html#" + serialize(data);
    document.querySelector("#generation-link > a").innerText = window.location.origin + "/generate.html#" + serialize(data);
    document.querySelector("#generation-link").style.display = 'block';
}

function serialize(obj) {
    var str = [];
    for(var p in obj)
        str.push(encodeURIComponent(p) + "=" + encodeURIComponent(obj[p]));
    return str.join("&");
}

if (window.localStorage) {
    const inputs = document.querySelectorAll('#form-profile input, #form-profile select');
    var id, value;

    for (let i = 0; i < inputs.length; i++) {
        id = inputs[i].id;

        inputs[i].addEventListener('input', function() {
            window.localStorage.setItem(inputs[i].id, inputs[i].value);
        });
        
        if (value = window.localStorage.getItem(id)) {
            console.log(id);
            console.log(value);
            inputs[i].value = value;
            document.getElementById('my-data').style.display = 'block';
        }
    }

    document.getElementById('my-data').addEventListener('click', function(e) {
        e.preventDefault();
        
        window.localStorage.clear();
        window.location.reload();
    });
}