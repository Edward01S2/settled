<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Process extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Process';

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
            'title' => get_field('title'),
            'logo' => get_field('title logo'),
            'items' => $this->items(),
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
        $process = new FieldsBuilder('process');

        $process
            ->addText('title')
            ->addImage('title logo')
            ->addRepeater('items', [
                'collapsed' => 'title',
                'layout' => 'block'
            ])
                ->addText('title')
                ->addImage('image')
                ->addText('header')
                ->addTextarea('content')
                ->addImage('logo')
            ->endRepeater();

        return $process->build();
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
