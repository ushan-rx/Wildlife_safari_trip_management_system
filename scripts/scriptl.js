// ushan 

// login sign-up scipts

document.body.onload = loadPage;


const urlString = window.location.search;
const urlParam = new URLSearchParams(urlString);

// selecting the sections to display when the page loads
function loadPage() {
    
    const log_form = document.querySelector('.sign-form');
    const log_img = document.querySelector('.sign-img');

    const reg_form = document.getElementById('reg_form');
    const reg_img = document.getElementById('reg_img');

    if (urlParam.get('type') === "reg") {
        addClass2(log_form, log_img, 'visually-hidden');
    } else {
        addClass2(reg_form, reg_img, 'visually-hidden');
    }
    document.querySelector('.col-wrapper').classList.add('visible');

    if(urlParam.get('error')){
        document.getElementById('error_msg').classList.remove('hidden');
        if(urlParam.get('error') == "Registration successful"){
            document.getElementById('error_msg').style.backgroundColor = "rgba(180, 255, 142, 0.629)";
        }
    }
    if(urlParam.get('error2')){
        document.getElementById('error_msg2').classList.remove('hidden');
        if(urlParam.get('error2') == "Login successful"){
            document.getElementById('error_msg2').style.backgroundColor = "rgba(180, 255, 142, 0.629)";
        }
    }
}

function addClass2(element1, element2, className) {
    element1.classList.add(className);
    element2.classList.add(className);
}

// changing login and register page

document.querySelectorAll('.form-toggle').forEach(element => {
    element.onclick = showHideForm;
});

function showHideForm() {
    if (urlParam.get('type') === "reg") {
        location.href = "signInUp.php?type=log";
    }
    else {
        location.href = "signInUp.php?type=reg";
    }
}


// show hide password fields

function showpw(imgId, field) {
    var eyeIcon = document.getElementById(imgId);
    var pwfieldLog = document.getElementById('log_pw');
    var pwfieldReg = document.getElementById('reg_pw');
    if (field === 'log')
        toggleType(pwfieldLog, eyeIcon);
    else if (field === 'reg')
        toggleType(pwfieldReg, eyeIcon);
}

function toggleType(element, id) {
    if (element.type === "password") {
        element.type = "text";
        id.src = "images/closed_eye.png";
    } else {
        element.type = "password";
        id.src = "images/open_eye.png";
    }
}

