<?php
namespace Page\Acceptance;

class Search
{
    // include url of current page
    public static $URL = '';

    public static $searchSubmitButton='/html/body/div[2]/form/div[2]/button';
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
