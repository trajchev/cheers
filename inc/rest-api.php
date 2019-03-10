<?php

    // Define the routes by the parameters
    // cat = beer || wine || wiskey || vodka
    function productRoute() {
        register_rest_route('product', 'list', array(
            'methods'  => WP_REST_SERVER::READABLE,
            'callback' => 'getBeer'
        ));
    }

    add_action('rest_api_init', 'productRoute');

    function getBeer($data) {

        $products = new WP_Query(array(
            'post_type' => 'product',
            'category_name' => $data['cat'],
            'posts_per_page' => 10,
            'paged' => $data['page']
        ));

        $productsRes = array();

        array_push($productsRes, array(
            'total_posts' => $products->found_posts
        ));

        while($products->have_posts()) {
            $products->the_post();
            array_push($productsRes, array(
                'title' => get_the_title(),
                'subheading' => get_field('product_subheading'),
                'thumbnail' => get_the_post_thumbnail(),
                'description' => get_the_excerpt(),
                'permalink' => get_the_permalink(),
                'category' => get_the_category()[0]->cat_name
            ));
        }
        return $productsRes;
    }
