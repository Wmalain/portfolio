function typeWriter(text, n) {
  if (n < (text.length)) {
    $('.presep').html(text.substring(0, n+1));
    n++;
    setTimeout(function() {
      typeWriter(text, n)
    }, 40);
  }
}

var text = $('.presep').data('text');

typeWriter(text, 0);