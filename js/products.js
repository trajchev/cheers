function getResults() {
    jQuery.getJSON('http://localhost/cheers/wp-json/product/list', function(data) {
        var container = jQuery('#products-listed');
        container.html('');
        for (var i = 0; i < data.length; i++) {
            container.append(`
            <div class="col-sm-6">
                <article class="cheers-post-content">
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
                </article><!-- #post-## -->
            </div>
            `);

            if(data[i].category == 'Wine') {
                console.log(data[i]);
            }

            if(data[i].category == 'Beer') {
                console.log(data[i]);
            }

            if(data[i].category == 'Whiskey') {
                console.log(data[i]);
            }

            if(data[i].category == 'Vodka') {
                console.log(data[i]);
            }
        }
    });
}

var container = jQuery('#products-listed');

getResults();