<?php 

$GLOBALS['SETTINGS']['DATE_FORMAT'] = 'd F Y';
$GLOBALS['SETTINGS']['TIME_FORMAT'] = 'H:i:s';
$GLOBALS['SETTINGS']['DATETIME_FORMAT'] = 'd F Y H:i:s';
$GLOBALS['SETTINGS']['YEAR_MONTH_FORMAT'] = 'F Y';
$GLOBALS['SETTINGS']['MONTH_DAY_FORMAT'] = 'd F';
$GLOBALS['SETTINGS']['SHORT_DATE_FORMAT'] = 'd M Y';
$GLOBALS['SETTINGS']['SHORT_DATETIME_FORMAT'] = 'd M Y H:i:s';
$GLOBALS['SETTINGS']['FIRST_DAY_OF_WEEK'] = 1; # Pazartesi
$GLOBALS['SETTINGS']['DATE_INPUT_FORMATS'] = array(
    '%d/%m/%Y', '%d/%m/%y',     # '25/10/2006', '25/10/06'
    '%Y-%m-%d', '%y-%m-%d',     # '2006-10-25', '06-10-25'
    # '%d %B %Y', '%d %b. %Y',  # '25 Ekim 2006', '25 Eki. 2006'
);
$GLOBALS['SETTINGS']['TIME_INPUT_FORMATS'] = array(
    '%H:%M:%S', # '14:30:59'
    '%H:%M',    # '14:30'
);
$GLOBALS['SETTINGS']['DATETIME_INPUT_FORMATS'] = array(
    '%d/%m/%Y %H:%M:%S',    # '25/10/2006 14:30:59'
    '%d/%m/%Y %H:%M',       # '25/10/2006 14:30'
    '%d/%m/%Y',             # '25/10/2006'
    '%Y-%m-%d %H:%M:%S',    # '2006-10-25 14:30:59'
    '%Y-%m-%d %H:%M',       # '2006-10-25 14:30'
    '%Y-%m-%d',             # '2006-10-25'
);
$GLOBALS['SETTINGS']['DECIMAL_SEPARATOR'] = ',';
$GLOBALS['SETTINGS']['THOUSAND_SEPARATOR'] = '.';
$GLOBALS['SETTINGS']['NUMBER_GROUPING'] = 3;
