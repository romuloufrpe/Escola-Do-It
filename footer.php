</main>

<footer>

<div class="logo-rodape">
  <a href="index.html">
    <img src=" <?php bloginfo('template_url'); ?>/imagens/logo-rodape.png" alt="logo rodape">
  </a>

  <p> <?php echo date('Y'); ?> Todos os Direitos Reservados.</p>
</div>

</footer>
</div>

<script src="<?php bloginfo('template_url'); ?>/bower_components/jquery/dist/jquery.min.js"></script>
<script src="<?php bloginfo('template_url'); ?>/bower_components/wow/dist/wow.min.js"></script>

<?php if(is_front_page()) : ?>
  <script src="<?php bloginfo('template_url');?>/bower_components/slick-carousel/slick/slick.min.js">

  </script>
<?php endif; ?>

<script>
$(function(){
  $('.toggle').click(function(){
    $('.layout').toggleClass('ativo');
    $('.menu-responsivo').toggleClass('ativo');
    $(this).toggleClass('ativo');
  });
  new WOW().init();
});
  </script>
<?php wp_footer(); ?>
</body>
</html>
