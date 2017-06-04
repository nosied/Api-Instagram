<?php

namespace InstagramAPI\Response;

use InstagramAPI\AutoPropertyHandler;
use InstagramAPI\ResponseInterface;
use InstagramAPI\ResponseTrait;

class LocationFeedResponse extends AutoPropertyHandler implements ResponseInterface
{
    use ResponseTrait;

    public $media_count;
    public $num_results;
    public $auto_load_more_enabled;
    /**
     * @var Model\Item[]
     */
    public $items;
    /**
     * @var Model\Item[]
     */
    public $ranked_items;
    public $more_available;
    /**
     * @var string
     */
    public $next_max_id;
}
