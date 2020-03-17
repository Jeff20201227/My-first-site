<?php
 
$permitted_chars = '0123456789AaBbCcDdEeFfGgHhIiJjKkLlMmNnOoPpQqRrSsTtUuVvWwXxYyZz';

echo substr(str_shuffle($permitted_chars), 0, 10);
 