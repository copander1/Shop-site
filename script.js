const signInButton = document.getElementById('signInButton');
const signUpButton = document.getElementById('signUpButton');
const signUpForm = document.getElementById('signup-container');
const signInForm = document.getElementById('signin-container');

signInButton.addEventListener('click', function(){
    signUpForm.style.display = 'none';
    signInForm.style.display = 'block';
});

signUpButton.addEventListener('click', function(){
    signUpForm.style.display = 'block';
    signInForm.style.display = 'none';
});