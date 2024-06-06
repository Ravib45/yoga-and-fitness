<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="assets/icon-3.png" type="image/x-icon">

    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <!-- Font Awesome CSS -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/2.5.0/remixicon.min.css" rel="stylesheet">

    
    <title>yoga and fitness</title>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#home">
            <img src="assets/iconyoga.png" alt="Brand Image" style="height: 40px;">
            YOGA
        </a>         <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto nav__links">
                <li class="nav-item link"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item link"><a class="nav-link" href="#classes">Classes</a></li>
                <li class="nav-item link"><a class="nav-link" href="#membership">Membership</a></li>
                <li class="nav-item link"><a class="nav-link" href="#stories">Coach details</a></li>
                <li class="nav-item link"><a class="nav-link" href="#posts">Gallery</a></li>
                <li class="nav-item link"><a class="nav-link" href="#contacts">Contact</a></li>
                <li class="nav-item link"><a href="#" class="nav-link btn btn-login" id="loginLink">Login</a></li> <!-- New login button -->
            </ul>
        </div>
    </div>
</nav>

    
    <header>
        <section id="home" class="home-section">
            <div class="overlay"></div>
            <div class="video-background">
                <video autoplay loop muted>
                    <source src="assets/medi.mp4" type="video/mp4">
                    Your browser does not support the video tag.
                </video>
            </div>
            <div class="container text-left">
                <h1>YOGA & FITNESS</h1>
                <p>Discover the art of yoga with us. Join our community <br/>and embark on a journey of wellness and tranquility.</p>
                <a href="#" class="btn btn-primary" onclick="joinus()">Join Us</a>
                
            </div>
        </section>
    </header>



    <section class="section__container why__container">
      <div class="why__image">
        <img src="assets/p1.jpg" alt="why yoga" />
      </div>
      <div class="why__content">
        <h2 class="section__header">Why You Should Go To Yoga</h2>
        <p>
          Engaging in yoga offers a holistic approach to wellness, encompassing
          both physical and mental benefits. Through a series of poses,
          stretches, and muscle strength. Its meditative aspects encourage
          mindfulness, reducing stress and anxiety while promoting a sense of
          inner peace.
        </p>
        <ul>
  <li>
    <span ><i class="ri-checkbox-circle-fill"></i></span>
    Yoga boosts brain power
  </li>
  <li>
    <span ><i class="ri-checkbox-circle-fill"></i></span>
    Yoga helps you to breathe better
  </li>
  <li>
    <span ><i class="ri-checkbox-circle-fill"></i></span>
    Yoga improves your strength
  </li>
  <li>
    <span ><i class="ri-checkbox-circle-fill"></i></span>
    Yoga helps you to focus
  </li>
  <li>
    <span ><i class="ri-checkbox-circle-fill"></i></span>
    Yoga helps give meaning to your day
  </li>
</ul>

      </div>
    </section>


    <section class="hero" id="hero">
      <div class="section__container hero__container">
        <div class="hero__card">
          <span><img src="assets/icon-1.png" alt="hero" /></span>
          <h4>Healthy Lifestyle</h4>
          <p>
            Embrace a healthy lifestyle through the transformative power of yoga
            and cultivate physical vitality and inner peace.
          </p>
        </div>
        <div class="hero__card">
          <span><img src="assets/icon-2.png" alt="hero" /></span>
          <h4>Body & Mind Balance</h4>
          <p>
            Through purposeful poses and mindful breathing, yoga cultivates a
            strong, flexible body while nurturing inner calm.
          </p>
        </div>
        <div class="hero__card">
          <span><img src="assets/icon-3.png" alt="hero" /></span>
          <h4>Meditation Practice</h4>
          <p>
            Discover inner serenity and mindfulness as you cultivate a profound
            connection with the present moment.
          </p>
        </div>
        <div class="hero__card">
          <span><img src="assets/icon-4.png" alt="hero" /></span>
          <h4>Self-Care</h4>
          <p>
            Discover the transformative power of self-care through yoga and
            embrace moments of tranquility and mindfulness.
          </p>
        </div>
      </div>
    </section>

    

    <section class="section__container classes__container" id="classes">
  <p class="section__subheader">YOGA CLASSES</p>
  <h2 class="section__header">Choose Your Level</h2>
  <div class="classes__grid">
    <div class="classes__image">
      <img src="assets/classes-1.jpg" alt="Beginner Yoga" />
      <div class="classes__content">
        <h3>Beginner Yoga</h3>
        <p>Start your journey with foundational poses and gentle practices.</p>
        <button class="btn classes__btn" onclick="showLogin('beginner')">View More</button>
      </div>
    </div>
    <div class="classes__image">
      <img src="assets/why.jpg" alt="Intermediate Yoga" />
      <div class="classes__content">
        <h3>Intermediate Yoga</h3>
        <p>Deepen your practice with more challenging poses and sequences.</p>
        <button class="btn classes__btn" onclick="showLogin('intermediate')">View More</button>
      </div>
    </div>
    <div class="classes__image">
      <img src="assets/classes-2.jpg" alt="Advanced Yoga" />
      <div class="classes__content">
        <h3>Advanced Yoga</h3>
        <p>Master advanced poses and refine your practice to the next level.</p>
        <button class="btn classes__btn" onclick="showLogin('advanced')">View More</button>
      </div>
    </div>
  </div>
