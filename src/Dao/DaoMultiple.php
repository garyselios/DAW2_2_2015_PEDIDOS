<?php

class DaoMultiple {

    public function transMultiple($sqlCommand, $parameters, $connection) {

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
    }
}
