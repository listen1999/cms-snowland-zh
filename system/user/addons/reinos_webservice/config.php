<?php
/**
 * @author		Rein de Vries <support@reinos.nl>
 * @link		https://addons.reinos.nl
 * @copyright 	Copyright (c) 2011 - 2021 Reinos.nl Internet Media
 * @license     https://addons.reinos.nl/commercial-license
 *
 * Copyright (c) 2011 - 2021 Reinos.nl Internet Media
 * All rights reserved.
 *
 * This source is commercial software. Use of this software requires a
 * site license for each domain it is used on. Use of this software or any
 * of its source code without express written permission in the form of
 * a purchased commercial or other license is prohibited.
 *
 * THIS CODE AND INFORMATION ARE PROVIDED "AS IS" WITHOUT WARRANTY OF ANY
 * KIND, EITHER EXPRESSED OR IMPLIED, INCLUDING BUT NOT LIMITED TO THE
 * IMPLIED WARRANTIES OF MERCHANTABILITY AND/OR FITNESS FOR A
 * PARTICULAR PURPOSE.
 *
 * As part of the license agreement for this software, all modifications
 * to this source must be submitted to the original author for review and
 * possible inclusion in future releases. No compensation will be provided
 * for patches, although where possible we will attribute each contribution
 * in file revision notes. Submitting such modifications constitutes
 * assignment of copyright to the original author (Rein de Vries and
 * Reinos.nl Internet Media) for such modifications. If you do not wish to assign
 * copyright to the original author, your license to  use and modify this
 * source is null and void. Use of this software constitutes your agreement
 * to this clause.
 */

//contants
if ( ! defined('REINOS_WEBSERVICE_TITLE'))
{
	define('REINOS_WEBSERVICE_TITLE', 'Webservice (by Reinos)');
	define('REINOS_WEBSERVICE_CLASS', 'Reinos_webservice');
    define('REINOS_WEBSERVICE_SERVICE_NAME', 'reinos_webservice'); //service name
    define('REINOS_WEBSERVICE_NAMESPACE_CLASS', 'Webservice'); //service namespace
	define('REINOS_WEBSERVICE_MAP', 'reinos_webservice');
	define('REINOS_WEBSERVICE_VERSION', '8.0.0');
	define('REINOS_WEBSERVICE_DESCRIPTION', 'Webservice (SOAP/XMLRPC/REST) for select, insert, update and delete entries (and many more)');
	define('REINOS_WEBSERVICE_DOCS', 'http://addons.reinos.nl/webservice');
	define('REINOS_WEBSERVICE_AUTHOR', 'Rein de Vries');
	define('REINOS_WEBSERVICE_AUTHOR_URL', 'http://addons.reinos.nl/');
    define('REINOS_WEBSERVICE_PHP_MIN_VERSION', '7.1');
    define('REINOS_WEBSERVICE_LICENSE_ENABLED', true);
}

//configs
$config['name'] = REINOS_WEBSERVICE_TITLE;
$config['version'] = REINOS_WEBSERVICE_VERSION;

//load compat file
require_once(PATH_THIRD.REINOS_WEBSERVICE_MAP.'/compat.php');
require_once PATH_THIRD.REINOS_WEBSERVICE_MAP.'/vendor/autoload.php';
