<?php
/*

███╗   ██╗██╗  ██╗███████╗    ██████╗ ██╗ ██████╗ ██╗████████╗ █████╗ ██╗
████╗  ██║██║  ██║██╔════╝    ██╔══██╗██║██╔════╝ ██║╚══██╔══╝██╔══██╗██║
██╔██╗ ██║███████║███████╗    ██║  ██║██║██║  ███╗██║   ██║   ███████║██║
██║╚██╗██║██╔══██║╚════██║    ██║  ██║██║██║   ██║██║   ██║   ██╔══██║██║
██║ ╚████║██║  ██║███████║    ██████╔╝██║╚██████╔╝██║   ██║   ██║  ██║███████╗
╚═╝  ╚═══╝╚═╝  ╚═╝╚══════╝    ╚═════╝ ╚═╝ ╚═════╝ ╚═╝   ╚═╝   ╚═╝  ╚═╝╚══════╝

CommentStatus Model

*/

namespace liamcrayden\NHSDigital\Models;

use liamcrayden\NHSDigital\Exceptions\NotImplementedException;

class CommentStatus extends Model
{
    /**
     * The ID of the Comment
     *
     * @property string CommentID
     */

    /**
     * A timestamp representing when this comment was submitted by the publisher
     *
     * @property \DateTimeInterface CreatedOn
     */

    /**
     * A timestamp representing when this comment was last updated
     *
     * @property \DateTimeInterface LastUpdated
     */

    /**
     * The ID of the publisher
     *
     * @property string Status
     */

    /**
     * The ID of the publisher
     *
     * @property string ErrorCode
     */

    /**
     * The ID of the publisher
     *
     * @property string ErrorText
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
            'CommentID' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'CreatedOn' => [true, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'LastUpdated' => [true, self::PROPERTY_TYPE_TIMESTAMP, '\\DateTimeInterface', false, false],
            'Status' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
            'ErrorCode' => [false, self::PROPERTY_TYPE_STRING, null, false, false],
            'ErrorText' => [true, self::PROPERTY_TYPE_STRING, null, false, false],
        ];
    }

    /**
     * @return string
     */
    public function getCommentID()
    {
        return $this->_data['CommentID'];
    }

    /**
     * @return string
     */
    public function getCommentStatus()
    {
        return $this->_data['Status'];
    }

    /**
     * @return string
     */
    public function getErrorCode()
    {
        return $this->_data['ErrorCode'];
    }

    /**
     * @return string
     */
    public function getErrorText()
    {
        return $this->_data['ErrorText'];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getLastUpdated()
    {
        return $this->_data['LastUpdated'];
    }

    /**
     * @return \DateTimeInterface
     */
    public function getCreatedOn()
    {
        return $this->_data['CreatedOn'];
    }

    /**
     * @param string $value
     *
     * @return CommentStatus
     */
    public function setCommentID(string $value)
    {
        $this->propertyUpdated('CommentID', $value);
        $this->_data['CommentID'] = $value;
        return $this;
    }

    /**
     * @param DateTimeInterface $value
     *
     * @return CommentStatus
     */
    public function setCreatedOn(DateTimeInterface $value)
    {
        $this->propertyUpdated('CreatedOn', $value);
        $this->_data['CreatedOn'] = $value;
        return $this;
    }

    /**
     * @param DateTimeInterface $value
     *
     * @return CommentStatus
     */
    public function setLastUpdated(DateTimeInterface $value)
    {
        $this->propertyUpdated('LastUpdated', $value);
        $this->_data['LastUpdated'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return CommentStatus
     */
    public function setStatus(string $value)
    {
        $this->propertyUpdated('Status', $value);
        $this->_data['Status'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return CommentStatus
     */
    public function setErrorCode(string $value)
    {
        $this->propertyUpdated('ErrorCode', $value);
        $this->_data['ErrorCode'] = $value;
        return $this;
    }

    /**
     * @param string $value
     *
     * @return CommentStatus
     */
    public function setErrorText(string $value)
    {
        $this->propertyUpdated('ErrorText', $value);
        $this->_data['ErrorText'] = $value;
        return $this;
    }

    /**
     * @return bool Whether or not the save operation was successful
     */
    public function save()
    {
        throw new NotImplementedException();
        return false;
    }


}
