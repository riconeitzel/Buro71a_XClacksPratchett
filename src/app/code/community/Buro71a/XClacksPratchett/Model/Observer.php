<?php

/**
 * This file is part of Buro71a_XClacksPratchett.
 *
 * This Buro 71a module is free software; you can redistribute it and/or
 * modify it under the terms of the GNU General Public License version 3 as
 * published by the Free Software Foundation.
 *
 * This script is distributed in the hope that it will be useful, but WITHOUT
 * ANY WARRANTY; without even the implied warranty of MERCHANTABILITY or FITNESS
 * FOR A PARTICULAR PURPOSE. See the GNU General Public License for more details.
 *
 * PHP version 5
 *
 * @category  Buro71a
 * @package   Buro71a_XClacksPratchett
 * @author    Rico Neitzel <info@buro71a.de>
 * @copyright Büro 71a, Neitzel und Klose GbR (http://buro71a.de/)
 * @license   http://opensource.org/licenses/gpl-3.0 GNU General Public License, version 3 (GPLv3)
 * @version   1.0.0
 * @since     1.0.0
 */


/**
 * This Class provides an Event Listener (Observer) that
 * sends an additional header in memoriam to Terry Pratchett.
 *
 * See http://www.gnuterrypratchett.com/ for more information.
 *
 * Class Buro71a_XClacksPratchett_Model_Observer
 */
class Buro71a_XClacksPratchett_Model_Observer
{
    public function sendPratchettHeaderOnHttpResponseSendBefore(Varien_Event_Observer $observer)
    {
        $observer->getResponse()->setHeader('X-Clacks-Overhead', 'GNU Terry Pratchett', true);
    }
}