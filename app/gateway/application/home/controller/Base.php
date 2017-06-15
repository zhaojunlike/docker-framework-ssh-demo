<?php
namespace app\home\controller;

use think\Controller;

/**
 * Created by IntelliJ IDEA.
 * User: zhaojunlike
 * Date: 6/4/2017
 * Time: 10:44 AM
 */
class Base extends Controller
{

    protected static $api_host = 'http://mvn:8080';
    protected static $api_suffix = '.action';
    protected static $api_ret_type = 'JSON';
    protected static $token = "4F39500149264DE474AA8FA4C67379D1";
    protected $ResourceUris = [
        'get_document' => '/Document_index',
        'get_picture' => '/Picture_list',
        'add_picture' => '/Picture_add',
        'del_picture' => '/Picture_del'
    ];

    protected function _initialize()
    {
        parent::_initialize(); // TODO: Change the autogenerated stub
        $this->assign('_seo', ['title' => 'YY妹子图', 'keywords' => '', 'description' => 'hello']);
    }

    //KEY
    protected function build_uri($uri)
    {
        return self::$api_host . $uri . self::$api_suffix;
    }
}