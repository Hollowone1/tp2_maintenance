<?php

interface Observer
{
    public function update(Subject $subject);
}

interface Subject
{
    public function attach(Observer $observer);
    public function detach(Observer $observer);
    public function notify();
}

class User implements Observer
{
    private $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function update(Subject $subject)
    {
        if ($subject instanceof MusicBand && $subject->hasAddedDate()) {
            echo $this->name . ' was notified that ' . $subject->getName() . ' added a date.' . PHP_EOL;
        }
    }

    public function getName(): string
    {
        return $this->name;
    }
}

class MusicBand implements Subject
{
    private $name;
    private $dates = [];
    private $observers = [];

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function attach(Observer $observer)
    {
        $this->observers[] = $observer;
    }

    public function detach(Observer $observer)
    {
        if (($key = array_search($observer, $this->observers, true)) !== false) {
            unset($this->observers[$key]);
        }
    }

    public function notify()
    {
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }

    public function addDate(string $date)
    {
        $this->dates[] = $date;
        $this->notify();
    }

    public function hasAddedDate(): bool
    {
        return !empty($this->dates);
    }

    public function getName(): string
    {
        return $this->name;
    }
}