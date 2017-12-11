<?php
//------------------
//  from lecture
//------------------

/* ---------------------------------
------- PRODUKTER post type --------- 
------------------------------------*/

function produkter_post_type() {

    /* Set up the arguments for the post type. */
    $args = array(

        /**
         * Whether the post type should be used publicly via the admin or by front-end users.  This
         * argument is sort of a catchall for many of the following arguments. I would focus more
         * on adjusting them to your liking than this argument.
         */
        'public'              => true, // bool (default is FALSE) 

        /**
         * Whether queries can be performed on the front end as part of parse_request().
         */
        //'publicly_queryable'  => true, // bool (defaults to 'public').

        /**
         * Whether to exclude posts with this post type from front-end search results.
         */
        'exclude_from_search' => false, // bool (defaults to 'public')

        /**
         * Whether individual post type items are available for selection in navigation menus.
         */
        'show_in_nav_menus'   => true, // bool (defaults to 'public')

        /**
         * Whether to generate a default UI for managing this post type in the admin. You'll have
         * more control over what's shown in the admin with the other arguments.  To build your
         * own UI, set this to FALSE.
         */
        'show_ui'             => true, // bool (defaults to 'public')
 
        /**
         * Whether to show post type in the admin menu. 'show_ui' must be true for this to work.
         */
        'show_in_menu'        => true, // bool (defaults to 'show_ui')

        /**
         * Whether to make this post type available in the WordPress admin bar. The admin bar adds
         * a link to add a new post type item.
         */
        'show_in_admin_bar'   => true, // bool (defaults to 'show_in_menu')

        /**
         * The position in the menu order the post type should appear. 'show_in_menu' must be true
         * for this to work.
         */
        'menu_position'       => 5, // int (defaults to 25 - below comments)

        /**
         * The css-string for the icon to use for the admin menu item.
         * https://developer.wordpress.org/resource/dashicons
         */
        'menu_icon'           => 'dashicons-screenoptions', // string (defaults to use the post icon)

        /**
         * Whether the posts of this post type can be exported via the WordPress import/export plugin
         * or a similar plugin.
         */
        'can_export'          => true, // bool (defaults to TRUE)

        /**
         * Whether to delete posts of this type when deleting a user who has written posts.
         */
        'delete_with_user'    => false, // bool (defaults to TRUE if the post type supports 'author')

        /**
         * Whether this post type should allow hierarchical (parent/child/grandchild/etc.) posts.
         */
        'hierarchical'        => false, // bool (defaults to FALSE)

        /**
         * Whether the post type has an index/archive/root page like the "page for posts" for regular
         * posts. If set to TRUE, the post type name will be used for the archive slug.  You can also
         * set this to a string to control the exact name of the archive slug. (site.com/projects)
         */
        'has_archive'         => 'produkter', // bool|string (defaults to FALSE)
        //'has_archive'         => true, // bool|string (defaults to FALSE)

        /**
         * Sets the query_var key for this post type. If set to TRUE, the post type name will be used.
         * You can also set this to a custom string to control the exact key.
         */
       // 'query_var'           => 'produkt', // bool|string (defaults to TRUE - post type name)
        'query_var'           => true, // bool|string (defaults to TRUE - post type name)

        /**
         * A string used to build the edit, delete, and read capabilities for posts of this type. You
         * can use a string or an array (for singular and plural forms).  The array is useful if the
         * plural form can't be made by simply adding an 's' to the end of the word.  For example,
         * array( 'box', 'boxes' ).
         */
        'capability_type'     => 'post', // string|array (defaults to 'post')

        /**
         * Whether WordPress should map the meta capabilities (edit_post, read_post, delete_post) for
         * you.  If set to FALSE, you'll need to roll your own handling of this by filtering the
         * 'map_meta_cap' hook.
         */
        'map_meta_cap'        => true, // bool (defaults to FALSE)
		'taxonomies' => array('kategori'),
        /**
         * How the URL structure should be handled with this post type.  You can set this to an
         * array of specific arguments or true|false.  If set to FALSE, it will prevent rewrite
         * rules from being created.
         */
        'rewrite' => array(
      		'slug'                  => 'produkter',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => true,
      	),

        /**
         * What WordPress features the post type supports.  Many arguments are strictly useful on
         * the edit post screen in the admin.  However, this will help other themes and plugins
         * decide what to do in certain situations.  You can pass an array of specific features or
         * set it to FALSE to prevent any features from being added.  You can use
         * add_post_type_support() to add features or remove_post_type_support() to remove features
         * later.  The default features are 'title' and 'editor'.
         */
        'supports' => array(

            /* Post titles ($post->post_title). */
            'title',

            /* Post content ($post->post_content). */
            'editor',

            /* Post excerpt ($post->post_excerpt). */
            'excerpt',

            /* Post author ($post->post_author). */
            'author',

            /* Featured images (the user's theme must support 'post-thumbnails'). */
            'thumbnail',

            /* Displays comments meta box.  If set, comments (any type) are allowed for the post. */
            'comments',

            /* Displays meta box to send trackbacks from the edit post screen. */
            'trackbacks',

            /* Displays the Custom Fields meta box. Post meta is supported regardless. */
            'custom-fields',

            /* Displays the Revisions meta box. If set, stores post revisions in the database. */
            'revisions',

            /* Displays the Attributes meta box with a parent selector and menu_order input box. */
            'page-attributes',

            /* Displays the Format meta box and allows post formats to be used with the posts. */
            'post-formats',
        ),

        /**
         * Labels used when displaying the posts in the admin and sometimes on the front end.  These
         * labels do not cover post updated, error, and related messages.  You'll need to filter the
         * 'post_updated_messages' hook to customize those.
         */
        'taxonomies'            => array( 'produkter_sort', 'kategori'),
        'labels' => array(
            'name'               => __( 'Produkter',                  'produkt-textdomain' ),
            'singular_name'      => __( 'Produkt',                    'produkt-textdomain' ),
            'menu_name'          => __( 'Produkter',                  'produkt-textdomain' ),
            'name_admin_bar'     => __( 'Produkter',                  'produkt-textdomain' ),
            'add_new'            => __( 'Lägg till ny',                'produkt-textdomain' ),
            'add_new_item'       => __( 'Lägg till ny produkt',       'produkt-textdomain' ),
            'edit_item'          => __( 'Redigera produkt',           'produkt-textdomain' ),
            'new_item'           => __( 'Ny Produkt',                 'produkt-textdomain' ),
            'view_item'          => __( 'Se produkt',                'produkt-textdomain' ),
            'search_items'       => __( 'Sök produkt',                'produkt-textdomain' ),
            'not_found'          => __( 'Ingen produkt hittad',       'produkt-textdomain' ),
            'not_found_in_trash' => __( 'Ingen produkt hittad i papperskorgen','produkt-textdomain' ),
            'all_items'          => __( 'Alla produkter',             'produkt-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type(
        'produkter', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

/* Register custom post types on the 'init' hook. Add an action to the init. */
add_action( 'init', 'produkter_post_type' );

/* -----------------------------------
------- PERSONAL post type ---------- 
--------------------------------------*/

function personal_post_type() {
    $args = array(
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-admin-users',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => 'personal',
        'query_var'           => 'personal',
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'rewrite' => array(
      		'slug'                  => 'personal',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        'supports' => array(

            'title',
            'editor',
            'author',
            'thumbnail',
            'custom-fields',


        ),
        'taxonomies'            => array( 'personal_sort' /*, 'project_skill' */),
        'labels' => array(
            'name'               => __( 'Personal',                    'personal-textdomain' ),
            'singular_name'      => __( 'Personal',                    'personal-textdomain' ),
            'menu_name'          => __( 'Personal',                    'personal-textdomain' ),
            'name_admin_bar'     => __( 'Personal',                    'personal-textdomain' ),
            'add_new'            => __( 'Lägg till ny',                'personal-textdomain' ),
            'add_new_item'       => __( 'Lägg till ny personal',       'personal-textdomain' ),
            'edit_item'          => __( 'Redigera personal',           'personal-textdomain' ),
            'new_item'           => __( 'Ny personal',                 'personal-textdomain' ),
            'view_item'          => __( 'Se personal',                'personal-textdomain' ),
            'search_items'       => __( 'Sök personal',                'personal-textdomain' ),
            'not_found'          => __( 'Ingen personal hittad',       'personal-textdomain' ),
            'not_found_in_trash' => __( 'Ingen personal hittad i papperskorgen','personal-textdomain' ),
            'all_items'          => __( 'All personal',                'personal-textdomain' ),
        )
    );
    /* Register the post type. */
    register_post_type(
        'personal', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

add_action( 'init', 'personal_post_type' );

/* -----------------------------------
------- NYHETER post type ---------- 
--------------------------------------*/

function nyheter_post_type() {
    $news = array(
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-aside',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => 'nyheter',
        'query_var'           => 'nyheter',
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'rewrite' => array(
            'slug'                  => 'nyheter',
            'with_front'            => false,
            'pages'                 => true,
            'feeds'                 => false,
        ),

        'supports' => array(

            'title',
            'editor',
            'author',
            'thumbnail',
            'revisions',
        ),
        'taxonomies'            => array( 'nyheter_sort' /*, 'project_skill' */),
        'labels' => array(
            'name'               => __( 'Nyheter',                    'nyheter-textdomain' ),
            'singular_name'      => __( 'Nyhet',                    'nyheter-textdomain' ),
            'menu_name'          => __( 'Nyheter',                    'nyheter-textdomain' ),
            'name_admin_bar'     => __( 'Nyheter',                    'nyheter-textdomain' ),
            'add_new'            => __( 'Lägg till nyhet',                'nyheter-textdomain' ),
            'add_new_item'       => __( 'Lägg till ny nyhet',       'nyheter-textdomain' ),
            'edit_item'          => __( 'Redigera nyhet',           'nyheter-textdomain' ),
            'new_item'           => __( 'Ny nyhet',                 'nyheter-textdomain' ),
            'view_item'          => __( 'Se nyheten',                'nyheter-textdomain' ),
            'search_items'       => __( 'Sök nyheter',                'nyheter-textdomain' ),
            'not_found'          => __( 'Ingen nyhet hittad',       'nyheter-textdomain' ),
            'not_found_in_trash' => __( 'Ingen nyhet hittad i papperskorgen','nyheter-textdomain' ),
            'all_items'          => __( 'Alla nyheter',                'nyheter-textdomain' ),
        )
    );

    /* Register the post type. */
    register_post_type(
        'nyheter', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $news      // Arguments for post type.
    );
}

add_action( 'init', 'nyheter_post_type' );

/* -----------------------------------
------- FAQ post type ---------- 
--------------------------------------*/

function faq_post_type() {
    $args = array(
        'public'              => true,
        'publicly_queryable'  => true,
        'exclude_from_search' => false,
        'show_in_nav_menus'   => true,
        'show_ui'             => true,
        'show_in_menu'        => true,
        'show_in_admin_bar'   => true,
        'menu_position'       => 5,
        'menu_icon'           => 'dashicons-format-status',
        'can_export'          => true,
        'delete_with_user'    => false,
        'hierarchical'        => false,
        'has_archive'         => 'faq',
        'query_var'           => 'faq',
        'capability_type'     => 'post',
        'map_meta_cap'        => true,
        'rewrite' => array(
      		'slug'                  => 'vanliga-fragor',
      		'with_front'            => false,
      		'pages'                 => true,
      		'feeds'                 => false,
      	),

        'supports' => array(

            'title',
            'editor',
            'author',
            'revisions',
        ),
        'taxonomies'            => array( 'faq_sort'),
        'labels' => array(
            'name'               => __( 'Vanliga frågor',                    			'faq-textdomain' ),
            'singular_name'      => __( 'Vanlig fråga',                  			'faq-textdomain' ),
            'menu_name'          => __( 'Vanliga frågor',                    			'faq-textdomain' ),
            'name_admin_bar'     => __( 'Vanliga frågor',                    			'faq-textdomain' ),
            'add_new'            => __( 'Lägg till ny fråga',               	    'faq-textdomain' ),
            'add_new_item'       => __( 'Lägg till ny fråga',    	    'faq-textdomain' ),
            'edit_item'          => __( 'Redigera fråga',        	    'faq-textdomain' ),
            'new_item'           => __( 'Ny fråga',             	    'faq-textdomain' ),
            'view_item'          => __( 'Se fråga',             			    'faq-textdomain' ),
            'search_items'       => __( 'Sök fråga',                			'faq-textdomain' ),
            'not_found'          => __( 'Ingen fråga hittad',      			'faq-textdomain' ),
            'not_found_in_trash' => __( 'Ingen fråga hittad i papperskorgen', 'faq-textdomain' ),
            'all_items'          => __( 'Alla frågor',                			'faq-textdomain' ),
        )
    );
    /* Register the post type. */
    register_post_type(
        'faq', // Post type name. Max of 20 characters. Uppercase and spaces not allowed.
        $args      // Arguments for post type.
    );
}

add_action( 'init', 'faq_post_type' );
 ?>