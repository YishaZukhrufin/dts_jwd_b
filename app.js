document.getElementById("loginForm").addEventListener("submit", function(event) {
    event.preventDefault(); // prevent form submission

    // Get input values
    var username = document.getElementById("username").value;
    var password = document.getElementById("password").value;

    // Perform validation
    if (username === "admin" && password === "password") {
        alert("Anda berhasil Login!");
        // Perform any further actions, such as redirecting to a different page
    } else {
        alert("Username atau password anda salah");
    }
});
