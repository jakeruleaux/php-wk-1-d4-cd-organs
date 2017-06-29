<?php

    class Cd
    {
        private $album;
        function __construct($album)
        {
            $this->album = $album;
        }
        function setAlbum($new_album)
        {
            $this->album = $new_album;
        }

        function getAlbum()
        {
            return $this->album;
        }

        function save()
        {
            array_push($_SESSION['list_of_cds'], $this);
        }

        static function getAll()
        {
            return $_SESSION['list_of_cds'];
        }
    }


 ?>
