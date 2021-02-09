<?php require_once('MysqliDb.php');

class Mysql{

    private $host = 'tbdwsvertutu.db.11563814.hostedresource.com';
    private $user = 'tbdwsvertutu';
    private $pass = 'Toolboxw3bs!t3vertu';
    private $database = 'tbdwsvertutu';
    

    public function saveToDb( $perm_id, $image_url , $recipient_email, $recipient_name, $sender_email, $sender_name, $image_type ){

        $mysql = new MysqliDb (
            $this->host,
            $this->user,
            $this->pass,
            $this->database
        );

        $data = array(
            'id' => '',
            'perm_id' => $perm_id,
            'image_url' => $image_url,
            'image_type' => $image_type,
            'recipient_name' => $recipient_name,
            'recipient_email' => $recipient_email,
            'sender_name' => $sender_name,
            'sender_email' => $sender_email,
            'timestamp' => time(),
        );

        if( $mysql->insert('toolart_records', $data) ){

            return 'Success!';

        } else {

            return $mysql->getLastError();

        }

    }

    public function get_data( $perm_id , $colName ){

        $mysql = new MysqliDb (
            $this->host,
            $this->user,
            $this->pass,
            $this->database
        );

        $mysql->where( 'perm_id', $perm_id );
        $record = $mysql->getOne( 'toolart_records' );

        return $record[ $colName ];

    }

}


?>