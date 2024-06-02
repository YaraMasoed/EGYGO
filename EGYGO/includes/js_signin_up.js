
// sign up form validation   sign-up-form

const form = document.getElementById('form');
const Username = document.getElementById('Username');
const email = document.getElementById('email');
const password = document.getElementById('password');
const ConfirmPass = document.getElementById('ConfirmPass');

form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
    const UsernameValue = Username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const ConfirmPassValue = ConfirmPass.value.trim();

    if (UsernameValue === '') {
        setError(Username, 'Username is required');
    } else {
        setSuccess(Username);
    }

    if (emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if (ConfirmPassValue === '') {
        setError(ConfirmPass, 'Please confirm your password');
    } else if (ConfirmPassValue !== passwordValue) {
        setError(ConfirmPass, "Passwords doesn't match");
    } else {
        setSuccess(ConfirmPass);
    }

};