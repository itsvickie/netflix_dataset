<?php

namespace Vickie\Controllers;

use Vickie\Database\Conn;

class NetflixController extends Conn
{

    private function randomNumber()
    {
        $count = mysqli_query($this->connect(), "SELECT COUNT(*) AS count FROM netflix");
        $count = mysqli_fetch_assoc($count);

        $count = rand(1, $count['count']);

        return $count;
    }

    public function randomRegister()
    {
        $register = mysqli_query($this->connect(), "SELECT type, title, director, cast1 AS cast, country, date_added, release_year, rating, duration, listed_in, description FROM netflix WHERE id = " . $this->randomNumber());

        $register = mysqli_fetch_assoc($register);

        return $register;
    }
}
