    </div>
</div>
    <script type="text/javascript">
        jQuery(function ($) {
            $('.showNav').click('1', function () {
               $('#navigation').animate({
                  height: 'toggle'
               }, 500, function () {
                   $('.showNav img').attr( 'src', '<?php echo get_template_directory_uri(); ?>/assets/images/close-button.svg');
               });
            });
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>