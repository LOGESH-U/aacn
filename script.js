function nextPage() {
  // location.href = "logout_index.html";
  window.location.href = "upload/admin_upload.php";
  document.querySelector("#adminLogin_js").style.display = "none";
  document.querySelector("#adminLOGOUT_js").style.display = "block";
}

// function validateForm() {
//   var login = document.getElementById("login").value;
//   var password = document.getElementById("password").value;
//   if (login === "" && password === "") {
//     alert("please enter username and password to login");
//   } else if (login !== "admin" || password !== "Admin") {
//     alert("entered username or password is wrong");
//   } else if (login === "admin" && password === "Admin") {
//     nextPage();
//   }
// }

function nameOfFile() {
  switch (document.getElementById("path").value) {
    case "1":
      document.querySelector(".rename").innerHTML =
        "( Professional_Registration.pdf )";
      console.log(1);
      break;
    case "2":
      document.querySelector(".rename").innerHTML =
        "( Establishment_Registration.pdf )";
      console.log(2);
      break;
    case "3":
      document.querySelector(".rename").innerHTML = "( Form.pdf )";
      console.log(3);
      break;
    case "4":
      document.querySelector(".rename").innerHTML = "( Rules.pdf )";
      console.log(4);
      break;
  }
}
function Password() {
  var x = document.getElementById("password");
  if (x.type == "password") {
    x.type = "text";
  } else {
    x.type = "password";
  }
}
function showContactUs() {
  document.querySelector(".showContactUs").style.display = "block";
  document.querySelector(".uploadNews").style.display = "none";
  document.querySelector(".regiView").style.display = "none";
  document.querySelector(".down").style.display = "none";
  document.querySelector(".up").style.display = "none";
}
function upload() {
  document.querySelector(".down").style.display = "none";
  document.querySelector(".up").style.display = "block";
  document.querySelector(".uploadNews").style.display = "none";
  document.querySelector(".regiView").style.display = "none";
  document.querySelector(".showContactUs").style.display = "none";
}
function download() {
  document.querySelector(".down").style.display = "block";
  document.querySelector(".up").style.display = "none";
  document.querySelector(".regiView").style.display = "none";
  document.querySelector(".uploadNews").style.display = "none";
  document.querySelector(".showContactUs").style.display = "none";
}
function registrationView() {
  document.querySelector(".regiView").style.display = "block";
  document.querySelector(".down").style.display = "none";
  document.querySelector(".up").style.display = "none";
  document.querySelector(".uploadNews").style.display = "none";
  document.querySelector(".showContactUs").style.display = "none";
}
function newsUpload() {
  document.querySelector(".uploadNews").style.display = "block";
  document.querySelector(".regiView").style.display = "none";
  document.querySelector(".down").style.display = "none";
  document.querySelector(".up").style.display = "none";
  document.querySelector(".showContactUs").style.display = "none";
}

function uploadPDF() {
  document.querySelector(".pdfUpload").style.display = "block";
  document.querySelector(".imageUpload").style.display = "none";
  document.querySelector(".show-contactUs-list").style.display = "none";

  document.querySelector(".uploadPdf").style.backgroundColor = "var(--main)";
  document.querySelector(".uploadImages").style.backgroundColor = "#FFF";
  document.querySelector(".uploadPdf").style.color = "#FFF";
  document.querySelector(".uploadImages").style.color = "#000";
  document.querySelector(".registrationView").style.display = "none";
  document.querySelector(".newsAndUpdate").style.display = "none";
}
function uploadImage() {
  document.querySelector(".imageUpload").style.display = "block";
  document.querySelector(".pdfUpload").style.display = "none";
  document.querySelector(".show-contactUs-list").style.display = "none";

  document.querySelector(".uploadImages").style.backgroundColor = "var(--main)";
  document.querySelector(".uploadPdf").style.backgroundColor = "#FFF";
  document.querySelector(".uploadImages").style.color = "#FFF";
  document.querySelector(".uploadPdf").style.color = "#000";
  document.querySelector(".registrationView").style.display = "none";
  document.querySelector(".newsAndUpdate").style.display = "none";
}
function viewRegistration() {
  document.querySelector(".pdfUpload").style.display = "none";
  document.querySelector(".imageUpload").style.display = "none";
  document.querySelector(".show-contactUs-list").style.display = "none";

  document.querySelector(".registrationView").style.display = "block";
  document.querySelector(".viewrig").style.backgroundColor = "var(--main)";
  document.querySelector(".viewrig").style.color = "#fff";
  document.querySelector(".newsAndUpdate").style.display = "none";
}

function viewNewsUpload() {
  document.querySelector(".pdfUpload").style.display = "none";
  document.querySelector(".imageUpload").style.display = "none";
  document.querySelector(".registrationView").style.display = "none";
  document.querySelector(".show-contactUs-list").style.display = "none";
  document.querySelector(".newsAndUpdate").style.display = "block";

  document.querySelector(".viewUpload").style.backgroundColor = "var(--main)";
  document.querySelector(".viewUpload").style.color = "#fff";
}
function showContactUsList() {
  document.querySelector(".pdfUpload").style.display = "none";
  document.querySelector(".imageUpload").style.display = "none";
  document.querySelector(".registrationView").style.display = "none";
  document.querySelector(".newsAndUpdate").style.display = "none";
  document.querySelector(".show-contactUs-list").style.display = "block";
  document.querySelector(".showContactList").style.backgroundColor =
    "var(--main)";
  document.querySelector(".showContactList").style.color = "#fff";
}

// document.addEventListener("keydown", function (e) {
//   console.log(e.key);
//   if (e.key == "Escape") {
//     const image = document.querySelector(".img");
//     image.style.width = "250px";
//     image.style.height = "200px";
//   }
// });
