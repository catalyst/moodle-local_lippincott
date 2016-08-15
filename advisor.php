<?php
// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Redirect to Lippincott Advisor page.
 *
 * @package    local_lippincott
 * @author     Dan Marsden
 * @copyright  2016 Catalyst IT
 * @license    http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

require_once('../../config.php');
require_once($CFG->dirroot.'/local/lippincott/locallib.php');

require_login();

if (isguestuser()) { // If logged in as guest user.
    print_error('guestnotallowed', 'local_lippincott');
}

$config = get_config('local_lippincott');
$key = local_lippincott_getkey();
redirect($config->advisor.'?siteId='.$config->siteid.'&key='.$key);