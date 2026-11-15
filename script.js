function toggleTheme() {
  var btn = document.getElementById("themeBtn");
  if (btn.innerText == "Dark Mode") {
    document.body.style.backgroundColor = "#222";
    document.body.style.color = "#fff";
    btn.innerText = "Light Mode";
  } else {
    document.body.style.backgroundColor = "#f4f4f4";
    document.body.style.color = "#333";
    btn.innerText = "Dark Mode";
  }
}

function validateForm() {
  const name = document.getElementById('name').value;
  const email = document.getElementById('email').value;
  const message = document.getElementById('message').value;
  const emailPattern = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
  if (!name || !email || !message) {
    alert("All fields are required!");
    return false;
  }
  if (!emailPattern.test(email)) {
    alert("Please enter a valid email address.");
    return false;
  }
  return true;
}
