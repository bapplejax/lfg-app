$(document).ready( function(){

  // Get the modal
  const modal = $("#loginModal");

  // Get the button that opens the modal
  const btn = $(".lfg-header__login");

  // Get the <span> element that closes the modal
  const close = $(".close");

  // When the user clicks on the button, open the modal
  btn.click(function() {
    modal.addClass('modal-show');
  });

  // When the user clicks on <span> (x), close the modal
  close.click(function() {
    modal.removeClass('modal-show');
  });

  // When the user clicks anywhere outside of the modal, close it
  if (modal.hasClass('modal-show')) {
    $("div").not('.modal__wrapper').click(function() {
      modal.removeClass('modal-show');
    });
  }

  // Successful login disappear after 5 seconds
  var fade_out = function() {
    $(".success").fadeOut().empty();
  };
  setTimeout(fade_out, 5000);

  // Card Summary Open
  const summaryOpen = $('.lfg-card__summary-js');

  summaryOpen.click(function(){
    console.log('clicked on open');
    $(document).find('show-summary').removeClass('show-summary');
    this.siblings('.lfg-card__summary').addClass('show-summary');
  });

  // Card Summary Close
  const summaryClose = $('.lfg-card__summary-close');

  summaryClose.click(function () {
    console.log('clicked on close');
    this.parent().removeClass('show-summary');
  });

});
