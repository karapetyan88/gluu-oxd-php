<?php

class Discovery extends Client
{
    private $discovery_url = null;

    /**
     * Discovery constructor.
     * @param $protacol='tcp', $ip='127.0.0.1', $port=8099
    **/
    public function __construct($protacol, $ip, $port)
    {
          parent::__construct($protacol, $ip, $port); // TODO: Change the autogenerated stub
    }

    /**
     * @return null
     */
    public function getDiscoveryUrl()
    {
        return $this->discovery_url;
    }

    /**
     * @param null $discovery_url
     */
    public function setDiscoveryUrl($discovery_url)
    {
        $this->discovery_url = $discovery_url;
    }


    public function setCommand(){
          $this->command = 'discovery';
    }
    public function setParams()
    {
          $this->params =  array( "aat_token"=>$this->getDiscoveryUrl() );
    }

}