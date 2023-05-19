//Pagination
const page_link = document.querySelectorAll("#page_link");
const pagination_form = document.querySelectorAll("#pagination_form");
page_link.forEach((link) => {
  link.addEventListener("click", () => {
    console.log(link.innerText);
    const xmlhttp = new XMLHttpRequest();
    xmlhttp.open("POST", xhr.open("post", "<?=APP?>/controllers/Home.php", true), true);
    xmlhttp.setRequestHeader(
      "Content-type",
      "application/x-www-form-urlencoded"
    );
    xmlhttp.onreadystatechange = function () {
      if (this.readyState === 4 || this.status === 200) {
        console.log(this.responseText); // echo from php
      }
    };
    xmlhttp.send("id=" + link.innerText);
  });
});

const submitForm=()=>{
    pagination_form.addEventListener(submitForm)
}
