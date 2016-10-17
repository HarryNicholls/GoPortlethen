<?php
/**]
 * Created by PhpStorm.
 * User: 1405741
 * Date: 17/10/2016
 * Time: 14:54
 */

define('DB_server','eu-cdbr-azure-west-a.cloudapp.net');
define('DB_PASSWORD','da3cf16e');
define('DB_USERNAME','bd5082fe0b7b9d');
define('DB_DATABASE','1405741db');

$DB = mysqli_connect(DB_SERVER,
                    DB_USERNAME,
                    DB_PASSWORD,
                    DB_DATABASE);
