<footer id="footer">
  <div class="footerSns">
      <ul>
        <li class="footerSns_facebook"><a class="transition" href="https://www.facebook.com/takehiro.matsuo.357?fref=ts"><img src="<?php echo get_template_directory_uri();?>/img/icon_facebook.svg" alt="facebook"></a></li>
        <li class="footerSns_github"><a class="transition" href="https://github.com/Takehiro-Matsuo"><img src="<?php echo get_template_directory_uri();?>/img/icon_github.svg" alt="github"></a></li>
      </ul>
  </div><!-- .footerSns -->
  <div class="footerCopyright">
    <p>©️ Takehiro Matsuo</p>
  </div>
</footer>
<script>
$('.headerNaviToggle').click(function(){//headerのnaviを開くアニメーション
  $('#header').toggleClass('openHeaderNavi');
});
</script>
<script>new WOW().init();//画面スクロール時のアニメーションのトリガー</script>
</body>
</html>
<?php wp_footer(); ?>
