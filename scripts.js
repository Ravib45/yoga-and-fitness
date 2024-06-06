document.addEventListener('DOMContentLoaded', function () {
  var modal = document.getElementById('authModal');
  var loginLink = document.getElementById('loginLink');
  var span = document.getElementsByClassName('close')[0];
  var loginFormContainer = document.getElementById('loginFormContainer');
  var registerFormContainer = document.getElementById('registerFormContainer');
  var forgotPasswordFormContainer = document.getElementById('forgotPasswordFormContainer');
  var showRegisterLink = document.getElementById('showRegister');
  var showLoginLink = document.getElementById('showLogin');
  var forgotPasswordLink = document.getElementById('forgotPassword');
  var backToLoginLink = document.getElementById('backToLogin');

  // When the user clicks on the button, open the modal
  loginLink.onclick = function (event) {
      event.preventDefault();
      modal.style.display = 'block';
  };

  // When the user clicks on <span> (x), close the modal
  span.onclick = function () {
      modal.style.display = 'none';
  };

  // When the user clicks anywhere outside of the modal, close it
  window.onclick = function (event) {
      if (event.target == modal) {
          modal.style.display = 'none';
      }
  };

  // Switch to registration form
  showRegisterLink.onclick = function (event) {
      event.preventDefault();
      loginFormContainer.style.display = 'none';
      forgotPasswordFormContainer.style.display = 'none';
      registerFormContainer.style.display = 'block';
  };

  // Switch to login form
  showLoginLink.onclick = function (event) {
      event.preventDefault();
      registerFormContainer.style.display = 'none';
      forgotPasswordFormContainer.style.display = 'none';
      loginFormContainer.style.display = 'block';
  };

  // Switch to forgot password form
  forgotPasswordLink.onclick = function (event) {
      event.preventDefault();
      loginFormContainer.style.display = 'none';
      registerFormContainer.style.display = 'none';
      forgotPasswordFormContainer.style.display = 'block';
  };

  // Switch back to login form from forgot password form
  backToLoginLink.onclick = function (event) {
      event.preventDefault();
      forgotPasswordFormContainer.style.display = 'none';
      registerFormContainer.style.display = 'none';
      loginFormContainer.style.display = 'block';
  };

  // Handle login form submission
  document.getElementById('loginForm').addEventListener('submit', async function (e) {
      e.preventDefault();
      
      const email = document.getElementById('loginEmail').value;
      const password = document.getElementById('loginPassword').value;

      const response = await fetch('login.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: new URLSearchParams({
              action: 'login',
              email: email,
              password: password
          })
      });

      const result = await response.json();
      
      if (result.success) {
       
          window.location.href = `userpage.php?userid=${result.userid}`;
      } else {
          alert('Incorrect email or password.');
      }
  });

  // Handle registration form submission
  document.getElementById('registerForm').addEventListener('submit', async function (e) {
      e.preventDefault();
      
      const username = document.getElementById('registerUsername').value;
      const email = document.getElementById('registerEmail').value;
      const password = document.getElementById('registerPassword').value;
      const name = document.getElementById('registerName').value;
      const phone = document.getElementById('registerPhone').value;

      const response = await fetch('register_user.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: new URLSearchParams({
              username: username,
              email: email,
              password: password,
              name: name,
              phone: phone
          })
      });

      const result = await response.text();
      if (result === 'success') {
          alert('Registration successful!');
          document.getElementById('registerForm').reset();
          registerFormContainer.style.display = 'none';
          loginFormContainer.style.display = 'block';
      } else {
          alert('Error registering. Please try again.');
      }
  });

  // Handle forgot password form submission
  document.getElementById('forgotPasswordForm').addEventListener('submit', async function (e) {
      e.preventDefault();
      
      const email = document.getElementById('forgotEmail').value;

      const response = await fetch('login.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: new URLSearchParams({
              action: 'forgot_password',
              email: email
          })
      });

      const result = await response.text();
      document.getElementById('forgotPasswordMessage').innerText = result;
  });
});
