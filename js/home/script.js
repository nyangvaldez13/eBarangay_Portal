//Top-nav

// Get references to the links and sections
const homeLink = document.getElementById('home-link');
const eventsLink = document.getElementById('events-link');
const requestLink = document.getElementById('request-link');
const aboutLink = document.getElementById('about-link');
const contactLink = document.getElementById('contact-link');

const homeSection = document.getElementById('home');
const eventsSection = document.getElementById('events');
const requestSection = document.getElementById('request');
const aboutSection = document.getElementById('about');
const contactSection = document.getElementById('contact');

// Add a scroll event listener to the window
window.addEventListener('scroll', () => {
    // Get the current scroll position
    const scrollPosition = window.scrollY;

    // Determine which section is currently visible
    if (isElementInViewport(homeSection)) {
        setActiveLink(homeLink);
    } else if (isElementInViewport(eventsSection)) {
        setActiveLink(eventsLink);
    } else if (isElementInViewport(requestSection)) {
        setActiveLink(requestLink);
    } else if (isElementInViewport(aboutSection)) {
        setActiveLink(aboutLink);
    } else if (isElementInViewport(contactSection)) {
        setActiveLink(contactLink);
    }
});

// Function to add an "active" class to the active link
function setActiveLink(link) {
    // Remove "active" class from all links
    homeLink.classList.remove('active');
    eventsLink.classList.remove('active');
    requestLink.classList.remove('active');
    aboutLink.classList.remove('active');
    contactLink.classList.remove('active');

    // Add "active" class to the specified link
    link.classList.add('active');
}

// JavaScript to handle scroll event
window.addEventListener('scroll', function () {
    const navbar = document.getElementById('top-navbar');
    if (window.scrollY > 0) {
        navbar.classList.add('scrolled');
    } else {
        navbar.classList.remove('scrolled');
    }
});


// Function to check if an element is in the viewport
function isElementInViewport(element) {
    const rect = element.getBoundingClientRect();
    return (
        rect.top >= 0 &&
        rect.left >= 0 &&
        rect.bottom <= (window.innerHeight || document.documentElement.clientHeight) &&
        rect.right <= (window.innerWidth || document.documentElement.clientWidth)
    );
}

// Add a smooth scroll behavior to the links
document.querySelectorAll('.links ul li a').forEach(link => {
    link.addEventListener('click', function (e) {
        e.preventDefault();

        const targetId = this.getAttribute('href').substring(1);
        const targetElement = document.getElementById(targetId);

        if (targetElement) {
            // Calculate the scroll position
            const offsetTop = targetElement.offsetTop;
            const scrollOptions = {
                top: offsetTop,
                behavior: 'smooth', // Add smooth scrolling behavior
            };

            // Scroll to the target element
            window.scrollTo(scrollOptions);
        }
    });
});

//Events Section
// Get references to the button and dropdown content
const dropdownButton = document.getElementById('dropdown-btn');
const dropdownContent = document.getElementById('dropdown-content');
const dropdownOptions = document.querySelectorAll('.dropdown-option');

// Add a click event listener to toggle the dropdown content
dropdownButton.addEventListener('click', () => {
    dropdownContent.style.display = dropdownContent.style.display === 'block' ? 'none' : 'block';
});

// Close the dropdown if the user clicks outside of it
document.addEventListener('click', (event) => {
    if (!event.target.matches('.dropdown-button')) {
        dropdownContent.style.display = 'none';
    }
});

// Add click event listeners to the dropdown options
dropdownOptions.forEach((option) => {
    option.addEventListener('click', () => {
        // Remove 'selected' class from all options
        dropdownOptions.forEach((opt) => {
            opt.classList.remove('selected');
        });

        // Add 'selected' class to the clicked option
        option.classList.add('selected');

        // Close the dropdown
        dropdownContent.style.display = 'none';
    });
});

//Request Section
document.addEventListener("DOMContentLoaded", function() {
    const requestButton = document.querySelector(".request-button-button");
    const notifier = document.querySelector(".notifier");
    
    requestButton.addEventListener("click", function() {

        notifier.style.display = "block";

        notifier.style.top = "0";

        setTimeout(function() {
   
            notifier.style.top = "-50px";
        }, 3000); 
    });
});
/*
document.querySelector('.request-button-button').addEventListener('click', function() {
    // Send an AJAX request to your PHP script
    var xhr = new XMLHttpRequest();
    xhr.open('POST', 'check-signin.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onreadystatechange = function() {
        if (xhr.readyState === 4) {
            if (xhr.status === 200) {
                // PHP script has responded
                var response = xhr.responseText;
                if (response === 'signed_in') {
                    // User is signed in, navigate to the request form page
                    window.location.href = 'request-form.php';
                } else {
                    // User is not signed in, display an alert
                    alert('Please sign in first to access the request form.');
                }
            } else {
                // Handle AJAX errors
                console.error('AJAX request error: ' + xhr.status);
            }
        }
    };

    // Send the AJAX request
    xhr.send();
});*/



//Signup Section
/* // Get references to the links and the form
const logInLink = document.getElementById('logInLink');
const signUpLink = document.getElementById('signUpLink');
const form = document.querySelector('form');

// Add event listeners to the links
logInLink.addEventListener('click', () => {
    // Toggle the active class for styles
    activeLink.style.color = '#FFCC00';
    logInLink.classList.remove('active');
    signUpLink.classList.add('active');

    // Change the form contents
    form.innerHTML = `
    <form>
    <div class="form">
        <div class="form-group">
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">                
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <button type="submit">LOG IN</button>
        </div>
        </form>
    `;
});

signUpLink.addEventListener('click', () => {
    // Toggle the form contents
    form.innerHTML = `
    <div class="form">
        <div class="form-group">
            <input type="text" id="name" name="name" placeholder="Name" required>
        </div>
        <div class="form-group">            
            <input type="tel" id="phone" name="phone" placeholder="Phone" required>
        </div>
        <div class="form-group">                
            <input type="email" id="email" name="email" placeholder="Email" required>
        </div>
        <div class="form-group">                
            <input type="password" id="password" name="password" placeholder="Password" required>
        </div>
        <div class="form-group">                
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm Password" required>
        </div>
        <button type="submit">SIGN UP</button>
        </div>
    `;
    // Toggle the active class and link colors
    toggleLinks(signUpLink, logInLink);
});
*/

function validatePassword() {
    var password = document.getElementById("password").value;

    var hasNumber = /\d/.test(password);
    var hasSpecialChar = /[!@#$%^&*(),.?":{}|<>]/.test(password);
    var hasUppercase = /[A-Z]/.test(password);

    var isValid = hasNumber && hasSpecialChar && hasUppercase;

    var passwordMessage = document.getElementById("password-message");

    if (isValid) {
        passwordMessage.style.color = "green";
        passwordMessage.textContent = "Password is valid!";
    } else {
        passwordMessage.style.color = "red";
        passwordMessage.textContent = "Password must contain at least one number, special character, and uppercase letter.";
    }
}

// Trigger Function for redirecting to landing page

window.addEventListener('beforeunload', function (e) {
    // This event listener will trigger when you refresh or close the page
    // You can redirect to the homepage (index file) here
    window.location.href = 'index.html'; // Replace 'index.html' with your actual homepage URL
});

