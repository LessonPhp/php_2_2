<?php

namespace App;


class Db
{
    protected $dbh;

    public function __construct()
    {

        $config = new \App\Config();
        $this->dbh = new \PDO(
            'mysql:host='. $config->data['db']['host'] . ';dbname=' . $config->data['db']['dbname'],
            $config->data['db']['user'],
            $config->data['db']['password']);
    }


    public function query($sql, $data=[], $class)
    {
        $sth = $this->dbh->prepare($sql);
        $sth->execute($data);
        return $sth->fetchAll(\PDO::FETCH_CLASS, $class);

    }

    public function execute($query, $params=[])
    {
        $sth = $this->dbh->prepare($query);
        if(true == $sth->execute($params)) {
            return true;
        } else {
            return false;
        }
    }

    public function getLastId()
    {
        return $this->dbh->lastInsertId();
    }
}