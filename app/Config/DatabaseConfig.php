<?php

namespace app\Config;
class DatabaseConfig
{
    protected $host = "localhost";
    protected $user = "root";
    protected $password = "";
    protected $database_name = "WebMod5";
    protected $port = 3306;
    
    // tambahkan getter jika perlu diakses dari kelas turunan
    public function getHost()
    {
        return $this->host;
    }

    public function getUser()
    {
        return $this->user;
    }

    public function getPassword()
    {
        return $this->password;
    }

    public function getDatabaseName()
    {
        return $this->database_name;
    }

    public function getPort()
    {
        return $this->port;
    }
}

