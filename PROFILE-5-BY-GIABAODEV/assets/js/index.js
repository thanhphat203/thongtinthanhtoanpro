// Get the modal
var modal = document.getElementById("myModal");

// Get the image and insert it inside the modal - use its "alt" text as a caption
var img = document.getElementById("myImg");
var modalImg = document.getElementById("img01");
var captionText = document.getElementById("caption");
img.onclick = function(){
  modal.style.display = "block";
  modalImg.src = this.src;
  captionText.innerHTML = this.alt;
}

// Get the <span> element that closes the modal
var span = document.getElementsByClassName("close")[0];

// When the user clicks on <span> (x), close the modal
span.onclick = function() { 
  modal.style.display = "none";
}
 // copy 
function copyText(textToCopy) {
    var CopyTextarea = document.createElement("textarea");
    CopyTextarea.textContent = textToCopy;
    document.body.appendChild(CopyTextarea);
    CopyTextarea.select();
    document.execCommand('copy');
    document.body.removeChild(CopyTextarea);
    alert('COPIED')
}
function stk() {
  Toastify({
      text: "COPIED",
      duration: 4200,
      backgroundColor: "green"
    }).showToast();
    return;
}
