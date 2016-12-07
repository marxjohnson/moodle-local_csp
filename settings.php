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
 * moodle-tool_csp settings.
 *
 * @package   tool_csp
 * @author    Suan Kan <suankan@catalyst-au.net>
 * @copyright Catalyst IT
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die;

if ($hassiteconfig) {
    $settings = new admin_settingpage('tool_csp', get_string('pluginname', 'tool_csp'));
    $ADMIN->add('tools', $settings);

    $choices = array (
        'none' => get_string('cspmonitoringmodenone', 'tool_csp'),
        'enabled' => get_string('cspmonitoringenabled', 'tool_csp'),
    );

    $settings->add(new admin_setting_configselect('tool_csp/activation', get_string('cspenable', 'tool_csp'),
        get_string('cspdescription', 'tool_csp'), 'none', $choices));
}


