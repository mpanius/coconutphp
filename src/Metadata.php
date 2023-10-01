<?php

namespace Coconut;

class Metadata
{
    private $api;

    public function __construct($cli)
    {
        $this->api = $cli->api;
    }

    public function retrieve($jid)
    {
        return $this->api->request('GET', '/metadata/jobs/'.$jid);
    }
}
