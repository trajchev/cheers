function getProducts(product, page) {
    var category = '';
    if (product !== 'all') {
        category = `cat=${product}&`;
    }

    if (!page) {
        page = 1;
    }

    container.html('');
    navWrapper.html('');
    jQuery.getJSON(`http://localhost/cheers/wp-json/product/list?${category}page=${page}`, function(data) {
        for (var i = 0; i < data.length; i++) {

            if (i === 0) {
                totalPosts = parseInt(data[i].total_posts)
                if (totalPosts > postsPerPage) {
                    paginationNumbers = Math.ceil(totalPosts / postsPerPage);

                    if (page > 1) {
                        navWrapper.append(`
                            <li class="page-item">
                                <a class="page-link" onclick="getProducts('${product}', ${page - 1})">&laquo;</a>
                            </li>
                        `);
                    }

                    for (j = 0; j < paginationNumbers; j++) {
                        if (j + 1 == page) {
                            navWrapper.append(`
                                <li class="page-item active">
                                <span aria-current="page" class="page-link current">${page}</span></li>
                            `)
                        } else {
                            navWrapper.append(`
                                <li class="page-item">
                                    <a class="page-link" onclick="getProducts('${product}', ${j + 1})">${j + 1}</a>
                                </li>
                            `);
                        }
                    }
                    if (page < paginationNumbers) {
                        navWrapper.append(`
                            <li class="page-item">
                                <a class="page-link" onclick="getProducts('${product}', ${page + 1})">&raquo;</a>
                            </li>
                        `);
                    }
                }
            } else {
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
        }
    });
}

var paginationNumbers = 0;
var postsPerPage = 10;
var navWrapper = jQuery('#pagination-content');
var totalPosts = 0;
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

getProducts('all');