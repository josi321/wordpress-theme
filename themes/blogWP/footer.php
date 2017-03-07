<footer>
<div class="footer">
    <div class="container-footer">

        <div class="item">
            <div class="contact">
                <h3>Contact Info</h3>
                <p><i class="fa fa-envelope"></i><a href="mailto:info@inhabitent.com">info@inhabitent.com</a></p>
                <p><i class="fa fa-phone"></i><a href="tel:5553434567891">778-456-7891</a></p>
                <p>
                    <span><i class="fa fa-facebook-square"></i></span>
                    <span><i class="fa fa-twitter-square"></i></span>
                    <span><i class="fa fa-google-plus-square"></i></span>
                </p>
            </div>
        </div>

        <div class="item">
            <div class="hours">
                <h3>Business Hours</h3>
                <p><strong>Friday:</strong> 9am to 5pm</p>
                <p><strong>Saturday:</strong> 10am to 2pm</p>
                <p><strong>Sunday:</strong> Closed</p>
            </div>
        </div>

        <div class="item-logo">
            <div class="text-logo">
                <a href="#" rel="home">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/logos/inhabitent-logo-text.svg" alt="Inhabitent Logo" />
                </a>
            </div>
        </div>
    </div>

    <div class="copyright">
        <div class="container-footer">
            <p> COPYRIGHT &copy; <?php echo get_the_date('Y'); ?> <?php bloginfo('name'); ?></p>
        </div>
    </div>
</div>
</footer>
<?php wp_footer(); ?>
</body>

</html>
