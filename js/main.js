// Get the modal
var $modal = document.getElementById("loginModal");

// Get the button that opens the modal
var $btn = document.getElementsByClassName("lfg-header__login");

// Get the <span> element that closes the modal
var $close = document.getElementsByClassName("close")[0];

// When the user clicks on the button, open the modal
$btn.onclick = function() {
  $modal.addClass('modal-show');
  console.log('clicked on button')
};

// When the user clicks on <span> (x), close the modal
$close.onclick = function() {
  $modal.removeClass('modal-show');
  console.log('clicked on close');
};

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
  if (event.target == $modal) {
    $modal.removeClass('modal-show');
    console.log('click on window');
  }
};
