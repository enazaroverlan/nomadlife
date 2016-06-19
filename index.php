<?php
/**
 * Created by PhpStorm.
 * User: �����
 * Date: 18.06.2016
 * Time: 17:03
 */


set_include_path(__DIR__);

require_once(get_include_path().'/lib/Routing.php');
require_once(get_include_path().'/defines/defines.php');
require_once(get_include_path().'/database/database.php');

include(get_include_path().'/views/header.php');
Routing::StartListeningRequest();
include(get_include_path().'/views/footer.php');
