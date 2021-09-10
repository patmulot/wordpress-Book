<?php
namespace wordpressBook;

use WP_REST_Request;
use wordpressBook\Messages;

class Api
{
    /**
     * @var string
     */
    protected $baseURI;
    public function __construct()
    {
        add_action('rest_api_init', [$this, 'initialize']);
    }
    public function initialize()
    {
        $this->baseURI = dirname($_SERVER['SCRIPT_NAME']);
        register_rest_route(
            'wordpressbook/v1',
            '/publication-save',
            [
                'methods' => 'post',
                'callback' => [$this, 'publicationSave']
            ]
        );
        $this->baseURI = dirname($_SERVER['SCRIPT_NAME']);
        register_rest_route(
            'wordpressbook/v1',
            '/message-save',
            [
                'methods' => 'post',
                'callback' => [$this, 'messageSave']
            ]
        );
    }
    public function messageSave(WP_REST_Request $request)
    {
        // recup des données du front via l'endpoint custom :
        $senderIdFromRequest = $request->get_param('senderId');
        $recipientIdFromRequest = $request->get_param('recipientId');
        $messageContentFromRequest = $request->get_param('messageContent');
        // instantiation de mon modèle message et appel de sa méthode insert où je renseigne bien les paramètres
        $messagesModel = new Messages();
        // $messages = $messagesModel->insert($senderIdFromRequest, $recipientIdFromRequest, $messageContentFromRequest);
        $messagesModel->insert($messageContentFromRequest);
        // $messagesModel->insert($senderIdFromRequest, $recipientIdFromRequest, $messageContentFromRequest);
        return [
            'success' => true,
            'sender_id' => 1,
            'recipient_id' => 2,
            'content' => $messageContentFromRequest,
            // 'user' => $user,
            // 'publication-id' => $publicationCreateResult
        ];
    }
    // public function messageSave(WP_REST_Request $request)
    // {
    //     global $wpdb;


    //     // $this->database = $wpdb;

    //     $senderIdFromRequest = $request->get_param('senderId');
    //     $recipientIdFromRequest = $request->get_param('recipientId');
    //     $messageContentFromRequest = $request->get_param('messageContent');
        
    //     // var_dump($request);
    //     // die();
    //     $senderIdFromRequest = 2;
    //     $recipientIdFromRequest = 2;
    //     $messageContentFromRequest = "test message content";

    //     $user = wp_get_current_user();

    //     // // $model = new Messages();
    //     // // $model->insert($senderIdFromRequest, $recipientIdFromRequest, $messageContentFromRequest);

    //     // $wpdb->query(
    //     //     $wpdb->prepare(
    //     //         "
    //     //     INSERT INTO `messages` (`sender_id`, `recipient_id`, `content`, `created_at`, `updated_at`)
    //     //     VALUES ('1', '2', 'test', '0000-00-00 00:00:00', NULL);
    //     //     ",
    //     //         array(
    //     //          $senderIdFromRequest,
    //     //          $recipientIdFromRequest,
    //     //          $messageContentFromRequest,
    //     //         )));

    //     // ============================================

    //     $tablename = $wpdb->prefix.'messages'; //!
    //     // $tablename = 'messages'; //!

    //    $wpdb->insert( $tablename, array(
    //        'sender_id' => $senderIdFromRequest, 
    //        'recipient_id' => $recipientIdFromRequest, 
    //        'content' => $messageContentFromRequest, 
    //        array( '%s', '%s', '%s') 
    //    ));
    //     // ============================================

    //     return [
    //         'success' => true,
    //         'sender_id' => $senderIdFromRequest,
    //         'recipient_id' => $recipientIdFromRequest,
    //         'content' => $messageContentFromRequest,
    //         'user' => $user->id,
    //         // 'publication-id' => $publicationCreateResult
    //     ];

    // }
    // public function messageSave(WP_REST_Request $request)
    // {
    //     global $wpdb;
    //     $this->database = $wpdb;

    //     $senderIdFromRequest = $request->get_param('senderId');
    //     $recipientIdFromRequest = $request->get_param('recipientId');
    //     $messageContentFromRequest = $request->get_param('messageContent');

    //     $user = wp_get_current_user();

    //     $messageData = array(
    //             'sender_id' => $senderIdFromRequest,
    //             'recipient_id' => $recipientIdFromRequest,
    //             'content' => $messageContentFromRequest,
    //         );
    //     // $messageCreateResult = wp_insert_post($messageData);
    //     $wpdb->insert('messages', $messageData);

