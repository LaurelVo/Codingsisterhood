<?php
/**
 * The theme footer
 * 
 * @package bootstrap-basic
 */
?>

</div>
<!--.site-content-->


<footer id="site-footer" role="contentinfo">
    <div id="footer-row" class="row site-footer">
        <div class="col-md-12 footer-left">
            Coding Sisterhood © | 2022 | Website built by
            <a href="/members/">these amazing members</a>
        </div>
        <div class="col-md-6 footer-right text-right">
            <?php dynamic_sidebar('footer-right'); ?>
        </div>
    </div>
</footer>
</div>
<!--.container page-container-->


<!--wordpress footer-->
<?php wp_footer(); ?>
</body>

</html>