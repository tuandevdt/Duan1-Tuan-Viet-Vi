


let username = document.getElementById('username');
let password = document.getElementById('password');
let validFormLogin = document.getElementById('form-login');
let is_submit_user = true;
let is_submit_pass = true;
let inputs = document.querySelectorAll('.form-input');
inputs.forEach(input => {
    input.addEventListener('input', function() {
      // Kiểm tra nội dung của input
      if (this.value.trim() !== '') {
        this.style.backgroundColor = 'transparent'; // Thay đổi màu nền khi đã gõ
      } else {
        this.style.backgroundColor = 'transparent'; // Giữ màu nền là transparent nếu input rỗng
      }
    });
  });

// VALIDATE LOGIN
validFormLogin.addEventListener('submit', e => {
    
    
    validateInputs();
    if(!is_submit_user || !is_submit_pass) {
        e.preventDefault();
    }
});


let setSuccess = element => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

let setError = (element, message) => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};

let validateInputs = () => {
    let usernameValue = username.value.trim();
    let passwordValue = password.value.trim();

    if(usernameValue === '') {
        setError(username, 'Username is required.');
        is_submit_user = false;
    }
    else if (usernameValue.length < 5) {
        setError(username, 'Username cannot be less than 5 characters.');
        is_submit_user = false;
    } else {
        setSuccess(username);
        is_submit_user = true;    
    }


    if(passwordValue === '') {
        setError(password, 'Password is required');
        is_submit_pass = false;
    } else if(passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 character.');
        is_submit_pass = false;
    } else {
        setSuccess(password);
        is_submit_pass = true;
    }
    

};




let forGotPassa = document.querySelector('.forgot-pass-index');
forGotPassa.addEventListener('click', () => {
    document.querySelector('.wrapper-login').classList.remove('wrapper');
    document.querySelector('.wrapper-login').classList.add('wrapper-turn-off');
    document.querySelector('.return-pass').classList.add('wrapper');
    document.querySelector('.return-pass').classList.remove('wrapper-turn-off');
});
document.querySelector('.return-login').addEventListener('click', () => {
    document.querySelector('.return-pass').classList.add('wrapper-turn-off');
    document.querySelector('.return-pass').classList.remove('wrapper');
    document.querySelector('.wrapper-login').classList.add('wrapper');
    document.querySelector('.wrapper-login').classList.remove('wrapper-turn-off');
});




let passworda = document.querySelector('.input');
let validPass = document.getElementById('form-check-pass');

let is_pass = true;

validPass.addEventListener('submit', e => {

    validatePass();
    if(!is_pass) {
        e.preventDefault();
    }

});

let setSuccessa = element => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

let setErrora = (element, message) => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};

let validatePass = () => {
    let passValue = passworda.value.trim();

    if(passValue === '') {
        setError(passworda, 'Email is required.');
        is_pass = false;
    }else {
        setSuccess(passworda);
        is_pass = true;
    }
}


           // // VALIDATE REGISTER
let usernameRegister = document.getElementById('username-register');
let emailRegister = document.getElementById('email-register');
let passwordRegister = document.getElementById('password-register');
let repasswordRegister = document.getElementById('repassword-register');
let validFormRegister = document.getElementById('form-login-register');
let is_submit_user_re = true;
let is_submit_pass_re  = true;
let is_submit_repass_re  = true;
const valid = validFormRegister.addEventListener('submit', e => {
    
    let a = validateRegisterInputs();
    if(!is_submit_user_re  || !is_submit_pass_re  || !is_submit_repass_re ) {
        e.preventDefault();
    }
});



let setRegisterSuccess = element => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

let setRegisterError = (element, messages) => {
    let inputControl = element.parentElement;
    let errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = messages;
    inputControl.classList.add('error');
    inputControl.classList.remove('success');
};

let validateRegisterInputs = () => {
    let usernameRegisterValue = usernameRegister.value.trim();
    let emailRegisterValue = emailRegister.value.trim();
    let passwordRegisterValue = passwordRegister.value.trim();
    let repasswordRegisterValue = repasswordRegister.value.trim();

    if(usernameRegisterValue === '') {
        setRegisterError(usernameRegister, 'Username is required.');
        is_submit_user_re  = false;
    } else if(usernameRegisterValue.length < 5) {
        setRegisterError(usernameRegister, 'Username cannot be less than 5 characters.');
        is_submit_user_re  = false;
    } else {
        setRegisterSuccess(usernameRegister);
        is_submit_user_re  = true;
    }


    if(passwordRegisterValue === '') {
        setRegisterError(passwordRegister, 'Password is required');
        is_submit_pass_re  = false;
    } else if(passwordRegisterValue.length < 8) {
        setRegisterError(passwordRegister, 'Password must be at least 8 character.');
        is_submit_pass_re  = false;
    } else {
        setRegisterSuccess(passwordRegister);
        is_submit_pass_re = true;
    }

    if(repasswordRegisterValue === '') {
        setRegisterError(repasswordRegister, 'Confirm Password is required.');
        is_submit_repass_re = false;
    } else if(repasswordRegisterValue != passwordRegisterValue) {
        setRegisterError(repasswordRegister, 'Passwords doesn\'t match');
        is_submit_repass_re = false;
    }else{
        setRegisterSuccess(repasswordRegister);
        is_submit_repass_re = true;
        // formRegister.classList.remove('wrapper');
        //     formRegister.classList.add('wrapper-turn-off');

        //     formLogin.classList.remove('wrapper-turn-off');
        //     formLogin.classList.add('wrapper');
    }
};
//FORM LOGIN-REGISTER
    let formLogin = document.getElementById('login-index');
    let RegisterNow = document.getElementById('now-register');
    let loginNow = document.getElementById('now-login');
    let formRegister = document.getElementById('register-index');


    RegisterNow.addEventListener('click', () => {
        formLogin.classList.remove('wrapper');
        formLogin.classList.add('wrapper-turn-off');

        formRegister.classList.remove('wrapper-turn-off');
        formRegister.classList.add('wrapper');
    });

    loginNow.addEventListener('click', () => {
        formRegister.classList.remove('wrapper');
        formRegister.classList.add('wrapper-turn-off');
        formRegister.classList.remove('block-wrapper')

        formLogin.classList.remove('wrapper-turn-off');
        formLogin.classList.add('wrapper');
    });
