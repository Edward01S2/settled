<?php

namespace App\Blocks;

use Log1x\AcfComposer\Block;
use StoutLogic\AcfBuilder\FieldsBuilder;

class Galleries extends Block
{
    /**
     * The block name.
     *
     * @var string
     */
    public $name = 'Galleries';

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
        $galleries = new FieldsBuilder('galleries');

        $galleries
            ->addText('content', [
                'default_value' => 'Gallery Block',
                'readonly' => 1,
            ]);

        return $galleries->build();
    }

    public function items() {
        $args = [
            'posts_per_page' => -1,
            'post_type' => 'gallery'
        ];

        $data = [];

        $wp_query = new \WP_Query($args);

        foreach($wp_query->posts as $post) {

            $data[] = [
                'title' => get_the_title($post->ID),
                'url' => get_the_permalink($post->ID),
                'image' => get_the_post_thumbnail_url($post->ID),
                'content' => get_field('content', $post->ID),
                // 'terms' => $terms,
            ];

        }

        return $data;
    }

}
