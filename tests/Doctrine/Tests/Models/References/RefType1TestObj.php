<?php

namespace Doctrine\Tests\Models\References;

use Doctrine\ODM\PHPCR\Mapping\Annotations as PHPCRODM;

/**
 * @PHPCRODM\Document(alias="RefType1TestObj", referenceable="true")
 */
class RefType1TestObj
{
    /** @PHPCRODM\Id */
    public $id;
    /** @PHPCRODM\String */
    public $name;
}
