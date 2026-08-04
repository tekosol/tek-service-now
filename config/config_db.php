<?php
class DB extends DBmysql {
   public $dbhost = '10.1.24.27';
   public $dbuser = 'root';
   public $dbpassword = 'YourRootPassword';
   public $dbdefault = 'glpi';
   public $use_utf8mb4 = true;
   public $allow_datetime = false;
   public $allow_signed_keys = false;
}
