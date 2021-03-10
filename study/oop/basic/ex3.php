<?php
#3 Creating an instance

$instance = new SimpleClass(); // cũng có thể sử dụng new SimpleClass vẫn được

// This can also be done with a variable:
$className = 'SimpleClass';
$instance = new $className(); // new SimpleClass()