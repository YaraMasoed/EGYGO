/*Alia- validation*/
function validateForm() {

  if (document.contactForm.name.value == "") {
    alert("Please Enter your name!!");
    document.contactForm.name.focus();
    return false;
  }

  if (document.contactForm.email.value == "") {
    alert("Please Enter your email!!");
    document.contactForm.email.focus();
    return false;
  }

  if (document.contactForm.phone.value == "") {
    alert("Please Enter your phone number!!");
    document.contactForm.phone.focus();
    return false;
  }

  if (document.contactForm.message.value == "") {
    alert("Please Enter a message!!");
    document.contactForm.message.focus();
    return false;
  }

  var userPhone = document.getElementById("phone").value;
  var phoneRegex = /^(01)(0|1|2|5)\d{8}$/;
  var userEmail = document.getElementById("email").value;
  var validRegex = /^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/;

  if (!phoneRegex.test(userPhone)) {
    alert("Please enter a valid Egyptian phone number.");
    return false;
  }

  if (!validRegex.test(userEmail)) {
    alert("Please enter a valid email address.");
    return false;
  }

  window.location.href = "home.html";

  alert("Message sent successfully, thank you for contacting EGYGO");


  return true;

}

function validateTextEntry(input) {
  var textRegex = /^[A-Za-z]+$/;
  return textRegex.test(input);
}








/*Yara- Stars*/
function starReview() {
  //all elements with the i tag in the class stars stored in a list called "stars"
  var stars = document.querySelectorAll(".stars i");
  var reviewParagraph = document.getElementById("review");

  // Loop through each star
  stars.forEach((star, i) => {
    star.addEventListener("click", () => {
      stars.forEach((star, j) => {
        if (i >= j) {
          star.classList.add("active");
        } else {
          star.classList.remove("active");
        }
      });

      switch (i) {
        case 0:
          reviewParagraph.textContent = "Terrible";
          break;
        case 1:
          reviewParagraph.textContent = "Not good";
          break;
        case 2:
          reviewParagraph.textContent = "Good";
          break;
        case 3:
          reviewParagraph.textContent = "Very Good";
          break;
        case 4:
          reviewParagraph.textContent = "Amazing";
          break;
        default:
          reviewParagraph.textContent = "Rating";
          break;
      }
    });
  });
}
starReview();

/*Yara- Feedback form validation*/
function validateFormFeedback() {
  var name = document.forms["feedBack"]["name"].value;
  var email = document.forms["feedBack"]["email"].value;
  var tripDetails = document.forms["feedBack"]["tripDetails"].value;
  var joinAgain = document.querySelector('input[name="joinAgain"]:checked');
  var message = document.forms["feedBack"]["message"].value;

  if (name == "") {
    alert("Please enter your name.");
    return false;
  }

  if (email == "") {
    alert("Please enter your email address.");
    return false;
  }

  var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!emailRegex.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }

  if (tripDetails == "") {
    alert("Please select your trip details.");
    return false;
  }

  if (!document.querySelector('.stars i.active')) {
    alert("Please provide a rating.");
    return false;
  }

  if (!joinAgain) {
    alert("Please select if you would join us again.");
    return false;
  }

  if (message == "") {
    alert("Please provide your feedback.");
    return false;
  }


  alert("Thank you for your feedback! Form submitted successfully.");
  window.location.href = "home.html";
  return true;
}

