<?php


    // All the products
    function restRoute() {
        register_rest_route('product', 'all', array(
            'methods'  => WP_REST_SERVER::READABLE,
            'callback' => 'productAll'
        ));
    }

    add_action('rest_api_init', 'restRoute');

    function productAll() {
        $products = new WP_Query(array(
            'post_type' => 'product'
        ));

        $productsRes = array();

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


    // Beer
    function beerRoute() {
        register_rest_route('product', 'beer', array(
            'methods'  => WP_REST_SERVER::READABLE,
            'callback' => 'getBeer'
        ));
    }

    add_action('rest_api_init', 'beerRoute');

    function getBeer() {
        $products = new WP_Query(array(
            'post_type' => 'product',
            'cat' => 9
        ));

        $productsRes = array();

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

    // Whiskey
    function whiskeyRoute() {
        register_rest_route('product', 'whiskey', array(
            'methods'  => WP_REST_SERVER::READABLE,
            'callback' => 'getWhiskey'
        ));
    }

    add_action('rest_api_init', 'whiskeyRoute');

    function getWhiskey() {
        $products = new WP_Query(array(
            'post_type' => 'product',
            'cat' => 11
        ));

        $productsRes = array();

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

    // Vodka
    function vodkaRoute() {
        register_rest_route('product', 'vodka', array(
            'methods'  => WP_REST_SERVER::READABLE,
            'callback' => 'getVodka'
        ));
    }

    add_action('rest_api_init', 'vodkaRoute');

    function getVodka() {
        $products = new WP_Query(array(
            'post_type' => 'product',
            'cat' => 10
        ));

        $productsRes = array();

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

    // Wine
    function wineRoute() {
        register_rest_route('product', 'wine', array(
            'methods'  => WP_REST_SERVER::READABLE,
            'callback' => 'getWine'
        ));
    }

    add_action('rest_api_init', 'wineRoute');

    function getWine() {
        $products = new WP_Query(array(
            'post_type' => 'product',
            'cat' => 3
        ));

        $productsRes = array();

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