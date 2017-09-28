<?php
namespace mostertb\PHPSA2017Profiles;

use mostertb\PHPSA2017Profiles\Profiles\AbstractProfile;
use mostertb\PHPSA2017Profiles\Profiles\BradMostertProfile;
use mostertb\PHPSA2017Profiles\Profiles\JonathanBossengerProfile;

class Kernel
{
    /**
     * @var AbstractProfile[]
     */
    private $profiles;

    /**
     * Kernel constructor.
     */
    public function __construct()
    {
        $this->profiles = array(
            new BradMostertProfile(),
	        new JonathanBossengerProfile()
        );
    }

    /**
     * @return AbstractProfile[]
     */
    public function getProfiles()
    {
        return $this->profiles;
    }
}