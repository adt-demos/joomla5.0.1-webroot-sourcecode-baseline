<?php

/**
 * Joomla! Content Management System
 *
 * @copyright  (C) 2017 Open Source Matters, Inc. <https://www.joomla.org>
 * @license    GNU General Public License version 2 or later; see LICENSE.txt
 */

namespace Joomla\CMS\Document\Feed;

// phpcs:disable PSR1.Files.SideEffects
\defined('_JEXEC') or die;
// phpcs:enable PSR1.Files.SideEffects

/**
 * Data object representing a feed enclosure
 *
 * @since  1.7.0
 */
class FeedEnclosure
{
    /**
     * URL enclosure element
     *
     * required
     *
     * @var    string
     * @since  1.7.0
     */
    public $url = '';

    /**
     * Length enclosure element
     *
     * required
     *
     * @var    string
     * @since  1.7.0
     */
    public $length = '';

    /**
     * Type enclosure element
     *
     * required
     *
     * @var    string
     * @since  1.7.0
     */
    public $type = '';
}