</section>

      
    
    
    <section class="membership" id="membership">
        <div class="section__container membership__container">
          <p class="section__subheader">PRICING TABLE</p>
          <h2 class="section__header">Membership Cards</h2>
          <div class="membership__grid">
            <div class="membership__card">
              <h4>YEAR CARD</h4>
              <h2><sup>₹</sup>9999</h2>
              <h3>For 1 Year</h3>
              <h4>ENJOY ALL THE FEATURES</h4>
              <p>Onetime access to all club</p>
              <p>advance yoga</p>
              <p>ashtanga&power yoga</p>
              <p>Fitness orientation</p>
              <button class="btn membership__btn" onclick="showLoginModal()">GET STARTED</button>
            </div>
            <div class="membership__card">
              <h4>MONTHLY CARD</h4>
              <h2><sup>₹</sup>1999</h2>
              <h3>For 1 Month</h3>
              <h4>ENJOY ALL THE FEATURES</h4>
              <p>yoga for intermediate</p>
              <p>Discuss fitness goals</p>
              <p>power yoga</p>
              <p>Fitness orientation</p>
              <button class="btn membership__btn" onclick="showLoginModal()">GET STARTED</button>
            </div>
            <div class="membership__card">
              <h4>WEEKLY CARD</h4>
              <h2><sup>₹</sup>799</h2>
              <h3>For 1 Week</h3>
              <h4>ENJOY ALL THE FEATURES</h4>
              <p>yoga for beginner</p>
              <p>meditation</p>
              <p>ashtanga yoga</p>
              <p>Fitness orientation</p>
              <button class="btn membership__btn" onclick="showLoginModal()">GET STARTED</button>
            </div>
          </div>
        </div>
      </section>


      <section id="stories">
        <p class="section__subheader">COACH DETAILS</p>
        <div class="card" data-state="#CO">
          <div class="card-header">
            <div class="card-cover"></div>
            <img class="card-avatar" src="assets/p2.jpg" alt="avatar" />
            
          </div>
          <div class="card-main">
            <div class="card-section is-active" id="about">
              <div class="card-content">
                <div class="card-subtitle">PAVAN I N</div>
                <p class="card-desc" style="color: black;">I am a certified yoga instructor (YIC) with 11 years of yoga practice and 3 years of teaching experience. I specialize in various yoga styles and emphasize proper alignment and breath control for safety and effectiveness. I work with diverse groups, including beginners and those with specific health conditions, offering personalized sessions. Committed to continuous learning, I stay updated with the latest in yoga and wellness to provide high-quality instruction and support.
                </p>
              </div>
              <div class="card-social">
                <a href="https://www.facebook.com/"><svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
                  <path d="M15.997 3.985h2.191V.169C17.81.117 16.51 0 14.996 0c-3.159 0-5.323 1.987-5.323 5.639V9H6.187v4.266h3.486V24h4.274V13.267h3.345l.531-4.266h-3.877V6.062c.001-1.233.333-2.077 2.051-2.077z" />
                  </svg></a>
                <a href="#"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                    <path d="M512 97.248c-19.04 8.352-39.328 13.888-60.48 16.576 21.76-12.992 38.368-33.408 46.176-58.016-20.288 12.096-42.688 20.64-66.56 25.408C411.872 60.704 384.416 48 354.464 48c-58.112 0-104.896 47.168-104.896 104.992 0 8.32.704 16.32 2.432 23.936-87.264-4.256-164.48-46.08-216.352-109.792-9.056 15.712-14.368 33.696-14.368 53.056 0 36.352 18.72 68.576 46.624 87.232-16.864-.32-33.408-5.216-47.424-12.928v1.152c0 51.008 36.384 93.376 84.096 103.136-8.544 2.336-17.856 3.456-27.52 3.456-6.72 0-13.504-.384-19.872-1.792 13.6 41.568 52.192 72.128 98.08 73.12-35.712 27.936-81.056 44.768-130.144 44.768-8.608 0-16.864-.384-25.12-1.44C46.496 446.88 101.6 464 161.024 464c193.152 0 298.752-160 298.752-298.688 0-4.64-.16-9.12-.384-13.568 20.832-14.784 38.336-33.248 52.608-54.496z" />
                  </svg></a>
                <a href="https://www.instagram.com/yoga_pavan?igsh=MTIwZ3N3ZXZsdGVjcg=="><svg viewBox="0 0 512 512" xmlns="http://www.w3.org/2000/svg">
                    <path d="M301 256c0 24.852-20.148 45-45 45s-45-20.148-45-45 20.148-45 45-45 45 20.148 45 45zm0 0" />
                    <path d="M332 120H180c-33.086 0-60 26.914-60 60v152c0 33.086 26.914 60 60 60h152c33.086 0 60-26.914 60-60V180c0-33.086-26.914-60-60-60zm-76 211c-41.355 0-75-33.645-75-75s33.645-75 75-75 75 33.645 75 75-33.645 75-75 75zm86-146c-8.285 0-15-6.715-15-15s6.715-15 15-15 15 6.715 15 15-6.715 15-15 15zm0 0" />
                    <path d="M377 0H135C60.562 0 0 60.563 0 135v242c0 74.438 60.563 135 135 135h242c74.438 0 135-60.563 135-135V135C512 60.562 451.437 0 377 0zm45 332c0 49.625-40.375 90-90 90H180c-49.625 0-90-40.375-90-90V180c0-49.625 40.375-90 90-90h152c49.625 0 90 40.375 90 90zm0 0" />
                  </svg></a>
                
              </div>
            </div>
          <div class="card-buttons">
            <button data-section="#about" class="is-active"></button>
          </div>
        </div>
        </div>
        </section>
  
     

        <section class="section__container photos__container" id="posts">
  <p class="section__subheader">GALLERY</p>
  <h2 class="section__header">See The Latest Online Classes</h2>
  <div class="photos__grid">
    <div class="photos__card">
      <img src="assets/on1.jpg" alt="photo" />
    </div>
    <div class="photos__card">
      <img src="assets/on2.jpg" alt="photo" />
    </div>
    <div class="photos__card">
      <img src="assets/on3.jpg" alt="photo" />
    </div>
    <div class="photos__card">
      <img src="assets/on4.jpg" alt="photo" />
    </div>
  </div>
