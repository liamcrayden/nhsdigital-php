<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

NHS Digital API Base
Base functions which other classes can extend when dealing with
API access via Subscription Keys.

*/

namespace liamcrayden\NHSDigital;

use liamcrayden\NHSDigital\Exceptions\InvalidSubscriptionKeyException;
use liamcrayden\NHSDigital\Exceptions\AccessDeniedException;
use liamcrayden\NHSDigital\Exceptions\ConnectionFailureException;
use liamcrayden\NHSDigital\Exceptions\ResourceNotFoundException;
use liamcrayden\NHSDigital\Exceptions\NotImplementedException;

use GuzzleHttp\Exception\TransferException;
use GuzzleHttp\Exception\ClientException;
use GuzzleHttp\Client;


class NHSDigital
{

    const ORG_TYPE_CHANGE_FOR_LIFE = 'C4L';
    const ORG_TYPE_CLINICAL_COMMISSIONING_GROUP = 'CCG';
    const ORG_TYPE_CLINIC = 'CLI';
    const ORG_TYPE_DENTIST = 'DEN';
    const ORG_TYPE_GENERAL_DIRECTORY_OF_SERVICES = 'GDOS';
    const ORG_TYPE_GP = 'GPB';
    const ORG_TYPE_GP_PRACTICE = 'GPP';
    const ORG_TYPE_GENERIC_SERVICE_DIRECTORY = 'GSD';
    const ORG_TYPE_HEALTH_AUTHORITY = 'HA';
    const ORG_TYPE_HOSPITAL = 'HOS';
    const ORG_TYPE_HEALTH_WELLBEING_BOARD = 'HWB';
    const ORG_TYPE_LOCAL_AUTHORITY = 'LA';
    const ORG_TYPE_LOCAL_AREA_TEAM = 'LAT';
    const ORG_TYPE_MINOR_INJURY_UNIT = 'MIU';
    const ORG_TYPE_OPTICIAN = 'OPT';
    const ORG_TYPE_PHARMACY = 'PHA';
    const ORG_TYPE_SOCIAL_CARE_LOCATION = 'SCL';
    const ORG_TYPE_SOCIAL_CARE_PROVIDER = 'SCP';
    const ORG_TYPE_STRATEGIC_HEALTH_AUTHORITY = 'SHA';
    const ORG_TYPE_TRUST = 'TRU';
    const ORG_TYPE_URGENT_CARE = 'UC';

    protected $baseURL = 'https://api.nhs.uk/';
    protected $subscriptionKey = '';
    protected $client;

    public function __construct( $subscriptionKey = '' )
    {
        if ( strlen( $subscriptionKey ) == 32 )
            $this->subscriptionKey = $subscriptionKey;

        $this->client = new Client([
            'base_uri' => $this->baseURL, 'timeout'  => 60,
        ]);
    }

    /**
     * Gets the subscription key that has been set.
     *
     * @return string
     */
    public function getSubscriptionKey() { return $this->subscriptionKey; }

    /**
     * Sets the subscription key used to communicate with the API.
     *
     * @param string $subscriptionKey
     * @return void
     * @throws InvalidSubscriptionKeyException If the subscription key is not a valid 32 character string
     */
    public function setSubscriptionKey( $subscriptionKey )
    {
        if ( strlen( $subscriptionKey ) == 32 ) {
            $this->subscriptionKey = $subscriptionKey;
        } else {
            throw new InvalidSubscriptionKeyException( $subscriptionKey );
        }
    }

}
