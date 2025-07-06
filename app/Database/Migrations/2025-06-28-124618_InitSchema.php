<?php

namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class InitSchema extends Migration
{
    public function up()
    {
		$this->db->query("
			CREATE TABLE IF NOT EXISTS USERS (
				ID INTEGER PRIMARY KEY AUTOINCREMENT,
				NAME VARCHAR(200) NOT NULL,
				EMAIL VARCHAR(200) NOT NULL UNIQUE,
				PASSWORD VARCHAR(100) NOT NULL,
				CREATED_AT DATETIME NOT NULL,
				UPDATED_AT DATETIME NOT NULL
			)
		");

		$this->db->query("
				CREATE TABLE IF NOT EXISTS `CI_SESSIONS` (
				`ID` VARCHAR(128) NOT NULL,
				`IP_ADDRESS` VARCHAR(45) NOT NULL,
				`TIMESTAMP` DATETIME PRIMARY KEY DEFAULT CURRENT_TIMESTAMP NOT NULL,
				`DATA` BLOB NOT NULL 
				);
		");
    }

    public function down()
    {
        //
    }
}
