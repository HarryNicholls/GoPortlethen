<?php
/**]
 * Created by PhpStorm.
 * User: 1405741
 * Date: 17/10/2016
 * Time: 14:54
 */

define('DB_server','ap-cdbr-azure-east-c.cloudapp.net');
define('DB_PASSWORD','c07eda08');
define('DB_USERNAME','bf393f51d1c78f');
define('DB_DATABASE','DefaultMySQL');

$DB = mysqli_connect(DB_SERVER,
                    DB_USERNAME,
                    DB_PASSWORD,
                    DB_DATABASE);


Database=1405741db;Data Source=eu-cdbr-azure-west-a.cloudapp.net;User Id=bd5082fe0b7b9d;Password=da3cf16e