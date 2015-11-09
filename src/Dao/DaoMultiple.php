<?php

class DaoMultiple {

    public function transMultiple($sqlCommand, $parameters, $connection) {

        try {
            for ($i = 0; $i < count($sqlCommand); $i ++) {
                $comand = $connection->prepare($sqlCommand[$i]);
                if ($parameters != null) {
                    foreach ($parameters[$i] as $key => $value) {
                        $comand->bindValue($key, $value);
                    }
                }
                var_dump($comand);
                var_dump($parameters[$i]);
                $comand->execute();
            }
            return TRUE;
        } catch (PDOException $ex) {
            echo $ex->getMessage();
            if ($connection != null) {
                if ($connection->inTransaction()) {
                    $connection->rollBack();
                }
            }
            return false;
        }
    }
}
