<?php
/**
 * Created by PhpStorm.
 * User: orozc
 * Date: 8/13/2017
 * Time: 8:45 PM
 */

//namespace Domain;

namespace App\domain;
class Message
{
    protected $message;
    protected $timeDate;
    protected $sender;

    // getters and setters

    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    /**
     * @return mixed
     */
    public function getTimeDate()
    {
        return $this->timeDate;
    }

    /**
     * @param mixed $timeDate
     */
    public function setTimeDate($timeDate)
    {
        $this->timeDate = $timeDate;
    }
    public function getSender()
    {
        return $this->sender;
    }

    /**
     * @param mixed $sender
     */
    public function setSender($sender)
    {
        $this->sender = $sender;
    }
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * @param mixed $message
     */
    public function setMessage($message)
    {
        $this->message = $message;
    }

    public function __construct()
    {
    }
}