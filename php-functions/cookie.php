<?php

setcookie( "cookie_test", "yes", time() + 60, "/");
setcookie( "cookie_test_1", "yes_1",0, "/");


print_r($_COOKIE)


?>