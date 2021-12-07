<?php
namespace Page\Acceptance;

class Search
{
    // include url of current page
    public static $URL = '';

    public static $searchSubmitButton='//*[@class="search-submit-button"]';
    public static function route($param)
    {
        return static::$URL.$param;
    }

    /**
     * @var \AcceptanceTester;
     */
    protected $acceptanceTester;

    public function __construct(\AcceptanceTester $I)
    {
        $this->acceptanceTester = $I;
    }

}