    //     return [
    //         'success' => true,
    //         'sender_id' => 1,
    //         'recipient_id' => 2,
    //         'content' => "test",
    //         // 'user' => $user,
    //         // 'publication-id' => $publicationCreateResult
    //     ];
    //     // }
    //     // return [
    //     //     'success' => false,
    //     // ];
    // }
    public function publicationSave(WP_REST_Request $request)
    {
        $publicationContent = $request->get_param('content');
        $publicationFile = $request->get_param('files');
        // var_dump($publicationContent); die();
        // $thumbnail = $request->get_param('thumbnail');
        // $description = $request->get_param('description');
        // $ingredients = $request->get_param('ingredients');
        // $user = wp_get_current_user();
        //! nouvauté typecatsing pour convertir $user->role en tableau
        // if (
        //     in_array( 'chef', (array) $user->roles ) ||
        //     in_array( 'contributor', (array) $user->roles ) ||
        //     in_array( 'administrator', (array) $user->roles )
        // ) {


        $publicationData = array(
                // 'post_title' => $thumbnail,

                // 'post_content' => $publicationContent,

                'post_content' => $publicationContent,
                // 'post_title' => $publicationFile,
                'post_title' => $publicationFile,
                'post_status' => 'publish',
                'post_type' => 'publication',
            );
        $publicationCreateResult = wp_insert_post($publicationData);



        $getImageFile = 'https://pbs.twimg.com/media/EycodiDXEAAEsKx.jpg';

        $attach_id = wp_insert_attachment( $publicationData, $getImageFile, $publicationCreateResult );
        require_once( ABSPATH . 'wp-admin/includes/image.php' );

        $attach_data = wp_generate_attachment_metadata( $attach_id, $getImageFile );

        wp_update_attachment_metadata( $attach_id, $attach_data );

        set_post_thumbnail( $publicationCreateResult, $attach_id );

        $wp_filetype = wp_check_filetype( $getImageFile, null );

        $attachment_data = array(
            'post_mime_type' => $wp_filetype['type'],
            'post_title' => sanitize_file_name( $getImageFile ),
            'post_content' => '',
            'post_status' => 'inherit'
        );
        
        $attach_id = wp_insert_attachment( $attachment_data, $getImageFile, $publicationCreateResult );












        // $post_id = $publicationCreateResult;

        // //Just uploading photo or attachments
        // require_once(ABSPATH . "wp-admin" . '/includes/image.php');
        // require_once(ABSPATH . "wp-admin" . '/includes/file.php');
        // require_once(ABSPATH . "wp-admin" . '/includes/media.php');
                

        // $file_handler = 'file'; //Form attachment Field name.
        // $attach_id = media_handle_upload( $file_handler, $post_id );


        // //making it featured!
        // set_post_thumbnail($post_ID, $attach_id );
        // // or
        // // update_post_meta($post_id,'_thumbnail_id',$attach_id);









        
        // $uploaddir = wp_upload_dir();
        // $file = $_FILES["file"]["name"];
        // $uploadfile = $uploaddir['path'] . '/' . basename($file);

        // move_uploaded_file($file, $uploadfile);
        // $filename = basename($uploadfile);

        // $wp_filetype = wp_check_filetype(basename($filename), null);

        // $attachment = array(
        //     'post_mime_type' => $wp_filetype['type'],
        //     'post_title' => preg_replace('/\.[^.]+$/', '', $filename),
        //     'post_content' => '',
        //     'post_status' => 'inherit',
        //     // 'menu_order' => $_i + 1000
        // );
        // $attach_id = wp_insert_attachment($attachment, $uploadfile);
        // update_post_meta($publicationCreateResult, '_thumbnail_id', $attach_id);

        // set_post_thumbnail($publicationCreateResult, $attach_id);



        // $getImageFile = $publicationFile;
        // $wp_filetype = wp_check_filetype($getImageFile, null);

        // $publicationAttachmentData = array(
        //         'post_mime_type' => $wp_filetype['type'],
        //         'post_title' => sanitize_file_name($getImageFile),
        //         'post_content' => '',
        //         'post_status' => 'inherit'
        //     );

        // $attach_id = wp_insert_attachment($publicationAttachmentData, $getImageFile, $publicationCreateResult);
        // $attach_data = wp_generate_attachment_metadata($attach_id, $getImageFile);


        // update_post_meta( $publicationCreateResult,'image_url',$publicationFile);

        // set_post_thumbnail( $publicationCreateResult, $attach_id );


        
        // if(is_int($publicationCreateResult)) {
        // wp_set_post_terms(
        //     $publicationCreateResult,
        //     [$type],
        //     'receipe-type'
        // );
        // wp_set_post_terms(
        //     $publicationCreateResult,
        //     $ingredients,
        //     'ingredient'
        // );
        // }
        return [
                'success' => true,
                'title' => "test title",
                // 'type' => $type,
                'editor' => "coucou description",
                // 'editor' => $editor,
                'thumbnail' => $publicationFile,
                // 'user' => $user,
                // 'publication-id' => $publicationCreateResult
            ];
        // }
        // return [
        //     'success' => false,
        // ];
    }
}
