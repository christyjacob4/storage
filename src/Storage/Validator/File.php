<?php

namespace Utopia\Storage\Validator;

use Utopia\Validator;

class File extends Validator
{
    public function getDescription()
    {
        return 'File is not valid';
    }

    /**
     * NOT MUCH RIGHT NOW.
     *
     * TODO think what to do here, currently only used for parameter to be present in SDKs
     *
     * @param mixed $name
     *
     * @return bool
     */
    public function isValid($name)
    {
        return true;
    }
}
