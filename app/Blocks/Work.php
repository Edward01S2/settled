<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Work extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Work';

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
            'link' => get_field('link'),
            'galleries' => $this->galleries(),
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
        $work = new FieldsBuilder('work');

        $work
            ->addText('title')
            ->addLink('link')
            ->addRelationship('galleries', [
                'post_type' => ['gallery'],
            ]);

        return $work->build();
    }

    public function galleries() {
        $galleries = get_field('galleries');

        $data = [];

        foreach($galleries as $post) {

            $terms = get_the_terms($post->ID, 'class');

            $data[] = [
                'image' => get_the_post_thumbnail_url($post->ID),
                'url' => get_the_permalink($post->ID),
                'title' => get_field('work title', $post->ID),
                'terms' => [
                    'name' => $terms[0]->name,
                    'color' => get_field('Color', $terms[0]),
                ],

            ];
        };

        return $data;
    }

}
