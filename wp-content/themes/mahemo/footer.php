    </div>
</div>
    <script type="text/javascript">
        jQuery(function ($) {
            var n = 0;
            $('.showNav').toggle(function () {
                $('#navigation').slideDown(800);    
            }, function () {
                $('#navigation').slideUp(800);
            });
        });
    </script>
<?php wp_footer(); ?>
</body>
</html>