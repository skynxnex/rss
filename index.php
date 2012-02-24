<?php

include("htmltop.html");
include "functions.php";

getFeed("http://www.aftonbladet.se/sportbladet/rss.xml");

include("htmlbottom.html");