</section>

    
      
        
    
      <section id="contacts" class="contact-section">
        <div class="container">
          <h2 class="section__header">Contact Us</h2>
          <p class="section__subheader"></p>We would love to hear from you. Feel free to reach out with any questions or to schedule a visit to our studio.</p>
            <form id="contactForm" action="submit_contact_form.php" method="post">
                <div class="input-group">
                    <label for="name">Name:</label>
                    <input type="text" id="name" name="name" required>
                </div>
                <div class="input-group">
                    <label for="email">Email:</label>
                    <input type="email" id="email" name="email" required>
                </div>
                <div class="input-group">
                    <label for="message">Message:</label>
                    <textarea id="message" name="message" required></textarea>
                </div>
                <button type="submit" class="btn">Send Message</button>
            </form>
            <div id="contactMessage"></div>
        </div>
    </section>
    
    
    


 <!-- Login and Registration Modal -->
<!-- Login and Registration Modal -->
<div id="authModal" class="modal">
  <div class="modal-content">
      <span class="close">&times;</span>
      
      <!-- Login Form -->
      <div id="loginFormContainer">
        <h2>Login</h2>
        <form id="loginForm">
            <div class="input-group">
                <label for="loginEmail">Email:</label>
                <input type="email" id="loginEmail" name="email" required>
            </div>
            <div class="input-group">
                <label for="loginPassword">Password:</label>
                <input type="password" id="loginPassword" name="password" required>
            </div>
            
            <button type="submit" class="btn">Login</button>
        </form>
        <div id="loginMessage"></div>
        <p><a href="#" id="forgotPassword">Forgot your password?</a></p>
        <p>Don't have an account? <a href="#" id="showRegister">Register here</a></p>
    </div>
      
      <!-- Registration Form -->
      <div id="registerFormContainer" style="display: none;">
          <h2>Register</h2>
          <form id="registerForm">
              <div class="input-group">
                  <label for="registerUsername">Username:</label>
                  <input type="text" id="registerUsername" name="username" required>
              </div>
              <div class="input-group">
                  <label for="registerEmail">Email:</label>
                  <input type="email" id="registerEmail" name="email" required>
              </div>
              <div class="input-group">
                  <label for="registerPassword">Password:</label>
                  <input type="password" id="registerPassword" name="password" required>
              </div>
              <div class="input-group">
                  <label for="registerName">Name:</label>
                  <input type="text" id="registerName" name="name" required>
              </div>
              <div class="input-group">
                  <label for="registerPhone">Phone Number:</label>
                  <input type="text" id="registerPhone" name="phone" required>
              </div>
              <button type="submit" class="btn">Register</button>
          </form>
          <div id="registerMessage"></div>
          <p>Already have an account? <a href="#" id="showLogin">Login here</a></p>
      </div>
      
      <!-- Forgot Password Form -->
      <div id="forgotPasswordFormContainer" style="display: none;">
          <h2>Forgot Password</h2>
          <form id="forgotPasswordForm">
              <div class="input-group">
                  <label for="forgotEmail">Email:</label>
                  <input type="email" id="forgotEmail" name="email" required>
              </div>
              
              <button type="submit" class="btn">Submit</button>
          </form>
          <div id="forgotPasswordMessage"></div>
          <p><a href="#" id="backToLogin">Back to login</a></p>
      </div>
  </div>
