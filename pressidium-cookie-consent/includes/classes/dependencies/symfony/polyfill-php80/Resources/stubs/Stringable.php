<?php

/*
 * This file is part of the Symfony package.
 *
 * (c) Fabien Potencier <fabien@symfony.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

if (\PHP_VERSION_ID < 80000) {
    interface Pressidium_Cookie_Consent_Pressidium_Cookie_Consent_Stringable
    {
        /**
         * @return string
         */
        public function __toString();
    }
}
