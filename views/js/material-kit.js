function toogleNav() {
    if ( $('#side-menu').hasClass('active') ) {
      toggleProfile(true);
      $('#side-menu').removeClass('active')
      $('#menu-overflow').fadeOut(100)
      $('body').css('overflow-y', 'visible')
    }
    else {
      toggleProfile(true);
      $('#side-menu').addClass('active')
      $('#menu-overflow').fadeIn(100)
      $('body').css('overflow-y', 'hidden')
    }
  }
  
  function closeNav() {
    if ( $('#side-menu').hasClass('active') ) {
      toggleProfile(true);
      $('#side-menu').removeClass('active')
      $('#menu-overflow').fadeOut(100)
      $('body').css('overflow-y', 'visible')
    }
  }
  
  function toggleProfile(close = null) {
      profile = $('#perfil');
      if(close!=null) {
          profile.removeClass('open');
      }
      else {
          if ( profile.hasClass('open') ) {
              closeNav();
              profile.removeClass('open');
          }
          else {
              closeNav();
              profile.addClass('open');
          }
      }
    }


function myFunction(){
  var dropdownContent = document.querySelector('.dropdown-content');
  dropdownContent.classList.toggle('dropdown-toggle');
}