</div>

<!-- Footer -->
<footer class="footer" id="contact">
  <div class="container">
    <div class="row">
      <!-- Stay Connected Section -->
      <div class="col-md-4">
    <h3>Stay Connected:</h3>
    <ul class="social-media">
        <li><a href="#" aria-label="Facebook"><i class="fab fa-facebook-f"></i> Facebook</a></li>
        <li><a href="#" aria-label="Instagram"><i class="fab fa-instagram"></i> Instagram</a></li>
        <li><a href="#" aria-label="Twitter"><i class="fab fa-twitter"></i> Twitter</a></li>
    </ul>
</div>

      <!-- Explore More Section -->
      <div class="col-md-4 quick-links">
        <h3>Quick Links:</h3>
        <ul class="quick-links-list">
          <li class="nav-item link"><a class="nav-link" href="#home"><i class="fas fa-home"></i> Home</a></li>
          <li class="nav-item link"><a class="nav-link" href="#classes"><i class="fas fa-chalkboard"></i> Classes</a></li>
          <li class="nav-item link"><a class="nav-link" href="#membership"><i class="fas fa-user-plus"></i> Membership</a></li>
          <li class="nav-item link"><a class="nav-link" href="#stories"><i class="fas fa-user"></i> Coach details</a></li>
          <li class="nav-item link"><a class="nav-link" href="#posts"><i class="fas fa-images"></i> Gallery</a></li>
          <li class="nav-item link"><a class="nav-link" href="#contacts"><i class="fas fa-envelope"></i> Contact</a></li>
        </ul>
      </div>
      
      <!-- Contact Us Section -->
      <div class="col-md-4 contact-info">
        <h3>Contact Us:</h3>
        <p><i class="fas fa-envelope"></i> Email: <a href="mailto:info@namoyoga.com">info@namoyoga.com</a></p>
        <p><i class="fas fa-phone" ></i> Phone: <a href="tel:+918147871160">+91 8147871160</a></p>
        <p><i class="fas fa-map-marker-alt" ></i> Address: <a href="https://goo.gl/maps/15.43461017236215,75.01756191588647" target="_blank">Yoga&fitness Studio, India, Karnataka, Banaglore</a></p>
        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d61526.32158201618!2d74.95646584899545!3d15.463165819812867!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3bb8cd62d889aba7%3A0x5a4f2144717bcf70!2sDharwad%2C%20Karnataka!5e0!3m2!1sen!2sin!4v1714290842168!5m2!1sen!2sin" width="100%" height="200" style="border:0;" allowfullscreen="" loading="lazy"></iframe>
      </div>
    </div>
    <div class="terms">
      <p>Terms and Conditions | © 2024 yoga&fitness. All rights reserved.</p>
    </div>
  </div>
</footer>

<div class="social-media-box">
  <a href="https://wa.me/81478711" target="_blank">
    <img src="assets/w1.png" alt="WhatsApp">
  </a>
  
  <a href="https://www.instagram.com/yoga_pavan?igsh" target="_blank">
    <img src="assets/insta.png" alt="Instagram">
  </a>
  <!--
  <a href="https://www.youtube.com/" target="_blank">
    <img src="assets/youtube-logo.png" alt="Instagram">
  </a>-->
  <!-- Add more social media icons as needed -->
</div>
<!-- Customer care icon -->
<img class="chat-icon" src="assets/robot.png" alt="Chat Icon" onclick="toggleChatBox()">

