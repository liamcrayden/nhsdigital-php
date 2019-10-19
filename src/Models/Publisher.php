<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

Publisher Model

*/

namespace liamcrayden\NHSDigital\Models;

class Publisher extends Model
{
    /**
     * The ID of the publisher
     *
     * @property string PublisherID
     */

    /**
     * The name of the publisher.
     *
     * @property string PublisherName
     */

    /**
     * The absolute URL of the logo associated with this publisher.
     *
     * @property string LogoURL
     */

    /**
     * The absolute URL of the website associated with this publisher.
     *
     * @property string Website
     */

    /**
     * Get the properties of the object.  Indexed by constants
     *  [0] - Mandatory
     *  [1] - Type
     *  [2] - PHP type
     *  [3] - Is an Array
     *  [4] - Saves directly.
     *
     * @return array
     */
    public static function getProperties()
    {
        return [
            'PublisherID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'PublisherName' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'LogoURL' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'Website' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    /**
     * @return string
     */
    public function getPublisherID()
    {
        return $this->_data['PublisherID'];
    }

    /**
     * @return string
     */
    public function getPublisherName()
    {
        return $this->_data['PublisherName'];
    }

    /**
     * @return string
     */
    public function getLogoURL()
    {
        return $this->_data['LogoURL'];
    }

    /**
     * @return string
     */
    public function getWebsite()
    {
        return $this->_data['Website'];
    }

    /**
     * @param string $value
     *
     * @return Publisher
     */
    public function setPublisherID($value)
    {
        $this->propertyUpdated('PublisherID', $value);
        $this->_data['PublisherID'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return Publisher
     */
    public function setPublisherName($value)
    {
        $this->propertyUpdated('PublisherName', $value);
        $this->_data['PublisherName'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return Publisher
     */
    public function setLogoURL($value)
    {
        $this->propertyUpdated('LogoURL', $value);
        $this->_data['LogoURL'] = $value;

        return $this;
    }

    /**
     * @param string $value
     *
     * @return Publisher
     */
    public function setWebsite($value)
    {
        $this->propertyUpdated('Website', $value);
        $this->_data['Website'] = $value;

        return $this;
    }

    /**
     * @return bool Whether or not the save operation was successful
     */
    public function save()
    {
        throw new ReadOnlyObjectException();
    }


}
