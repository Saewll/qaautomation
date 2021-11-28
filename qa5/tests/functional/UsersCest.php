<?php

use Helper\Functional;
use Helper\BaseHelper;

class UsersCest
{
    public static $response=[
        '_id'=>'string',
        'email'=>'string',
        'superhero'=>'boolean',
        'name'=>'string',
        'owner'=>'string'


    ];
    
    // tests
    public function createUser(FunctionalTester $I)
    {
        $userData=[
            'email'=>$I->getFaker()->mail,
            'name'=>$I->getFaker()->firstName,
            'owner'=>'admin',
            'job'=>$I->getFaker()->company

        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('/human',$userData);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseContainsJson(['status'=>'ok']);
        $I->sendGet('people',$userData)


    }


}
