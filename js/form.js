const inputs = document.querySelectorAll(".input");

function focusFunc() {
  let parent = this.parentNode;
  parent.classList.add("focus");
}

function blurFunc() {
  let parent = this.parentNode;
  if (this.value == "") {
    parent.classList.remove("focus");
  }
}

inputs.forEach((input) => {
  input.addEventListener("focus", focusFunc);
  input.addEventListener("blur", blurFunc);
});



function checkform()
{
    var f = document.forms["sentMessage"].elements;
    var cansubmit = true;

    for (var i = 0; i < f.length; i++) {
        if (f[i].value.length == 0) cansubmit = false;
    }

    if (cansubmit) {
        document.getElementById('submit').disabled = false;
    }
    else {
        document.getElementById('submit').disabled = 'true';
    }
}
