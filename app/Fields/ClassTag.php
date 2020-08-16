<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class ClassTag extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $classTag = new FieldsBuilder('class_tag');

        $classTag
            ->setLocation('taxonomy', '==', 'class');

        $classTag
            ->addColorPicker('Color');

        return $classTag->build();
    }
}
