<?php

namespace Vickie\Database;

class Conn
{
    function __destruct()
    {
        $this->disconnect();
    }

    public function connect()
    {
        return mysqli_connect($_ENV['HOST'], $_ENV['USER'], $_ENV['PASSWORD'], $_ENV['DATABASE']);
    }

    private function disconnect()
    {
        mysqli_close($this->connect());
    }
}
