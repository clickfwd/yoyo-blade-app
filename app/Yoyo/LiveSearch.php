<?php

namespace App\Yoyo;

use Clickfwd\Yoyo\Component;

class LiveSearch extends Component
{
    public $q;

    protected $queryString = ['q'];

    protected $data;

    protected $results = [];

    public function mount()
    {
        $this->data = require __DIR__.'/../test-data.php';
    }

    protected function getResultsProperty()
    {
        $results = [];

        if ($this->q) {
            foreach ($this->data as $data) {
                if (strstr(strtolower($data['title']), $this->q)) {
                    $results[] = $data;
                }
            }
        }

        return $results;
    }
}
