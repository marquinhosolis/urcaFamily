<?php
    
    add_theme_support( 'post-thumbnails' );

    add_action( 'init', 'cpt_products' );
   
    function cpt_products() {
        $labels = array(
            'name'               => _x( 'Products', 'post type general name', 'your-plugin-textdomain' ),
            'singular_name'      => _x( 'Product', 'post type singular name', 'your-plugin-textdomain' ),
            'menu_name'          => _x( 'Products', 'admin menu', 'your-plugin-textdomain' ),
            'name_admin_bar'     => _x( 'Products', 'add new on admin bar', 'your-plugin-textdomain' ),
            'add_new'            => _x( 'Add New', 'products', 'your-plugin-textdomain' ),
            'add_new_item'       => __( 'Add New Product', 'your-plugin-textdomain' ),
            'new_item'           => __( 'New Product', 'your-plugin-textdomain' ),
            'edit_item'          => __( 'Edit Product', 'your-plugin-textdomain' ),
            'view_item'          => __( 'View Product', 'your-plugin-textdomain' ),
            'all_items'          => __( 'All Products', 'your-plugin-textdomain' ),
            'search_items'       => __( 'Search Products', 'your-plugin-textdomain' ),
            'parent_item_colon'  => __( 'Parent Products:', 'your-plugin-textdomain' ),
            'not_found'          => __( 'No products found.', 'your-plugin-textdomain' ),
            'not_found_in_trash' => __( 'No products found in Trash.', 'your-plugin-textdomain' )
        );
    
        $args = array(
            'labels'             => $labels,
            'description'        => __( 'Description.', 'your-plugin-textdomain' ),
            'public'             => true,
            'publicly_queryable' => true,
            'show_ui'            => true,
            'show_in_menu'       => true,
            'query_var'          => true,
            'rewrite'            => array( 'slug' => 'products' ),
            'capability_type'    => 'post',
            'taxonomies'          => array( 'category' ),
            'has_archive'        => true,
            'hierarchical'       => false,
            'menu_position'      => 5,
            'menu_icon'          => 'dashicons-cart',
            'supports'           => array( 'title', 'editor', 'author', 'thumbnail')
        );
    
        register_post_type( 'products', $args );
    }

    function register_my_menus() {
        register_nav_menus(
          array(
            'main-menu' => __( 'Main Menu' )
          )
        );
      }
      add_action( 'init', 'register_my_menus' );
    
?>