<?php  // Moodle configuration file

unset($CFG);
global $CFG;
$CFG = new stdClass();

$CFG->dbtype    = 'mysqli';
$CFG->dblibrary = 'native';
$CFG->dbhost    = 'localhost';
$CFG->dbname    = 'vfmoodle';
$CFG->dbuser    = 'root';
$CFG->dbpass    = 'root';
$CFG->prefix    = 'mdl_';
$CFG->dboptions = array (
  'dbpersist' => 0,
  'dbport' => 8889,
  'dbsocket' => '',
  'dbcollation' => 'utf8_general_ci',
);

$CFG->wwwroot   = 'http://192.168.1.154:8888/vfmoodle';
//$CFG->wwwroot   = 'http://localhost.192.168.1.94.xip.io:8888/vfmoodle';
//$CFG->wwwroot   = 'http://localhost:8888/vfmoodle';
//$CFG->wwwroot   = 'http://127.0.0.1:8888/vfmoodle';
$CFG->dataroot  = '/Applications/MAMP/moodledata';
$CFG->admin     = 'admin';

$CFG->directorypermissions = 0777;

require_once(__DIR__ . '/lib/setup.php');

// There is no php closing tag in this file,
// it is intentional because it prevents trailing whitespace problems!
