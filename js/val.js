var users = [
    { username: "Tohru", password: "123", role: "admin" },
    { username: "Jos", password: "123", role: "user" }, 
];

document.getElementById("btnLogin").addEventListener("click", function () {
    var userr = document.getElementById("user").value.trim();
    var password = document.getElementById("pass").value.trim();

    
    var loggedInUser = users.find(
        (user) => user.username === userr && user.password === password
    );

    if (loggedInUser) {
        if (loggedInUser.role === "admin") {
            window.location.href = "./dashboard.html";
        } else if (loggedInUser.role === "user") {
            window.location.href = "./index.html";
        }
    } else {
        Swal.fire({
            title: "<strong>HTML <u>example</u></strong>",
            icon: "info",
            html: `
              You can use <b>bold text</b>,
              <a href="#" autofocus>links</a>,
              and other HTML tags
            `,
            showCloseButton: true,
            showCancelButton: true,
            focusConfirm: false,
            confirmButtonText: `
              <i class="fa fa-thumbs-up"></i> Great!
            `,
            confirmButtonAriaLabel: "Thumbs up, great!",
            cancelButtonText: `
              <i class="fa fa-thumbs-down"></i>
            `,
            cancelButtonAriaLabel: "Thumbs down"
          });
    }
});