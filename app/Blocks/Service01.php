<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Service01 extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Service01';

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
            'logo' => get_field('logo'),
            'subtitle' => get_field('subtitle'),
            'content' => get_field('content'),
            'image' => get_field('image'),
            'sublink' => get_field('sublink'),
            'subtext' => get_field('subtext'),
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
        $service01 = new FieldsBuilder('service01');

        $service01
            ->addImage('logo')
            ->addText('subtitle')
            ->addWysiwyg('content')
            ->addImage('image')
            ->addText('subtext')
            ->addLink('sublink');

        return $service01->build();
    }

}
