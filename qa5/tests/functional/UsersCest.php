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

        $defaultSchema=[
            
        'id'=>'integer',
        'email'=>'string',
        'first_name'=>'string',
        'last_name'=>'string',
        'avatar'=>'string'
            
        ];

        $userData=[
            'name'=>$I->getFaker()->firstName,
            'job'=>$I->getFaker()->company

        ];
        $I->haveHttpHeader('Content-Type', 'application/json');
        $I->sendPost('/users',$userData);
        $I->seeResponseCodeIsSuccessful();
        $user_id = $I->grabResponse();
        $I->sendGet('/users', ['id'=>$user_id]);
        $I->seeResponseCodeIsSuccessful();
        $I->seeResponseMatchesJsonType($defaultSchema);
    }


}
