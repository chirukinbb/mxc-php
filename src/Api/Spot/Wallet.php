<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Mxc\Api\Spot;

use Lin\Mxc\Request;

class Wallet extends Request
{
    public function getCoins()
    {
        $this->host = 'https://api.mexc.com';
        $this->version = 'v3';
        $this->type='GET';
        $this->path='/api/v3/capital/config/getall';
        return $this->exec();
    }
}