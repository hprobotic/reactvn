<?php

use Packages\WPML\AdminLanguages;
use Packages\WPML\Config;
use Packages\WPML\CustomLink;
use Packages\WPML\TaxonomyLanguage;
    
new AdminLanguages();
new Packages\WPML\Languages();
new Config();
new CustomLink();
new Packages\WPML\PostTypeLanguages();
new TaxonomyLanguage();