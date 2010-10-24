<?php

/*
 * 
 * Directed Edge - REST PHP API
 * Set the following global variables and place this file in a dir with DirectedEdgeRest.php
 * 
 */

// Your Directed Edge user name
define('DE_USER', 'your_username');

// Your Directed Edge password
define('DE_PASSWORD', 'your_password');

// Base URL for making REST API requests
define('DE_BASE_URL', 'https://'.DE_USER.':'.DE_PASSWORD.'@webservices.directededge.com/api/v1/'.DE_USER.'/');