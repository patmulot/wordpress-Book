<?php
namespace wordpressBook;
use wordpressBook\Messages;
//? ===================================== //
//? === USING ACF TO REST API PLUGIN === //
//? =================================== //
class Plugin
{
    public function __construct()
    {
        add_action(
            'init',
            [$this, 'createPostCustomPostType']
        );
        // add_action(
        //     'init',
        //     [$this, 'createMessagesCustomPostType']
        // );
        // add_action(
        //     'init',
        //     [$this, 'createIngredientCustomTaxonomie']
        // );
        // add_action(
        //     'init',
        //     [$this, 'createReceipeTypeCustomTaxonomie']
        // );
    }
    public function activate()
    {
        $model = new Messages();
        $model->createTable();
    }
    public function deactivate()
    {
        $model = new Messages();
        $model->dropTable();
    }
    public function createPostCustomPostType()
    {
        register_post_type(
            'publication',
            [
                'labels' => [
                    'name' => 'Publications',
                    'singular_name' => 'Publication',
                    'add_new' => 'Créer une nouvelle publication',
                    'not_found' => 'aucune publication trouvée',
                    'edit_item' => 'Modifier la publication',
                ],
                'public' => true,

                // Je veux que mes recettes apparaissent dans l'API fournie par WP
                'show_in_rest' => true, //! (http://...apres "public")/wp-json/wp/v2/receipe
            
                'hierarchical' => false,
                'menu_icon' => 'dashicons-hammer',
                'supports' => [
                    'title',
                    'thumbnail', //! add_theme_support( 'post-thumbnails' ); dans themes/includes/theme-config.php
                    // Please note in the ‘thumbnail’ value you can also use ‘attachment:audio’ and ‘attachment:video’ .
                    'editor',
                    'comments',
                    // 'revisions',
                    // 'trackbacks',
                    'author',
                    'excerpt',
                    // 'page-attributes',
                    // 'custom-fields',
                    // 'post-formats'
                ]
            ]
        );
    }
    // public function createMessagesCustomPostType()
    // {
    //     register_post_type(
    //         'messaging',
    //         [
    //             'labels' => [
    //                 'name' => 'messages',
    //                 'singular_name' => 'message',
    //                 'add_new' => 'envoyer un nouveau message',
    //                 'not_found' => 'aucune aucun message trouvé',
    //                 'edit_item' => 'Modifier le message',
    //             ],
    //             'public' => true,

    //             // Je veux que mes recettes apparaissent dans l'API fournie par WP
    //             'show_in_rest' => true, //! (http://...apres "public")/wp-json/wp/v2/receipe
            
    //             'hierarchical' => false,
    //             'menu_icon' => 'dashicons-hammer',
    //             'supports' => [
    //                 'title',
    //                 // 'thumbnail', //! add_theme_support( 'post-thumbnails' ); dans themes/includes/theme-config.php
    //                 // Please note in the ‘thumbnail’ value you can also use ‘attachment:audio’ and ‘attachment:video’ .
    //                 'editor',
    //                 // 'comments',
    //                 // 'revisions',
    //                 // 'trackbacks',
    //                 'author',
    //                 // 'excerpt',
    //                 // 'page-attributes',
    //                 'custom-fields',
    //                 // 'post-formats'
    //             ]
    //         ]
    //     );
    // }
    // public function createIngredientCustomTaxonomie()
    // {
    //     register_taxonomy(
    //         'ingredient',
    //         ['receipe'],
    //         // tableau d'options
    //         [
    //             'label'         => 'Ingrédient',
    //             'hierarchical'  => false,
    //             'public'        => true,
    //             'show_in_rest'  => true,

    //         ]
    //     );
    // }
    // public function createReceipeTypeCustomTaxonomie()
    // {
    //     register_taxonomy(
    //         'receipe-type',
    //         ['receipe'],
    //         [
    //             'label'         => 'Type de recette',
    //             'hierarchical'  => true,
    //             'public'        => true,
    //             'show_in_rest'  => true,
    //         ]
    //     );
    // }
}