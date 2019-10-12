$(document).ready( function(){

  // Get the modal
  const $modal = $("#loginModal");
  console.log($modal);

  // Get the button that opens the modal
  const $btn = $(".lfg-header__login");
  console.log($btn);

  // Get the <span> element that closes the modal
  const $close = $(".close")[0];
  console.log($close);

  // When the user clicks on the button, open the modal
  $btn.click(function() {
    console.log("clicked on button");
    console.log($modal);
    $modal.addClass('modal-show');
    console.log(this + " " + $modal);
  });

  // When the user clicks on <span> (x), close the modal
  $close.click(function() {
    console.log($close);
    $modal.removeClass('modal-show');
  });

  // When the user clicks anywhere outside of the modal, close it
  $(window).click(function(event) {
    if (event.target == $modal) {
      $modal.removeClass('modal-show');
    }
  });
});
