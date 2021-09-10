# CREATION TABLE CUSTOM :


## 1 créer le modèle dans "/class/" nom de modèle ex "Messages.php"

```php
    <?php
    namespace getgigwp;

    class Messages
    {
        // class "Messages" créée
        // ...
    }
```


## 2 créer un constructeur pour y appeler la class WP "$wpdb" afin de pouvoir utiliser les methodes permettant d'executer les requetes sql :

```php
    public function __construct()
    {
        global $wpdb;
        $this->database = $wpdb;
    }
```


## 3 créer la méthode "createTable pour insérer une nouvelle table dans la base de donnée :

```php
    public function createTable()
    {
        // requete pour insérer une table custom en db
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
        require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
        // STEP WP CUSTOMTABLE execution de la requête de création de la table
        // DOC WP CUSTOMTABLE dbDelta https://developer.wordpress.org/reference/functions/dbdelta/
        dbDelta($sql);
    }
```


## 4 créer la méthode "dropTable" pour supprimer la table de la base de donnée :

```php
    public function dropTable()
    {
        $sql = "DROP TABLE `messages`";
        // ICI on va directement interagir avec la BDD
        // Pour récupérer l'équivalent d'un objet pdo, mais façon WP on va aller dans le constructeur de notre CoreModel
        $this->database->query($sql);
    }
```


## 5 creation/destruction de la table à l'activation/désactivation du plugin :

- ajouter le "use" au fichier "Plugin.php" pour pouvoir y instancier le model :

```php
    use getgigwp\Messages;
```

- instancier le modèle de la table et utiliser ses methodes create/drop dans les fonctions activate/deactivate du plugin :

```php
    public function activate()
    {
        $model = new Message();
        $model->createTable();
    }
    public function deactivate()
    {
        $model = new Message();
        $model->dropTable();
    }
```
