document.getElementById("registrationForm").addEventListener("submit", function(event) {
    const fullName = document.getElementById("fullName").value;
    const email = document.getElementById("email").value;
    const password = document.getElementById("password").value;
    const gender = document.querySelector('input[name="gender"]:checked');
    const hobbies = document.querySelectorAll('input[name="hobbies"]:checked');
  
    if (!fullName || !email || !password || !gender) {
      alert("Please fill in all required fields.");
      event.preventDefault(); 
      return;
    }
  
    if (hobbies.length === 0) {
      alert("Please select at least one hobby.");
      event.preventDefault();
      return;
    }

    const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    if (!emailPattern.test(email)) {
      alert("Please enter a valid email address.");
      event.preventDefault();
      return;
    }

    alert("Form submitted successfully!");
  });
  
