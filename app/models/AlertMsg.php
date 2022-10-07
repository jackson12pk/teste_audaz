<?php

namespace App\Models;

class AlertMsg {

    private string $type;
    private string $title;
    private string $msg;

    public function __toString(){
        return $this->sendAlertMsg();
    }

    /**
     * Get the value of type
     */
    public function getType(): string
    {
        return $this->type;
    }

    /**
     * Set the value of type
     */
    public function setType(string $type): self
    {
        $this->type = $type;

        return $this;
    }

    /**
     * Get the value of title
     */
    public function getTitle(): string
    {
        return $this->title;
    }

    /**
     * Set the value of title
     */
    public function setTitle(string $title): self
    {
        $this->title = $title;

        return $this;
    }

    /**
     * Get the value of msg
     */
    public function getMsg(): string
    {
        return $this->msg;
    }

    /**
     * Set the value of msg
     */
    public function setMsg(string $msg): self
    {
        $this->msg = $msg;

        return $this;
    }

    public function sendAlertMsg(){
        return "<div class='alert alert-{$this->getType()}' role='alert'>
                    <h4 class='alert-heading'>{$this->getTitle()}</h4>
                    <p>{$this->getMsg()}</p>
                </div>";
    }

    public function success(string $Title, string $Msg){
        $this->type = "success";
        $this->title = $Title;
        $this->msg = $Msg;
    }

    public function danger(string $Title, string $Msg){
        $this->type = "danger";
        $this->title = $Title;
        $this->msg = $Msg;
    }

    public function warning(string $Title, string $Msg){
        $this->type = "warning";
        $this->title = $Title;
        $this->msg = $Msg;
    }

    public function info(string $Title, string $Msg){
        $this->type = "info";
        $this->title = $Title;
        $this->msg = $Msg;
    }

}

?>