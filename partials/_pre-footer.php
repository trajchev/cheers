<!-- PRE FOOTER SECTION -->
<?php if ( is_active_sidebar( 'prefooter' ) ) : ?>
<section id="pre-footer">
    <div class="container">
        <div class="bg-banana top-border-10 py-2">
            <div class="row">
                <?php dynamic_sidebar( 'prefooter' ); ?>
            </div>
        </div>
    </div>
</section>
<?php endif; ?>