<!-- Chat box -->
<div class="chat-container" id="chat-container">
    <div class="hint">Hint: You can ask about us, contact, or any other questions you have.</div>
    <div class="message bot-message">Hello! How can I help you?</div>
    <!-- Chat input -->
    <div class="chat-input-container">
        <input type="text" class="chat-input" id="user-input" placeholder="Type your message...">
        <button class="send-button" onclick="sendMessage()">Send</button>
    </div>
</div>

  <!-- Bootstrap JS and dependencies -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

  <script>
    window.addEventListener('scroll', function() {
      const navbar = document.querySelector('.navbar');
      if (window.scrollY > 50) {
        navbar.classList.add('scrolled');
      } else {
        navbar.classList.remove('scrolled');
      }
    });
  </script>

<script>
  document.getElementById('contactForm').addEventListener('submit', async function (e) {
      e.preventDefault();
  
      const name = document.getElementById('name').value;
      const email = document.getElementById('email').value;
      const message = document.getElementById('message').value;
  
      const response = await fetch('submit_contact_form.php', {
          method: 'POST',
          headers: {
              'Content-Type': 'application/x-www-form-urlencoded'
          },
          body: new URLSearchParams({
              name: name,
              email: email,
              message: message
          })
      });
  
      const result = await response.text();
      document.getElementById('contactMessage').innerText = result;
  
      if (response.ok) {
          alert('Message sent successfully!');
          document.getElementById('contactForm').reset();
      } else {
          alert('There was a problem sending your message.');
      }
  });
  </script>
  <script>
    // Function to toggle the visibility of the chat box
    function toggleChatBox() {
        var chatBox = document.getElementById('chat-container');
        chatBox.style.display = chatBox.style.display === 'block' ? 'none' : 'block';
    }

    // Function to send a message
    function sendMessage() {
        const userInput = document.getElementById('user-input').value;
        if (userInput.trim() === '') return;

        const chatContainer = document.getElementById('chat-container');
        const userMessageDiv = document.createElement('div');
        userMessageDiv.classList.add('message');
        userMessageDiv.classList.add('user-message');
        userMessageDiv.textContent = userInput;
        chatContainer.insertBefore(userMessageDiv, chatContainer.lastElementChild);

        const botResponse = getBotResponse(userInput);
        const botMessageDiv = document.createElement('div');
        botMessageDiv.classList.add('message');
        botMessageDiv.classList.add('bot-message');
        botMessageDiv.textContent = botResponse;
        chatContainer.insertBefore(botMessageDiv, chatContainer.lastElementChild);

        // Scroll to bottom
        chatContainer.scrollTop = chatContainer.scrollHeight;

        // Clear input
        document.getElementById('user-input').value = '';
    }

   // Function to get bot response
function getBotResponse(userInput) {
    // Here, you can define different responses based on user input
    switch (userInput.toLowerCase()) {
        case 'hi':
            return 'Welcome to our website.';
        case 'about us':
            return 'We are a company dedicated to providing quality services.';
        case 'contact':
            return 'You can contact us at yogapavan@gmail.com';
        case 'yoga classes':
            return 'We offer a variety of yoga classes including Hatha, Vinyasa, and Ashtanga. Would you like more information about our classes?';
        case 'class schedule':
            return 'Our class schedule varies, but we offer classes throughout the week at different times to accommodate our students. Would you like to know our current schedule?';
        case 'price':
            return 'Our pricing for yoga classes depends on the type of class and package you choose. Please contact us for more details.';
        case 'yoga benefits':
            return 'Yoga offers numerous benefits including improved flexibility, strength, and mental clarity. It also helps reduce stress and promote overall well-being.';
        case 'yoga for beginners':
            return 'We have specialized classes tailored for beginners to help them learn the fundamentals of yoga in a supportive environment. Would you like to know more about our beginner classes?';
        case 'online classes':
            return 'Yes, we offer online yoga classes for those who prefer to practice from the comfort of their home. Our online classes are led by experienced instructors and cater to all levels.';
        default:
            return 'I did not understand. Can you please repeat or ask something else?';
    }
}

</script>
<script>
  function showLogin(level) {
    // Replace this with your own code to show login or perform other actions based on the level parameter
    alert("Login for " + level + " yoga class");
  }
</script>

<script>
  function showLoginModal() {
    // Replace this with your own code to show the login modal or perform other actions
    alert("Login for membership!");
  }
</script>

<script>
  function joinus() {
    // Replace this with your own code to show the login modal or perform other actions
    alert("Login for more details!");
  }
</script>
  <script src="scripts.js"></script>
    </body>
</html>
