<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class DarkBoxes extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'DarkBoxes';

    /**
     * The block description.
     *
     * @var string
     */
    public $description = 'Lorem ipsum...';

    /**
     * The block category.
     *
     * @var string
     */
    public $category = 'custom';

    /**
     * The block icon.
     *
     * @var string|array
     */
    public $icon = 'screenoptions';

    /**
     * The block keywords.
     *
     * @var array
     */
    public $keywords = [];

    /**
     * The block post types.
     *
     * @var array
     */
    public $post_types = ['post', 'page'];

    /**
     * The default block mode.
     *
     * @var string
     */
    public $mode = 'edit';

    /**
     * The block alignment.
     *
     * @var string
     */
    public $align = 'wide';

    /**
     * The block features.
     *
     * @var array
     */
    public $supports = [
        '__experimental_jsx' => true,
    ];

    /**
     * Data to be passed to the block before rendering.
     *
     * @return array
     */
    public function with()
    {
        return [
            'show' => get_field('show'),
            'pre' => get_field('pretitle'),
            'items' => $this->items(),
            'count' => count(get_field('items')),
        ];
    }

    /**
     * Assets to be enqueued when rendering the block.
     *
     * @return void
     */
    public function enqueue()
    {
        //
    }

    /**
     * The block field group.
     *
     * @return array
     */
    public function fields()
    {
        $darkBoxes = new FieldsBuilder('dark_boxes');

        $darkBoxes
            ->addTrueFalse('show')
            ->addText('pretitle')
            ->addRepeater('items', [
                'layout' => 'block'
            ])
                ->addSelect('align', [
                    'choices' => [
                        'justify-start' => 'Left',
                        'justify-center' => 'Center',
                        'justify-end' => 'Right'
                    ],
                ])
                ->addImage('bg')
                ->addImage('logo')
                ->addText('title')
                ->addTextarea('content')
                ->addLink('link')
            ->endRepeater();

        return $darkBoxes->build();
    }

    /**
     * Return the items field.
     *
     * @return array
     */
    public function items()
    {
        return get_field('items') ?: [];
    }
}
