<?php
  $data = '[
    {"id" : "1", "name" : "CholdCroft", "email" : "dcroft0@hibu.com"},
    {"id" : "2", "name" : "Levi", "email" : "wlevi1@blogger.com"},
    {"id" : "3", "name" : "Axcell", "email" : "laxcellc@ebay.co.uk"}
    ]';

    echo $_GET["callback"]."(".$data.")";
?>
