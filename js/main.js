$(document).ready( function(){

  // Get the modal
  var $modal = $(document).find("#loginModal");

  // Get the button that opens the modal
  var $btn = $(document).find(".lfg-header__login");

  // Get the <span> element that closes the modal
  var $close = $(document).find(".close")[0];

  // When the user clicks on the button, open the modal
  $btn.click(function() {
    $modal.addClass('modal-show');
    console.log('clicked on button')
  });

  // When the user clicks on <span> (x), close the modal
  $close.click(function() {
    $modal.removeClass('modal-show');
    console.log('clicked on close');
  });

  // When the user clicks anywhere outside of the modal, close it
  $(window).click(function(event) {
    if (event.target == $modal) {
      $modal.removeClass('modal-show');
      console.log('click on window');
    }
  });
});
