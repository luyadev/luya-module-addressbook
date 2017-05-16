<?php

namespace luya\addressbook\admin\controllers;

/**
 * Group Controller.
 * 
 * File has been created with `crud/create` command on LUYA version 1.0.0-RC3. 
 */
class GroupController extends \luya\admin\ngrest\base\Controller
{
    /**
     * @var string The path to the model which is the provider for the rules and fields.
     */
    public $modelClass = 'app\modules\addressbook\models\Group';
}