$(document).ready( function(){

  // Get the modal
  var $modal = $("#loginModal");
  console.log($modal);

  // Get the button that opens the modal
  var $btn = $(".lfg-header__login");
  console.log($btn);

  // Get the <span> element that closes the modal
  var $close = $(".close")[0];
  console.log($close);

  // When the user clicks on the button, open the modal
  $btn.click(function() {
    $modal.addClass('modal-show');
  });

  // When the user clicks on <span> (x), close the modal
  $close.click(function() {
    $modal.removeClass('modal-show');
  });

  // When the user clicks anywhere outside of the modal, close it
  $(window).click(function(event) {
    if (event.target == $modal) {
      $modal.removeClass('modal-show');
    }
  });
});
