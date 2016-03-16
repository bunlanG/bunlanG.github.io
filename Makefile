all : index.html aboutme.html portfolio.html credits.html

index.html : index.php common.php
aboutme.html : aboutme.php common.php
portfolio.html : portfolio.php common.php
credits.html : credits.php common.php

%.html :
	php5 $< > $@
