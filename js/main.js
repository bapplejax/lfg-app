// Get the modal
var $modal = $document.getElementById("loginModal");
console.log($modal);

// Get the button that opens the modal
var $btn = $document.find(".lfg-header__login");
console.log($btn);

// Get the <span> element that closes the modal
var $close = $document.find(".close")[0];
console.log($close);

// When the user clicks on the button, open the modal
$btn.onclick = function() {
  $modal.style.display = "block";
};

// When the user clicks on <span> (x), close the modal
$close.onclick = function() {
  $modal.style.display = "none";
};

// When the user clicks anywhere outside of the modal, close it
$window.onclick = function(event) {
  if (event.target == $modal) {
    $modal.style.display = "none";
  }
};
