<?php
/**
 * jUpgrade
 *
 * @version		$Id$
 * @package		MatWare
 * @subpackage	com_jupgrade
 * @copyright	Copyright 2006 - 2011 Matias Aguire. All rights reserved.
 * @license		GNU General Public License version 2 or later.
 * @author		Matias Aguirre <maguirre@matware.com.ar>
 * @link		http://www.matware.com.ar
 */

define('_JEXEC', 1);
define('JPATH_BASE', dirname(__FILE__));
define('DS', DIRECTORY_SEPARATOR);

require_once JPATH_BASE.'/defines.php';
require_once JPATH_LIBRARIES.'/joomla/methods.php';
require_once JPATH_LIBRARIES.'/joomla/factory.php';
require_once JPATH_LIBRARIES.'/joomla/import.php';
require_once JPATH_LIBRARIES.'/joomla/error/error.php';
require_once JPATH_LIBRARIES.'/joomla/base/object.php';
//require_once JPATH_ADMINISTRATOR.'/components/com_jupgrade/helpers/install.php';
//require_once JPATH_ADMINISTRATOR.'/components/com_jupgrade/helpers/configuration.php';

require_once JPATH_INSTALLATION.'/models/configuration.php';

require JPATH_ROOT.'/configuration.php';

$jconfig = new JConfig();

//print_r($jconfig);

$jconfig->db_type   = 'mysql';
$jconfig->db_host	= $jconfig->host;
$jconfig->db_user	= $jconfig->user;
$jconfig->db_pass	= $jconfig->password;
$jconfig->db_name	= $jconfig->db;
$jconfig->db_prefix	= "j16_";
$jconfig->site_name	= $jconfig->sitename;

//print_r($jconfig);

if (JInstallationModelConfiguration::_createConfiguration($jconfig) > 0) {
	echo 1;
}
else {
	echo 0;
}
