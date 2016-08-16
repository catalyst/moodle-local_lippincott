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
 * Lippincott plugin.
 *
 * @package    local_lippincott
 * @author     Dan Marsden
 * @copyright  2016 Catalyst IT
 * @license http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('local_lippincott', get_string('pluginname', 'local_lippincott'));

    $settings->add(new admin_setting_configtext('local_lippincott/siteid',
        get_string('siteid', 'local_lippincott'), get_string('siteidconfig', 'local_lippincott'), '', PARAM_TEXT, 50));

    $settings->add(new admin_setting_configtext('local_lippincott/key',
        get_string('key', 'local_lippincott'), get_string('keyconfig', 'local_lippincott'), '', PARAM_TEXT, 50));

    $settings->add(new admin_setting_configtext('local_lippincott/procedures',
        get_string('proceduresurl', 'local_lippincott'), get_string('proceduresurlconfig', 'local_lippincott'), 'http://procedures.lww.com/lnp/trust.do', PARAM_URL));

    $settings->add(new admin_setting_configtext('local_lippincott/advisor',
        get_string('advisorurl', 'local_lippincott'), get_string('advisorurlconfig', 'local_lippincott'), 'http://advisor.lww.com/lna/trust.do', PARAM_URL));

    $ADMIN->add('localplugins', $settings);

}
