<?php

/*
 * This file is part of the CIX package.
 *
 * (c) Roni Saha <roni.cse@gmail.com>
 *
 * This source file is subject to the MIT license that is bundled
 * with this source code in the file LICENSE.
 */

namespace Xiidea\l10n\POMO;

class CachedIntFileReader extends CachedFileReader
{
    function __construct($filename)
    {
        parent::__construct($filename);
    }
}