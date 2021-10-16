<?php
namespace Wcs;

class Hello
{
    private string $talk = 'Hello World !';

    public function __toString()
    {
        return $this->talk;
    }


    public function getTalk(): string
    {
        return $this->talk;
    }

    public function setTalk(string $talk): void
    {
        $this->talk = $talk;
    }

}
