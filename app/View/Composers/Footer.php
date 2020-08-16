<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

use Log1x\Navi\Facades\Navi;

class Footer extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
      'partials.footer',
    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function with()
    {
        return [
          'logo' => get_field('Logo Alt', 'options'),
          'nav' => $this->navigation('footer_navigation'),
          'social' => get_field('Social', 'options'),
          'form_title' => get_field('form title', 'options'),
          'form' => get_field('gravity', 'options'),
          'content' => get_field('footer content', 'options'),
          'copyright' => get_field('copyright', 'options'),
          'privacy' => get_field('privacy', 'options'),
        ];
    }

    public function navigation($name)
    {
        if (Navi::build()->isEmpty()) {
            return;
        }
        
        return Navi::build($name)->toArray();
    }

}
