<?php
/**
 * @copyright Martinus.sk
 * @author Jan Sukenik
 * @since 13. 2. 2017
 */

namespace OAuthServer\Test\Fixture;

use Cake\TestSuite\Fixture\TestFixture;

class ScopesFixture extends TestFixture
{
    public $table = 'oauth_scopes';
    public $fields = [
        'id' => ['type' => 'string'],
        'description' => ['type' => 'string'],
        '_constraints' => [
            'primary' => ['type' => 'primary', 'columns' => ['id']]
        ]
    ];

    public $records = [
        ['id' => 'test', 'description' => '']
    ];
}
