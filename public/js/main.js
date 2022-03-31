function showpass() {
    var x = document.getElementById("passs");
    if (x.type === "password") {
      x.type = "text";
    } else {
      x.type = "password";
    }
  }