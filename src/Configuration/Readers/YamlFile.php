<?php

/**
 * This file is part of the ApiGen (http://apigen.org)
 *
 * For the full copyright and license information, please view
 * the file LICENSE that was distributed with this source code.
 */

namespace ApiGen\Configuration\Readers;

use Symfony\Component\Yaml\Yaml;

class YamlFile extends AbstractFile implements ReaderInterface
{

    /**
     * {@inheritdoc}
     */
    public function read()
    {
        return Yaml::parse(file_get_contents($this->path));
    }
}
