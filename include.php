<?php
include 'greeting.php'; /* occurs warning */
#include_once 'greeting.php';
#require 'greeting.php'; /* occurs fatal error */
#require_once 'greeting.php';

echo welcome();
?>