<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

CommentVisit Model

*/

namespace liamcrayden\NHSDigital\Models;

use liamcrayden\NHSDigital\Exceptions\NotImplementedException;

class CommentVisit extends Model
{
    /**
     * The month of the visit
     *
     * @property int month
     */

    /**
     * The year of the visit
     *
     * @property int year
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
            'Month' => [true, self::PROPERTY_TYPE_INT, null, false, false],
            'Year' => [true, self::PROPERTY_TYPE_INT, null, false, false],
        ];
    }

    /**
     * @return string
     */
    public function getMonth()
    {
        return $this->_data['Month'];
    }

    /**
     * @return string
     */
    public function getYear()
    {
        return $this->_data['Year'];
    }

    /**
     * @param string $value
     *
     * @return CommentVisit
     */
    public function setMonth($value)
    {
        $this->propertyUpdated('Month', (int) $value);
        $this->_data['Month'] = (int) $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return CommentVisit
     */
    public function setYear($value)
    {
        $this->propertyUpdated('Year', (int) $value);
        $this->_data['Year'] = (int) $value;
        return $this;
    }

    /**
     * @param DateTimeInterface $value
     *
     * @return CommentVisit
     */
    public function setDate(\DateTimeInterface $value)
    {
        $this->propertyUpdated('month', (int) $value->format('m'));
        $this->_data['month'] = (int) $value->format('m');
        $this->propertyUpdated('year', (int) $value->format('Y'));
        $this->_data['year'] = (int) $value->format('Y');
        return $this;
    }

    /**
     * @return bool Whether or not the save operation was successful
     */
    public function save()
    {
        throw new NotImplementedException();
    }

    public function __toString()
    {
        return json_encode( $this, JSON_NUMERIC_CHECK );
    }


}
