<?php

DEFINE("DB_HOST","127.0.0.1");
DEFINE("DB_USERNAME","root");
DEFINE("DB_PASSWORD", "");
DEFINE("DB_NAME", "epuns");



$conn = mysqli_connect(DB_HOST, DB_USERNAME, DB_PASSWORD, DB_NAME);
