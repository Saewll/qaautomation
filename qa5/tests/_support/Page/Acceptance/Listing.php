<?php
namespace Page\Acceptance;

class Listing
{
    // include url of current page
    public static $URL = '';

    public static $searchButton='//*[@data-modal="search-form"]';
    public static $sortSelector='//*[@id="sort_by"]';
    public static $sortSelectorFromMin='//*[@id="sort_by"]/option[4]';
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
