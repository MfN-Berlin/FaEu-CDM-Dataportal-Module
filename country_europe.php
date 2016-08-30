<?php
/**
 * Export to PHP Array plugin for PHPMyAdmin
 * @version 0.2b
 */

//
// Database "cdm_pesi_fauna_europaea"
//
/*
SELECT titleCache, iso3166_a2, definedtermbase_continent. *
FROM `definedtermbase`
JOIN definedtermbase_continent ON definedtermbase.id = definedtermbase_continent.DefinedTermBase_id
WHERE definedtermbase.DTYPE = "Country"
AND definedtermbase_continent.continents_id = '505'
ORDER BY  definedtermbase.titleCache;
 * 
SELECT titleCache, iso3166_a2, definedtermbase_continent. *
FROM `definedtermbase`
JOIN definedtermbase_continent ON definedtermbase.id = definedtermbase_continent.DefinedTermBase_id
WHERE 1
AND definedtermbase_continent.continents_id = '505'
AND titlecache like 'Canary%'
ORDER BY definedtermbase_continent.continents_id, definedtermbase.titleCache

*/

// cdm_pesi_fauna_europaea.definedtermbase
$definedtermbase = array(
  array('titleCache'=>'Aland Islands','iso3166_a2'=>'AX','DefinedTermBase_id'=>'753','continents_id'=>'505'),
  array('titleCache'=>'Albania, People\'s Socialist Republic of','iso3166_a2'=>'AL','DefinedTermBase_id'=>'752','continents_id'=>'505'),
  array('titleCache'=>'Andorra, Principality of','iso3166_a2'=>'AD','DefinedTermBase_id'=>'749','continents_id'=>'505'),
  array('titleCache'=>'Austria, Republic of','iso3166_a2'=>'AT','DefinedTermBase_id'=>'740','continents_id'=>'505'),
  array('titleCache'=>'Belarus','iso3166_a2'=>'BY','DefinedTermBase_id'=>'734','continents_id'=>'505'),
  array('titleCache'=>'Belgium, Kingdom of','iso3166_a2'=>'BE','DefinedTermBase_id'=>'733','continents_id'=>'505'),
  //array('titleCache'=>'Bosnia and Herzegovina','iso3166_a2'=>'BA','DefinedTermBase_id'=>'726','continents_id'=>'505'),
  array('titleCache'=>'Bosnia-Herzegovina','iso3166_a2'=>'BA','DefinedTermBase_id'=>'726','continents_id'=>'505'),
  array('titleCache'=>'Bulgaria, People\'s Republic of','iso3166_a2'=>'BG','DefinedTermBase_id'=>'719','continents_id'=>'505'),
  array('titleCache'=>'Czech Republic','iso3166_a2'=>'CZ','DefinedTermBase_id'=>'695','continents_id'=>'505'),
  array('titleCache'=>'Denmark, Kingdom of','iso3166_a2'=>'DK','DefinedTermBase_id'=>'694','continents_id'=>'505'),
  array('titleCache'=>'Estonia','iso3166_a2'=>'EE','DefinedTermBase_id'=>'685','continents_id'=>'505'),
  array('titleCache'=>'Faeroe Islands','iso3166_a2'=>'FO','DefinedTermBase_id'=>'683','continents_id'=>'505'),
  array('titleCache'=>'Finland, Republic of','iso3166_a2'=>'FI','DefinedTermBase_id'=>'680','continents_id'=>'505'),
  array('titleCache'=>'France, French Republic','iso3166_a2'=>'FR','DefinedTermBase_id'=>'679','continents_id'=>'505'),
  array('titleCache'=>'Germany','iso3166_a2'=>'DE','DefinedTermBase_id'=>'672','continents_id'=>'505'),
  array('titleCache'=>'Gibraltar','iso3166_a2'=>'GI','DefinedTermBase_id'=>'670','continents_id'=>'505'),
  array('titleCache'=>'Greece, Hellenic Republic','iso3166_a2'=>'GR','DefinedTermBase_id'=>'669','continents_id'=>'505'),
  array('titleCache'=>'Guernsey','iso3166_a2'=>'GG','DefinedTermBase_id'=>'663','continents_id'=>'505'),
  //array('titleCache'=>'Holy See (Vatican City State)','iso3166_a2'=>'VA','DefinedTermBase_id'=>'657','continents_id'=>'505'),
  array('titleCache'=>'Vatican City','iso3166_a2'=>'VA','DefinedTermBase_id'=>'657','continents_id'=>'505'),
  //array('titleCache'=>'Hrvatska (Croatia)','iso3166_a2'=>'HR','DefinedTermBase_id'=>'654','continents_id'=>'505'),
  array('titleCache'=>'Croatia','iso3166_a2'=>'HR','DefinedTermBase_id'=>'654','continents_id'=>'505'),
  array('titleCache'=>'Hungary','iso3166_a2'=>'HU','DefinedTermBase_id'=>'653','continents_id'=>'505'),
  array('titleCache'=>'Iceland, Republic of','iso3166_a2'=>'IS','DefinedTermBase_id'=>'652','continents_id'=>'505'),
  array('titleCache'=>'Ireland','iso3166_a2'=>'IE','DefinedTermBase_id'=>'647','continents_id'=>'505'),
  array('titleCache'=>'Isle of Man','iso3166_a2'=>'IM','DefinedTermBase_id'=>'645','continents_id'=>'505'),
  array('titleCache'=>'Italy, Italian Republic','iso3166_a2'=>'IT','DefinedTermBase_id'=>'644','continents_id'=>'505'),
  array('titleCache'=>'Jersey','iso3166_a2'=>'JE','DefinedTermBase_id'=>'641','continents_id'=>'505'),
  array('titleCache'=>'Latvia','iso3166_a2'=>'LV','DefinedTermBase_id'=>'631','continents_id'=>'505'),
  array('titleCache'=>'Liechtenstein, Principality of','iso3166_a2'=>'LI','DefinedTermBase_id'=>'626','continents_id'=>'505'),
  array('titleCache'=>'Lithuania','iso3166_a2'=>'LT','DefinedTermBase_id'=>'625','continents_id'=>'505'),
  array('titleCache'=>'Luxembourg, Grand Duchy of','iso3166_a2'=>'LU','DefinedTermBase_id'=>'624','continents_id'=>'505'),
  array('titleCache'=>'Macedonia, the former Yugoslav Republic of','iso3166_a2'=>'MK','DefinedTermBase_id'=>'622','continents_id'=>'505'),
  array('titleCache'=>'Malta, Republic of','iso3166_a2'=>'MT','DefinedTermBase_id'=>'616','continents_id'=>'505'),
  array('titleCache'=>'Moldova','iso3166_a2'=>'MD','DefinedTermBase_id'=>'608','continents_id'=>'505'),
  array('titleCache'=>'Monaco, Principality of','iso3166_a2'=>'MC','DefinedTermBase_id'=>'607','continents_id'=>'505'),
  array('titleCache'=>'Montenegro','iso3166_a2'=>'ME','DefinedTermBase_id'=>'605','continents_id'=>'505'),
  array('titleCache'=>'Netherlands, Kingdom of the','iso3166_a2'=>'NL','DefinedTermBase_id'=>'597','continents_id'=>'505'),
  array('titleCache'=>'Norway, Kingdom of','iso3166_a2'=>'NO','DefinedTermBase_id'=>'588','continents_id'=>'505'),
  array('titleCache'=>'Poland, Polish People\'s Republic','iso3166_a2'=>'PL','DefinedTermBase_id'=>'577','continents_id'=>'505'),
  array('titleCache'=>'Portugal, Portuguese Republic','iso3166_a2'=>'PT','DefinedTermBase_id'=>'576','continents_id'=>'505'),
  array('titleCache'=>'Romania, Socialist Republic of','iso3166_a2'=>'RO','DefinedTermBase_id'=>'572','continents_id'=>'505'),
  array('titleCache'=>'Russian Federation','iso3166_a2'=>'RU','DefinedTermBase_id'=>'571','continents_id'=>'505'),
  array('titleCache'=>'San Marino, Republic of','iso3166_a2'=>'SM','DefinedTermBase_id'=>'561','continents_id'=>'505'),
  array('titleCache'=>'Serbia','iso3166_a2'=>'RS','DefinedTermBase_id'=>'557','continents_id'=>'505'),
  //array('titleCache'=>'Slovakia (Slovak Republic)','iso3166_a2'=>'SK','DefinedTermBase_id'=>'552','continents_id'=>'505'),
  array('titleCache'=>'Slovakia','iso3166_a2'=>'SK','DefinedTermBase_id'=>'552','continents_id'=>'505'),
  array('titleCache'=>'Slovenia','iso3166_a2'=>'SI','DefinedTermBase_id'=>'551','continents_id'=>'505'),
  array('titleCache'=>'Spain, Spanish State','iso3166_a2'=>'ES','DefinedTermBase_id'=>'545','continents_id'=>'505'),
  array('titleCache'=>'Svalbard & Jan Mayen Islands','iso3166_a2'=>'SJ','DefinedTermBase_id'=>'541','continents_id'=>'505'),
  array('titleCache'=>'Sweden, Kingdom of','iso3166_a2'=>'SE','DefinedTermBase_id'=>'539','continents_id'=>'505'),
  array('titleCache'=>'Switzerland, Swiss Confederation','iso3166_a2'=>'CH','DefinedTermBase_id'=>'538','continents_id'=>'505'),
//  array('titleCache'=>'Turkey, Republic of','iso3166_a2'=>'TR','DefinedTermBase_id'=>'526','continents_id'=>'505'),
  array('titleCache'=>'Ukraine','iso3166_a2'=>'UA','DefinedTermBase_id'=>'520','continents_id'=>'505'),
  //array('titleCache'=>'United Kingdom of Great Britain & N. Ireland','iso3166_a2'=>'GB','DefinedTermBase_id'=>'518','continents_id'=>'505')
  array('titleCache'=>'Great Britain','iso3166_a2'=>'GB','DefinedTermBase_id'=>'518','continents_id'=>'505')
);

$european_countries = array();
foreach ($definedtermbase as $row) {
    // take only the short country name, before the comma
    list($country, $country_extension) = explode(",", $row["titleCache"]);  
    $european_countries["$country"] =  "-no&nbsp;data-";
    //$european_countries["$country"] =  "<span class='no_data'>-no&nbsp;data-</span>";
}
