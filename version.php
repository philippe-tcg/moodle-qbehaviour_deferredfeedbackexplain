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
 * Version information for the deferred feedback with explanation behaviour.
 *
 * @package   qbehaviour_deferredfeedbackexplain
 * @copyright 2014 Tim Hunt
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$plugin->version   = 2014110200;
$plugin->requires  = 2013101800;
$plugin->cron      = 0;
$plugin->component = 'qbehaviour_deferredfeedbackexplain';
$plugin->maturity  = MATURITY_BETA;
$plugin->release   = 'Version 0.9 for Moodle 2.6+';

$plugin->dependencies = array(
    'qbehaviour_deferredfeedback' => 2013110500
);
