<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class SplitContent extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'SplitContent';

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
            'align' => get_field('Content Alignment'),
            'title' => get_field('title'),
            'content' => get_field('content'),
            'image' => get_field('image'),
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
        $splitContent = new FieldsBuilder('split_content');

        $splitContent
            ->addSelect('Content Alignment', [
                'choices' => [
                    'order-0' => 'Right',
                    'order-1' => 'Left',
                ]
            ])
            ->addText('title')
            ->addTextarea('content')
            ->addImage('image');

        return $splitContent->build();
    }

}
