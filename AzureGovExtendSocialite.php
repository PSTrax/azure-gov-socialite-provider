<?php

namespace SocialiteProviders\Azuregov;

use SocialiteProviders\Manager\SocialiteWasCalled;

class AzureGovExtendSocialite
{
    /**
     * Register the provider.
     *
     * @param \SocialiteProviders\Manager\SocialiteWasCalled $socialiteWasCalled
     */
    public function handle(SocialiteWasCalled $socialiteWasCalled)
    {
        $socialiteWasCalled->extendSocialite('azuregov', Provider::class);
    }
}
