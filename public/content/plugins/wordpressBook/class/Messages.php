<?php
namespace wordpressBook;

class Messages
{
    public function __construct()
    {
        global $wpdb;
        $this->database = $wpdb;
    }
    public function createTable()
    {
        $sql = "
        CREATE TABLE `messages` (
            `id` bigint(24) unsigned NOT NULL AUTO_INCREMENT PRIMARY KEY,
            `sender_id` bigint(24) unsigned NOT NULL,
            `recipient_id` bigint(24) unsigned NOT NULL,
            `content` longtext NOT NULL,
            `created_at` datetime NOT NULL ON UPDATE CURRENT_TIMESTAMP,
            `updated_at` datetime NULL
            );
        ";
        require_once(ABSPATH . 'wp-admin/includes/upgrade.php');
        // DOC WP CUSTOMTABLE dbDelta https://developer.wordpress.org/reference/functions/dbdelta/
        dbDelta($sql);
    }
    public function dropTable()
    {
        $sql = "DROP TABLE `messages`";
        // ICI on va directement interagir avec la BDD
        // Pour récupérer l'équivalent d'un objet pdo, mais façon WP on va aller dans le constructeur de notre CoreModel
        $this->database->query($sql);
    }
    public function insert($content)
    // public function insert($senderId, $recipientId, $content)
    {
        // le tableau data stocke les données à insérer dans la table
        $data = [
            // db_column_name => $functionParameter
            // 'sender_id' => $senderId,
            // 'recipient_id' => $recipientId,
            'content' => $content,
            'created_at' => date('Y-m-d H:i:s')
        ];

        $this->database->insert(
            'messages', // table name
            $data
        );
    }
    // public function insert($senderId, $recipientId, $messageContent)
    // // public function insert()
    // {
    //     // // ========== V1 ====================================
    //     global $wpdb;
    //     $this->database = $wpdb;
    //     // // le tableau data stocke les données à insérer dans la table
    //     // $data = [
    //     //     'sender_id' => $senderId,
    //     //     'recipient_id' => $recipientId,
    //     //     'content' => $messageContent
    //     //     // 'created_at' => date('Y-m-d H:i:s')
    //     // ];
    //     // $this->database->insert(
    //     //     'messages',
    //     //     $data
    //     // );


    //     // // ========== V2 ====================================
    //     // $sql = "
    //     // INSERT INTO `messages`
    //     //     (`sender_id`,`recipient_id`,`content`)
    //     // VALUES (
    //     //     `1`,
    //     //     `2`,
    //     //     `test message test message`
    //     //     );
    //     // ";
    //     // dbDelta($sql);

    //     //  ================ v3 ==========================
    //     // global $wpdb;
    //     // $this->database = $wpdb;


    //     // // $sql = "
    //     // // INSERT INTO `messages` 
    //     // //     (`sender_id`,`recipient_id`,`content`)
    //     // // VALUES (
    //     // //     %d, %s, %s
    //     // //     )
    //     // // ";
 
    //     // $var1 = 10;
    //     // $var2 = 11;
    //     // $var3 = "test test";

    //     // $wpdb->query(
    //     //     $wpdb->prepare(
    //     //         "
    //     //     INSERT INTO `messages` 
    //     //    ( sender_id, recipient_id, content )
    //     //    VALUES ( %d, %d, %s )
    //     //    ",
    //     //         array(
    //     //          $var1,
    //     //          $var2,
    //     //          $var3,
    //     //       )
    //     //     )
        
        
    //     // // $wpdb->prepare($sql);
    //     // // $wpdb->prepare(

    //         //  ============================= v4 ===============
            
    //     $wpdb->query(
    //         $wpdb->prepare("
    //         INSERT INTO `messages` (`sender_id`, `recipient_id`, `content`, `created_at`, `updated_at`)
    //         VALUES ('1', '2', 'test', '0000-00-00 00:00:00', NULL);
    //         ")
    //     );
    // }
    // public function delete($id)
    // {
    //     $where = [
    //         'technology_id' => $id
    //         // 'id' => $id
    //     ];
        
    //     $this->database->delete(
    //         'developer_technology',
    //         $where
    //     );
    // }
    // public function update($id, $technologyId, $level)
    // {
    //     $data = [
    //         'technology_id' => $technologyId,
    //         'level' => $level,
    //         'updated_at' => date('Y-m-d H:i:s')
    //     ];

    //     $where = [
    //         'id' => $id
    //     ];

    //     $this->database->update(
    //         'developer_technology',
    //         $data,
    //         $where
    //     );
    // }
    // public function getTechnologiesByUserId($userId)
    // {
    //     // IMPORTANT pour faire des requetes préparÃés,
    //     //il faut passer les paramétre dans leur ordre d'apparition dans la requete.
    //     //Il faut utiliser la syntaxe sprintf pour spéifier le type des paramétre
    //     // https://www.php.net/manual/fr/function.sprintf.php
    //     /*
    //     %d : type entier
    //     %s : type string
    //     */

    //     $sql = "
    //         SELECT
    //             *
    //         FROM `developer_technology`
    //         WHERE
    //             `developer_id` = %d
    //     ";

    //     $rows = $this->executePreparedStatement(
    //         $sql,
    //         [
    //             $userId
    //         ]
    //     );

        

    //     //var_dump($rows);exit();

    //     $results = [];

    //     foreach ($rows as $values) {
    //         $technology = get_term($values->technology_id, 'technology');
    //         //var_dump($technology );
    //         $results[] = [
    //             'technology' => $technology,
    //             'level' => $values->level
    //         ];
    //     }
    //     //var_dump($results);exit();
    //     return $results;
    // }
}
