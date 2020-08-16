<?php

namespace App\View\Composers;

use Roots\Acorn\View\Composer;

class Gallery extends Composer
{
    /**
     * List of views served by this composer.
     *
     * @var array
     */
    protected static $views = [
        'partials.content-single-gallery',

    ];

    /**
     * Data to be passed to view before rendering, but after merging.
     *
     * @return array
     */
    public function override()
    {
        return [
            'links' => $this->getLinks(),
        ];
    }

    public function getLinks() {
      $curr = get_permalink();
      $prev = get_permalink(get_adjacent_post(false,'',false));
      $next = get_permalink(get_adjacent_post(false,'',true));

      $links = [];
      
      $links['prev'] = ($prev != $curr) ? $prev : false;
      $links['next'] = ($next != $curr) ? $next : false;

      return $links;

    }

    
}
