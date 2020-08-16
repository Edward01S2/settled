<?php

namespace App\Fields;

use Log1x\AcfComposer\Field;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Gallery extends Field
{
    /**
     * The field group.
     *
     * @return array
     */
    public function fields()
    {
        $gallery = new FieldsBuilder('gallery');

        $gallery
            ->setLocation('post_type', '==', 'gallery');

        $gallery
            ->addText('work title')
            ->addTextarea('content')
            ->addGallery('images');

        return $gallery->build();
    }
}
