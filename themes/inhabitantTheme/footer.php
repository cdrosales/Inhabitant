<?php wp_footer(); 

?>  <!-- will give admin pannel & script tags will be loaded here  -->

<footer>

    <div class="footerMainContainer">
        <div class="footerContainer">


            <ul class="footerInhabitantInfo">
                <h2>Contact Info</h2>
                <li><i class="fas fa-envelope"></i>Info@inhabitant.com</li>
                <li><i class="fas fa-phone-alt"></i>778-456-7891</li>
                <li> 
                    <ul class="socialMediaIcons">
                        <li><i class="fab fa-facebook-square"></i></li>
                        <li><i class="fab fa-twitter-square"></i></li>
                        <li><i class="fab fa-google-plus-square"></i></li>
                    </ul>
                </li>
            </ul>

        <?php dynamic_sidebar('sidebar-1'); ?>


            
            
        </div>
             <img src="<?php echo get_template_directory_uri() . '/assets/images/logos/inhabitent-logo-text.svg'; ?>" class="footerLogo" />

    </div>




    <p class="copyright">Copyright © 2019 Inhabitant</p>

</footer>

</body>
</html>