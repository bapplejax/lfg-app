$(document).ready( function(){

  // Get the modal
  const modal = $("#loginModal");

  // Get the button that opens the modal
  const btn = $(".lfg-header__login");

  // Get the <span> element that closes the modal
  const close = $(".close");

  // Get the wrapper element
  const modalWindow = $(".modal__wrapper");

  // When the user clicks on the button, open the modal
  btn.click(function() {
    modal.addClass('modal-show');
  });

  // When the user clicks on <span> (x), close the modal
  close.click(function() {
    modal.removeClass('modal-show');
  });

  // When the user clicks anywhere outside of the modal, close it
  modalWindow.click(function(event) {
    if (event.target == modal) {
      modal.removeClass('modal-show');
    }
  });
});
