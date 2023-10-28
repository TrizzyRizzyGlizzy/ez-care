const switchers = [...document.querySelectorAll('.switcher')]

switchers.forEach(item => {
	item.addEventListener('click', function() {
		switchers.forEach(item => item.parentElement.classList.remove('is-active'))
		this.parentElement.classList.add('is-active')
	})
})



// const form = document.getElementById('Create_user');
// const passwordInput = document.getElementById('signup-password');
// const confirmPasswordInput = document.getElementById('signup-password-confirm');


// const Lform = document.getElementById('login-user');
// const login_p_input = document.getElementById('login-email');


// form.addEventListener('submit', function(event) {
//   event.preventDefault();

//   const password = passwordInput.value;
//   const confirmPassword = confirmPasswordInput.value;

//   if (password == confirmPassword) {
    
//     const email = document.getElementById('signup-email').value;

//     console.log('Email:', email);
//     // console.log('Password:', password);
//     // console.log('Confirm Password:', confirmPassword);

//     // Close the current window
//     // window.close();
    
//     //  window.open('index.html');

     
 

//     // Store the email in local storage
//     localStorage.setItem('userEmail', email);
//     // localStorage.setItem('Password', password);
//     // localStorage.setItem('Confirm_P', confirmPassword);
    
//   }
  
  
  
// }

  
// );


