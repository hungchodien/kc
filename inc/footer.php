            </main><!--Body main-->
            <footer  class="site-footer">
                <p  class="footer">
                    Copyright 2017 KREIS&AMP;Company Inc. All Right Reserved
                </p>
            </footer>
            <script>
                jQuery(document).ready(function($){
                    //$(".background_header").height($( window ).height());
                    $("#kc_toggle").click(function(e){
                        $('.wrapper_page').addClass('menu_active');
                        $(".kc_menu_chance").addClass('menu_active');
                        e.preventDefault();
                        return false;

                    });
                    $("#kc_toggle_close").click(function(e){
                        $('.wrapper_page').removeClass('menu_active');
                        $(".kc_menu_chance").removeClass('menu_active');
                        e.preventDefault();
                        return false;
                    });


                });
            </script>
            </div><!--.wrapper_page-->
        </div><!--end #page-container-->
    </body>
</html>
<?php
    ob_flush();
?>