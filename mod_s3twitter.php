<?php

/*======================================================================*\
|| #################################################################### ||
|| # Copyright (C) 2010  shaz3e.com. All Rights Reserved.               ||
|| # Authors - Shahrukh A. Khan (Shaz3e) and DiligentCreators           ||
|| # license - PHP files are licensed under  GNU/GPL V2                 ||
|| # license - CSS  - JS - IMAGE files  are Copyrighted material        ||
|| # bound by Proprietary License of shaz3e.com                         ||
|| # for more information visit http://www.shaz3e.com/                  ||
|| # Redistribution and  modification of this software                  ||
|| # is bounded by its licenses websites - http://www.shaz3e.com        ||
|| # A project of DiligentCreators - Construcing Ideas...               ||
|| #################################################################### ||
\*======================================================================*/

defined('_JEXEC') or die('Restriced Access');

$TwitterUsername = $params->get('TwitterUsername');
$TwitterAnchorText = $params->get('TwitterAnchorText');
$TargetLink = $params->get('TargetLink');

echo '<a href="http://www.twitter.com/'.$TwitterUsername.'" target="'.$TargetLink.'">'.$TwitterAnchorText.'</a>';
?>
