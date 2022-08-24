<?php
// This file is part of Moodle - https://moodle.org/
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
// along with Moodle.  If not, see <https://www.gnu.org/licenses/>.
//
// Source code by Michael Pound with some minor modifications.

/**
 * Form extension for greeting messages edit form.
 *
 * @package     local_greetings
 * @copyright   2022 Michael Pound <michael@brickfieldlabs.ie>
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

require_once($CFG->libdir . '/formslib.php');

class local_greetings_edit_form extends moodleform {

    /**
     * Define the form.
     */
    public function definition() {

        $mform = $this->_form;

        $mform->addElement('textarea', 'newmessage', get_string('editmessage', 'local_greetings'));
        $mform->setType('newmessage', PARAM_TEXT);
        $mform->setDefault('newmessage',  $this->_customdata['message']);

        $this->add_action_buttons(true); // Adds 'Save Changes' and 'Cancel' buttons.
    }
}
