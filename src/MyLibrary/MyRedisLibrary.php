<?php
/**
 * Created by PhpStorm.
 * User: gtesmer
 * Date: 2020-03-02
 * Time: 19:44
 */

namespace MyLibrary;


class MyRedisLibrary
{
    /**
     * @var \Redis
     */
    private $redis;

    /**
     * MyRedisCache constructor.
     */
    public function __construct()
    {
        $this->redis = new \Redis();
        $this->redis->connect('127.0.0.1', 6379);
    }

    public function save($key, $content)
    {
        $this->redis->set($key, $content);
    }

    public function getKey($key): string
    {
        return $this->redis->get($key);
    }
}