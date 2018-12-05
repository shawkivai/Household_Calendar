<?php
$siteUrl = 'https://www.allrecipes.com/recipe/17481/simple-white-cake/';
$requestUrl = 'https://opengraph.io/api/1.1/site/' . urlencode($siteUrl);
 
// Make sure you include your free app_id here!  No CC required
$requestUrl = $requestUrl . '?app_id=5c012e4c45929a0b001664f1';
 
$siteInformationJSON = file_get_contents($requestUrl);
$siteInformation = json_decode($siteInformationJSON, true);

echo '<pre>';
print_r ($siteInformation);
echo '</pre>';
 
 print 'Title: ' . $siteInformation['hybridGraph']['title'] . '<br>';
 print 'Description: ' . $siteInformation['hybridGraph']['description'] . '<br>';
 print 'Logo URL: ' . $siteInformation['hybridGraph']['site_name'] ;