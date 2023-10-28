
const userEmail = localStorage.getItem('userEmail');
const userIcon = document.getElementById('userEmailLink');

if (userEmail) {
  // User is logged in, update the user icon and email link
  userIcon.innerHTML = `<a>${userEmail}</a>`;
} else {
  // User is not logged in, set the link to "Login/Signup"
  userIcon.innerHTML = '<a>Login/Signup</a>';
}


userIcon.addEventListener('click', function() {
  if (userEmail) {
    // User is logged in, open the user-profile.html page in a new window

    window.close(); 
    window.open('user-profile.html', '_blank');

  } else {
    
    window.close(); // Close the current window
    

    window.location.href = "Creation-page.html";
  }
});





function Sub_P()
{
  // Close the current window
  window.close();

  // Redirect to "index.html"
  window.open('index.html');

}


 




