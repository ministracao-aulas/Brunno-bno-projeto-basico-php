<?php

namespace Core\Contracts;

class Request
{
    protected array $post;
    protected array $get;
    protected array $request;
    protected array $server;
    protected array $all;
    protected array $headers = [];

    public function __construct(array $values = [])
    {
        $this->post     = $_POST    ?? [];
        $this->get      = $_GET     ?? [];
        $this->request  = $_REQUEST ?? [];
        $this->all      = $this->post + $this->get + $this->request + $values + [];
        $this->server   = $_SERVER  ?? [];
    }

    /**
     * function methodIs
     *
     * @param string $type
     * @return
     */
    public function methodIs(string $type) :bool
    {
        return ($this->server['REQUEST_METHOD'] ?? null) == strtoupper($type);
    }

    /**
     * function isPost
     *
     * @return bool
     */
    public function isPost() :bool
    {
        return $this->methodIs('POST');
    }

    /**
     * function isGet
     *
     * @return bool
     */
    public function isGet() :bool
    {
        return $this->methodIs('GET');
    }

    /**
     * function post
     *
     * @param ...$items
     * @return
     */
    public function post(...$items)
    {
        if(!$this->isPost()) {
            return [];
        }

        if (!$items)
        {
            return $this->post;
        }

        return array_filter($this->post, function ($itemKey) use ($items) {
            return in_array($itemKey, $items);
        }, ARRAY_FILTER_USE_KEY);
    }

    /**
     * function get
     *
     * @param ...$items
     * @return
     */
    public function get(...$items)
    {
        if(!$this->isGet()) {
            return [];
        }

        if (!$items)
        {
            return $this->get;
        }

        return array_filter($this->get, function ($itemKey) use ($items) {
            return in_array($itemKey, $items);
        }, ARRAY_FILTER_USE_KEY);
    }
}
