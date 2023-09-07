const cform = document.querySelector("form");
let resp;
cform.onsubmit = ((e) => {
  e.preventDefault();

  let xhr = new XMLHttpRequest();
  // console.log(xhr)
  xhr.open("POST", "mail.php", true);
  xhr.onload = () => {


    // console.log("status", xhr.status)
    // if (xhr.status != 200) {
    //   console.log("status of")
    //   alert("Error sending email");
    //   return
    // }


    if (xhr.readyState == 4 && xhr.status == 200) {
      let response = xhr.response;
      resp = response
      // console.log(response)
      if (response.indexOf("required") != -1 || response.indexOf("valid") != -1 || response.indexOf("failed") != -1) {
        alert("Error Sending email");
        // return
      } else {
        alert("Mail sent");
        // let formData = new FormData(cform);
        // xhr.send(formData);
        window.location.href = "/index.html";
      }
    }

  };



  // if (resp) {
    let formData = new FormData(cform);
    xhr.send(formData);
    // window.location.href = "/index.html"
  // }

  // else {
  //   alert("error Sending email")
  // }
});






window.addEventListener("load", () => {
  const packageElement = document.querySelector("#package")
  const params = (new URL(document.location)).searchParams;
  const package = params.get("package")
  // console.log(item)
  // drop.selectedIndex = "0"

  console.log(package)
  // console.log(packageElement)
  packageElement.value = package
  // console.log(packageElement.textContent)

})