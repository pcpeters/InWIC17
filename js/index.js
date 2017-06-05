function setCopyrightYear($selector) {
  var d = new Date();
  
  
  $selector.text(d.getFullYear());
}

$('.js-scroll').on('click', function(event) {
  event.preventDefault();
  var target = $(this).data('scrollTo');
  $('html, body').animate({
    scrollTop: $(target).offset().top
  }, 400);
});

setCopyrightYear($('#copyright-year'));

<script type="text/javascript">
    document.getElementById("register").onclick = function () {
        location.href = "register.html";
    };
</script>