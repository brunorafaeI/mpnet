<?php
namespace app;
use \PDO;
use app\config;

class DataBase {
    /** Objet PDO d'accès à la BD */
    private static $bdd;

    /**
     * Fonction de connexion à la base
     * @return \PDO  On retourne l'objet $bdd à la fonction de requêtes
     */
    private static function getBdd()
    {
        try{
            if (!self::$bdd instanceof PDO):
                $dsn = "mysql:host="._DB_HOST_.";dbname="._DB_NAME_.";charset=utf8";

                self::$bdd = new PDO($dsn, _DB_USER_, _DB_PASS_,
                                     array(PDO::ATTR_ERRMODE=>PDO::ERRMODE_EXCEPTION)
                );
            endif;
        }
        catch(PDOException $e){
            throw new PDOException("Problem in getBdd() : ", $e->getMessage());

        }
        return self::$bdd;
    }

    /**
     * fonction de requetage de base de données
     * @param $sql
     * @param null $params
     * @return mixed
     */
    public function executeRequest($sql, $params = null)
    {

        if (!$params){
            try {
                $result= self::getBdd()->query($sql);
            } catch (RequestException $e) {
                echo 'There is an error: ' . $e->getTraceAsScript();
            }


        }
        else{
            try {
                $result= self::getBdd()->prepare($sql);
                $result->execute($params);
            } catch (PDOException $e) {
                echo 'There is an error : ' $e->getTraceAsScript();
            }

        }
        return $result;
    }

}
