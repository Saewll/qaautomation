<?php
namespace Page\Acceptance;

class AdvertData
{
    // include url of current page
    public static $URL = '';

    public static $AdvertButton='/html/body/div[1]/div[1]/header/nav/div[3]/a';
    public static $categoryAuto='//*[@id="change-section-select"]/option[1]';
    public static $subCategoryAuto='//*[@id="change-category-select"]/option[1]';
    public static $carModel="//*[@id='auto-car-mm-0']//option[@value='%d']";
    public static $carBody="//*[@data-alias='%s']";
    public static $carYear="//*[@id='year']";
    public static $carPrice="//*[@id='price-user']";
    public static $torg="//*[@title='Нет']";
    public static $carVolume="//*[@id='auto_car_volume']";
    public static $fuelType="//*[@id='auto-fuel-parameter']/span[%b]";
    public static $engineType="//*[@id='auto_car_transm-parameter']/span[%d]";
    public static $stepp="//*[@id='auto-run']";
    public static $colorSelector="body > div.site-container > div.site-container__primary > main > div > div.container.form-container > div > form > div.body-form > div.element-group.element-group-parameter-auto-color.element-group-with-label.element-group-xl.element-type-select > div > div > div > div > div.text";
    public static $color="//li[@data-value='%d']";
    public static $privod="//*[@id='car_dwheel-parameter']/span[%d]";
    public static $outside="//*[@name='auto_car_eq_outside[%d]']";
    public static $optics="//*[@name='auto_car_eq_optics[%d]']";
    public static $saloon="//*[@name='auto_car_eq_salon[%d]']";
    public static $media="//*[@name='auto_car_eq_media[%d]']";
    public static $options="//*[@name='auto_car_eq[%d]']";
    public static $extra="//*[@name='auto_misc[%d]']";
    public static $ship="//*[@id='delivery-%d']";
    public static $extraInfo="//*[@id='text']";
    public static $regionList="//*[@data-field='region_list']";
    public static $region="//*[@data-field='region_list']//li[1]";
    public static $cityList="//*[@data-field='region']";
    public static $city="//*[@data-field='region']//li[1]";
    public static $phone="//*[@id='advert-phones']/div/div/div[1]/input";
    public static $acceptPhone="//*[@id='advert-phones']/div/div/div[4]/button";
    public static $phoneCode="//*[@id='advert-phones']/div/div/div[5]/input";
    public static $comments="//*[@id='comments_allowed_for-2']";
    public static $acceptAdvert="body > div.site-container > div.site-container__primary > main > div > div.container.form-container > div > form > div.body-form > div.buttons > input.js-submit";


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
