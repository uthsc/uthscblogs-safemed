</div><!-- Row End -->
</div><!-- Container End -->

<div id="sticky-footer-root-footer"></div>
</div><!-- Sticky Footer Root End -->

<div id="sticky-footer">
    <div class="uthsc-footer-top full-width">
        <div class="row" data-equalizer>
            <?php dynamic_sidebar("Footer"); ?>
        </div>
    </div>

    <div class="social-row contain-to-grid">
        <div class="row">
            <div class="columns small-centered medium-uncentered medium-9 text-center">
                <div class="social-icon">
                    SHARE
                    <a href="http://www.facebook.com/sharer.php?u=https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <span class="fa fa-facebook fa-inverse"></span>
                        <span class="show-for-sr">Share on facebook</span>
                    </a>
                    <a href="https://twitter.com/intent/tweet?text=Check%20out%20this%20great%20info.&url=https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>&original_referer=<?php echo $_SERVER['REQUEST_URI']; ?>&hashtags=SafeMed">
                        <span class="fa fa-twitter fa-inverse"></span>
                        <span class="show-for-sr">Tweet on twitter</span>
                    </a>
                    <a href="https://plus.google.com/share?url=https://<?php echo $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI']; ?>">
                        <span class="fa fa-google-plus fa-inverse"></span>
                        <span class="show-for-sr">Share on google plus</span>
                    </a>
                </div>
            </div>
            <div class="columns small-centered medium-uncentered medium-3">
                <a href="mailto:safemedprogram@gmail.com?subject=Please add me to your mailing list."><button class="button expand">Join Our Mailing List</button></a>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <div class="footer contain-to-grid">
        <footer class="row">
            <div class="columns large-centered">
                <div class="row">
                    <div class="columns large-3 panel radius uthsc-panel logo-panel show-for-large-up">
                    </div>
                    <div class="columns large-6 text-center">
                        <p>
                            <span class="org-title"><strong>Center for Health System Improvement</strong></span><br />
                            <a href=""><span class="street-address">956 Court Avenue, Coleman Building, D227</span><br />
                                <span class="locality">Memphis</span> <span class="state">TN</span>, <span class="zip">38163</span></a><br />
                            <span class="telephone">phone: (901) 448-2475</span><br />
                            <span class="faxNumber">fax: (901) 448-3937</span><br />
                            <span class="email"><a href="mailto:SafeMedProgram@gmail.com">SafeMedProgram@gmail.com</a></span>
                        </p>
                    </div>
                    <div class="columns large-3 panel radius methodist-panel logo-panel show-for-large-up">
                    </div>
                </div>
                <div class="row">
                    <div class="columns">
                        <p class="text-center"><small>&copy; <?php echo date("Y") ?> The University of Tennessee Health Science Center - Center for Health System Improvement
                                <br />Methodist Healthcare
                            </small></p>
                    </div>
                </div>
            </div>
            <div class="columns logo-panel-group">
                <div class="row hide-for-large-up collapse" data-equalizer="data-equalizer">
                    <div class="columns small-12 small-centered medium-uncentered medium-6 panel radius uthsc-panel logo-panel" data-equalizer-watch="data-equalizer-watch">
                        <p class="show-for-sr">Logo for The University of Tennessee Health Science Center</p>
                    </div>
                    <div class="columns small-12 small-centered medium-uncentered medium-6 panel radius methodist-panel logo-panel" data-equalizer-watch="data-equalizer-watch">
                        <p class="show-for-sr">Logo for Methodist Healthcare South Hospital</p>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <script src="/wp-content/themes/uthscblogs-safemed/bower_components/jquery/dist/jquery.min.js"></script>
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