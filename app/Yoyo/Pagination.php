<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class Pagination extends Component
{
    public $page = 1;

    public $pages;

    public $limit = 3;

    protected $data;

    protected $results = [];

    protected $queryString = ['page'];

    public function mount()
    {
        $this->data = require __DIR__.'/../test-data.php';

        return $this;
    }

    public function entries()
    {
        $results = array_chunk($this->data, $this->limit)[$this->page - 1] ?? [];

        return $results;
    }

    public function start()
    {
        return 1 + (($this->page - 1) * $this->limit);
    }

    public function end()
    {
        $end = $this->page * $this->limit;

        return $end > $this->total() ? $this->total() : $end;
    }

    public function total()
    {
        return count($this->data);
    }

    public function next()
    {
        return $this->page < $this->pages ? $this->page + 1 : false;
    }

    public function previous()
    {
        return $this->page > 1 ? $this->page - 1 : false;
    }

    public function render()
    {
        $this->pages = $pages = count(array_chunk($this->data, $this->limit));

        return $this->view('pagination', compact('pages'));
    }
}
