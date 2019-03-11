function getProducts(product, page) {
    var category = '';
    if (product !== 'all') {
        category = `cat=${product}&`;
    }
    jQuery.getJSON(`http://localhost/cheers/wp-json/product/list?${category}page=${page}`, function(data) {
        var container = jQuery('#products-listed');
        
        container.html('');
        for (var i = 1; i < data.length; i++) {
            container.append(`
            <div class="col-sm-6">
                <article class="cheers-archive-content">
                    <a href="${data[i].permalink}">
                        <div class="entry-thumbnail">
                            ${data[i].thumbnail}
                        </div>
                        <header class="entry-header-single">
                            <h1 class="entry-title-single">${data[i].title}</h1>
                            <h4 class="mb-0">${data[i].subheading}</h4>
                        </header><!-- .entry-header -->
                        <div class="entry-content">
                        ${data[i].description}
                        </div><!-- .entry-content -->
                    </a>
                </article><!-- #post-## -->
            </div>
            `);
        }
    });
}

var container = jQuery('#products-listed');

jQuery('.product-filter .nav-link').on('click', function(e) {
    e.preventDefault();
    jQuery('.product-filter .nav-link').each(function() {
        jQuery(this).removeClass('active').removeClass('grey-gradient').addClass('grey-gradient-inverse');
    });
    jQuery(this).removeClass('grey-gradient-inverse').addClass('active').addClass('grey-gradient');
});

jQuery.validate({
    lang: 'es',
    modules : 'toggleDisabled',
    disabledFormFilter : 'form.toggle-disabled',
    showErrorDialogs : false
});