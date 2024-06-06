<?php
// userpage.php
session_start();

if (!isset($_SESSION['userid'])) {
    header('Location: index.php');
    exit();
}

// Database connection
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project-yoga";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Fetch user data based on user ID from session
$userID = $_SESSION['userid'];
$user = getUserFromDatabaseById($conn, $userID);

function getUserFromDatabaseById($conn, $userid) {
    $sql = "SELECT * FROM users WHERE id='$userid'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        return $result->fetch_assoc();
    } else {
        return null;
    }
}

$username = $user['username'];
$name = $user['name'];
$email = $user['email'];
$phone = $user['phone'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="shortcut icon" href="assets/icon-3.png" type="image/x-icon">

    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Work+Sans:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <title><?php echo $username?></title>
    <style>
        form {
    max-width: 600px;
    margin: 40px auto;
    padding: 20px;
    background-color: #fff;
    box-shadow: 0 0 10px rgba(0,0,0,0.1);
}

label {
    display: block;
    margin-top: 20px;
}

input[type="text"], input[type="email"], textarea {
    width: 100%;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 4px;
}

.rating {
            display: flex;
            justify-content: center;
            align-items: center;
            margin-bottom: 20px;
        }
        .rating input {
            display: none;
        }
        .rating label {
            font-size: 2rem;
            color: #ccc;
            cursor: pointer;
            margin-right: 10px;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
            transition: all 0.3s ease;
        }
        .rating label:hover,
        .rating label:hover ~ label {
            color: #FFD700;
            transform: scale(1.2);
        }
        .rating input:checked ~ label {
            color: #FFD700;
            transform: scale(1.2);
        }

button {
    background-color: #4CAF50;
    color: white;
    padding: 10px 20px;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    margin-top: 20px;
}

button:hover {
    background-color: #45a049;
}
    </style>
</head>


<body>
<nav class="navbar navbar-expand-lg navbar-light">
    <div class="container-fluid">
    <a class="navbar-brand" href="#home">
            <img src="assets/iconyoga.png" alt="Brand Image" style="height: 40px;">
            YOGA
        </a>        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ml-auto nav__links">
                <li class="nav-item link"><a class="nav-link" href="#home">Home</a></li>
                <li class="nav-item link"><a class="nav-link" href="#classes">Classes</a></li>
                <li class="nav-item link"><a class="nav-link" href="#membership">Membership</a></li>
                <li class="nav-item link"><a class="nav-link" href="#schedule">Schedule</a></li>
                <li class="nav-item link"><a class="nav-link" href="#posts">Gallery</a></li>
                <li class="nav-item link"><a class="nav-link" href="#feed">Feedback</a></li>
                <li class="nav-item link dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        <i class="fas fa-user"></i> <?php echo $username; ?>
                    </a>
                    <div class="dropdown-menu" aria-labelledby="userDropdown">
                        <a class="dropdown-item" href="#" id="showProfile">Profile</a>
                        <a class="dropdown-item" href="logout.php">Logout</a>
                    </div>
                </li>
            </ul>
        </div>
    </div>
</nav>


    <!-- Rest of your page content -->
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
                <a href="#membership" class="btn btn-primary">Join Us</a>
                
            </div>
        </section>
    </header>
    

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
        <button class="btn classes__btn" onclick="redirectTo('beginner')">View More</button>
      </div>
    </div>
    <div class="classes__image">
      <img src="assets/why.jpg" alt="Intermediate Yoga" />
      <div class="classes__content">
        <h3>Intermediate Yoga</h3>
        <p>Deepen your practice with more challenging poses and sequences.</p>
        <button class="btn classes__btn" onclick="redirectTo('intermediate')">View More</button>
      </div>
    </div>
    <div class="classes__image">
      <img src="assets/classes-2.jpg" alt="Advanced Yoga" />
      <div class="classes__content">
        <h3>Advanced Yoga</h3>
        <p>Master advanced poses and refine your practice to the next level.</p>
        <button class="btn classes__btn" onclick="redirectTo('advanced')">View More</button>
      </div>
    </div>
  </div>
</section>


      
    
    
    <!-- Your existing HTML code with the membership section -->
<section class="membership" id="membership">
    <div class="section__container membership__container">
        <p class="section__subheader">PRICING TABLE</p>
        <h2 class="section__header">Membership Cards</h2>
        <div class="membership__grid">
            <div class="membership__card">
                <h4>YEAR CARD</h4>
                <h2><sup>$</sup>499</h2>
                <h3>For 1 Year</h3>
                <h4>ENJOY ALL THE FEATURES</h4>
                <p>Onetime access to all club</p>
                <p>Group trainer</p>
                <p>Book a group class</p>
                <p>Fitness orientation</p>
                <button class="btn membership__btn" onclick="handlePayment(499)">GET STARTED</button>
            </div>
            <div class="membership__card">
                <h4>MONTHLY CARD</h4>
                <h2><sup>$</sup>200</h2>
                <h3>For 1 Month</h3>
                <h4>ENJOY ALL THE FEATURES</h4>
                <p>Group classes</p>
                <p>Discuss fitness goals</p>
                <p>Group trainer</p>
                <p>Fitness orientation</p>
                <button class="btn membership__btn" onclick="handlePayment(200)">GET STARTED</button>
            </div>
            <div class="membership__card">
                <h4>WEEKLY CARD</h4>
                <h2><sup>$</sup>85</h2>
                <h3>For 1 Week</h3>
                <h4>ENJOY ALL THE FEATURES</h4>
                <p>Access to yoga area</p>
                <p>Group trainer</p>
                <p>Group classes</p>
                <p>Fitness orientation</p>
                <button class="btn membership__btn" onclick="handlePayment(85)">GET STARTED</button>
            </div>
        </div>
    </div>
</section>

<section id="schedule">
    <p class="section__subheader">YOGA SCHEDULE</p>
        <h2 class="section__header">Weekly Yoga Class Schedule</h2>
      
<div class="timetable-container">  
    <h6><strong>Sunday:</strong> Holiday - No Yoga Classes</h6>
    <table>
        <thead>
            <tr>
                <th>Day</th>
                <th>Class Name</th>
                <th>Time</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Monday</td>
                <td>Beginner Yoga</td>
                <td>09:00 - 10:30</td>
            </tr>
            <tr>
                <td>Tuesday</td>
                <td>Intermediate Yoga</td>
                <td>10:30 - 12:00</td>
            </tr>
            <tr>
                <td>Wednesday</td>
                <td>Advanced Yoga</td>
                <td>12:00 - 13:30</td>
            </tr>
            <tr>
                <td>Thursday</td>
                <td>Beginner Yoga</td>
                <td>13:30 - 15:00</td>
            </tr>
            <tr>
                <td>Friday</td>
                <td>Intermediate Yoga</td>
                <td>15:00 - 16:30</td>
            </tr>
            <tr>
                <td>Saturday</td>
                <td>Advanced Yoga</td>
                <td>16:30 - 18:00</td>
            </tr>
        </tbody>
    </table>
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
    
      
    <section id="feed">
        <h2 class="section__header">Submit Your Feedback</h2>
    <div>
      <form action="submit_feedback.php" method="post">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required>
    
    
          <label for="rating">Rating:</label>
            <div class="rating">
                <input type="radio" id="star5" name="rating" value="5" /><label for="star5"><i class="fas fa-star"></i></label>
                <input type="radio" id="star4" name="rating" value="4" /><label for="star4"><i class="fas fa-star"></i></label>
                <input type="radio" id="star3" name="rating" value="3" /><label for="star3"><i class="fas fa-star"></i></label>
                <input type="radio" id="star2" name="rating" value="2" /><label for="star2"><i class="fas fa-star"></i></label>
                <input type="radio" id="star1" name="rating" value="1" /><label for="star1"><i class="fas fa-star"></i></label>
            </div>
    
    
    <label for="comments">Comments:</label>
    <textarea id="comments" name="comments"></textarea>
    
    <button type="submit">Submit Feedback</button>
</form>
</div>
</section>

<div id="profileModal" class="modal">
    <div class="modal-content">
        <span class="close">&times;</span>
        <div class="profile-container">
            <h2>Profile</h2>
            <div class="profile-details">
               <div class="form-group">
                    <label for="username" style="text-align: left;">User Name:</label>
                    <input type="text" id="username" value="<?php echo $username?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="profileName" style="text-align: left;">Name:</label>
                    <input type="text" id="profileName" value="<?php echo $name?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="profileEmail" style="text-align: left;">Email:</label>
                    <input type="email" id="profileEmail" value="<?php echo $email?>" class="form-control" readonly>
                </div>
                <div class="form-group">
                    <label for="profilePhone" style="text-align: left;">Phone:</label>
                    <input type="text" id="profilePhone" value="<?php echo $phone?>" class="form-control" readonly>
                </div>
                <!-- Add more user details here as needed -->
            </div>
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
    <li class="nav-item link "><a class="nav-link " href="#classes"><i class="fas fa-chalkboard"></i> Classes</a></li>
    <li class="nav-item link "><a class="nav-link " href="#membership"><i class="fas fa-user-plus"></i> Membership</a></li>
    <li class="nav-item link "><a class="nav-link " href="#schedule"><i class="fas fa-calendar-alt"></i> Schedule</a></li>
    <li class="nav-item link "><a class="nav-link " href="#posts"><i class="fas fa-images"></i> Gallery</a></li>
    <li class="nav-item link "><a class="nav-link " href="#feed"><i class="fas fa-comments"></i> Feedback</a></li>
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
  <script src="https://checkout.razorpay.com/v1/checkout.js"></script>

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
        // Profile Modal
        var profileModal = document.getElementById('profileModal');
        var showProfileLink = document.getElementById('showProfile');
        var closeProfileModal = document.getElementsByClassName('close')[0];

        showProfileLink.onclick = function() {
            profileModal.style.display = "block";
        }

        closeProfileModal.onclick = function() {
            profileModal.style.display = "none";
        }

        window.onclick = function(event) {
            if (event.target == profileModal) {
                profileModal.style.display = "none";
            }
        }
    </script>

    <script>
        document.getElementById('userCircle').addEventListener('click', function() {
            var userMenu = document.getElementById('userMenu');
            if (userMenu.style.display === 'none') {
                userMenu.style.display = 'block';
            } else {
                userMenu.style.display = 'none';
            }
        });

        // Close the dropdown menu if the user clicks outside of it
        window.onclick = function(event) {
            if (!event.target.matches('.user-circle')) {
                var dropdowns = document.getElementsByClassName("dropdown-menu");
                for (var i = 0; i < dropdowns.length; i++) {
                    var openDropdown = dropdowns[i];
                    if (openDropdown.style.display === 'block') {
                        openDropdown.style.display = 'none';
                    }
                }
            }
        }
    </script>
   <script>
    function handlePayment(amount) {
        var options = {
            "key": "rzp_test_dummy", // Dummy key for demonstration
            "amount": amount * 100, // amount in the smallest currency unit
            "currency": "USD",
            "name": "Your Gym Name",
            "description": "Membership Payment",
            "handler": function (response) {
                // Handle successful payment
                alert("Payment successful! Payment ID: " + response.razorpay_payment_id);
            },
            "prefill": {
                "name": "",
                "email": "",
                "contact": ""
            },
            "theme": {
                "color": "#F37254"
            }
        };
        var rzp = new Razorpay(options);
        rzp.open();

        rzp.on('payment.failed', function (response) {
            // Handle payment failure
            alert("Payment failed!");
            // Refresh the page
            location.reload();
        });
    }
</script>

<script>
  function redirectTo(level) {
    // Redirect to the corresponding page based on the level
    if (level === 'beginner') {
      window.location.href = 'beginner-yoga.html';
    } else if (level === 'intermediate') {
      window.location.href = 'intermediate-yoga.html';
    } else if (level === 'advanced') {
      window.location.href = 'advanced-yoga.html';
    }
  }
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
</body>
</html>