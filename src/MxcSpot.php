<?php
/**
 * @author lin <465382251@qq.com>
 * */

namespace Lin\Mxc;


use Lin\Mxc\Api\Contract\Account;
use Lin\Mxc\Api\Spot\Wallet;
use Lin\Mxc\Api\Spot\Market;
use Lin\Mxc\Api\Spot\Orders;
use Lin\Mxc\Api\Spot\Common;

class MxcSpot
{
    protected $key;
    protected $secret;
    protected $passphrase;
    protected $host;

    protected $options=[];

    function __construct(string $key='',string $secret='',string $host='https://www.mexc.com'){
        $this->key=$key;
        $this->secret=$secret;
        $this->host=$host;
    }

    /**
     *
     * */
    private function init(){
        return [
            'key'=>$this->key,
            'secret'=>$this->secret,
            'passphrase'=>$this->passphrase,
            'host'=>$this->host,
            'options'=>$this->options,

            'platform'=>'spot',
            'version'=>'v1',
        ];
    }

    /**
     *
     * */
    function setOptions(array $options=[]){
        $this->options=$options;
    }

    /**
     *
     * */
    function clearOption(string $name){
        if (isset($this->options[$name]))
            unset($this->options[$name]);
    }

    /**
     *
     * */
    public function account(){
        return  new Account($this->init());
    }

    /**
     *
     * */
    public function wallet(){
        return  new Wallet($this->init());
    }

    /**
     *
     * */
    public function common(){
        return  new Common($this->init());
    }

    /**
     *
     * */
    public function market(){
        return  new Market($this->init());
    }

    /**
     *
     * */
    public function order(){
        return  new Orders($this->init());
    }
}
