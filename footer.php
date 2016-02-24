</div><!-- Row End -->
</div><!-- Container End -->


<div id="sticky-footer">
        <div class="uthsc-footer-top full-width">
            <div class="row" data-equalizer>
                <?php dynamic_sidebar("Footer"); ?>
            </div>
        </div>

    <div class="sub-tagline-box contain-to-grid">
        <div class="row">
            <div class="columns text-center">
                <p class="sub-tagline">A joint venture between University of Tennessee Health Science Center (UTHSC) and Methodist LeBonheur HealthCare</p>
            </div>
        </div>
    </div>
    <div class="row full">
        <div class="columns text-center">
            <h3>Call <i class="fa fa-phone"></i> UTHSC Center for Health Systems Improvement: <span class="pnone-number">(901) 448-2475</span></h3>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer contain-to-grid">
        <footer class="row text-center">
            <div class="large-12 columns large-centered">
                <div class="row" data-equalizer="data-equalizer">
                    <div class="columns large-2 panel radius methodist-panel logo-panel show-for-large-up" data-equalizer-watch="data-equalizer-watch">
                    </div>
                    <div class="columns large-8 small-centered medium-uncentered large-uncentered" data-equalizer-watch="data-equalizer-watch">
                        <div class="social-icon">
                            <a href="http://facebook.com/#"><i class="fa fa-facebook fa-2x fa-inverse"></i></a>
                            <a href="http://twitter.com/#"><i class="fa fa-twitter fa-2x fa-inverse"></i></a>
                            <a href="http://youtube.com/user/#"><i class="fa fa-youtube fa-2x fa-inverse"></i></a>
                            <p>&copy; <?php echo date("Y") ?> The University of Tennessee Health Science Center - Center for Health System Improvement
                                <br />Methodist Le Bonheur Healthcare
                            </p>
                        </div>
                    </div>
                    <div class="columns large-2 panel radius uthsc-panel logo-panel show-for-large-up" data-equalizer-watch="data-equalizer-watch">
                    </div>
                </div>
            </div>
            <div class="columns logo-panel-group">
                <div class="row hide-for-large-up collapse" data-equalizer="data-equalizer">
                    <div class="columns small-12 small-centered medium-uncentered medium-6 panel radius methodist-panel logo-panel" data-equalizer-watch="data-equalizer-watch">
                    </div>
                    <div class="columns small-12 small-centered medium-uncentered medium-6 panel radius uthsc-panel logo-panel" data-equalizer-watch="data-equalizer-watch">
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="bower_components/jquery/dist/jquery.min.js"></script>
    <script>

        $(document).ready(function() {
            $('.link-pdf').attr('title', "Link to a PDF").attr('aria-label', "PDF Icon");
            $('a', '.links-pdf').attr('title', "Link to a PDF").attr('aria-label', "PDF Icon");
            $('.link-external').attr('title', "External Link").attr('aria-label', "External Link Icon");
            $('a', '.links-external').attr('title', "External Link").attr('aria-label', "External Link Icon");
            $('.link-word').attr('title', "Link to a Word Document").attr('aria-label', "Microsoft Word Icon");
            $('a', '.links-word').attr('title', "Link to a Word Document").attr('aria-label', "Microsoft Word Icon");
            $('.link-excel').attr('title', "Link to a Excel Document").attr('aria-label', "Microsoft Excel Icon");
            $('a', '.links-excel').attr('title', "Link to a Excel Document").attr('aria-label', "Microsoft Excel Icon");
            $('.link-ppt').attr('title', "Link to a PowerPoint Document").attr('aria-label', "Microsoft PowerPoint Icon");
            $('a', '.links-excel').attr('title', "Link to a PowerPoint Document").attr('aria-label', "Microsoft PowerPoint Icon");
        });
    </script>

    <?php wp_footer(); ?>

</div>
<script src="/wp-content/themes/uthscblogs/js/app.min.js"></script>
</body>
</html>