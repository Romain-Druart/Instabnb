<?php

namespace App\DTO;
use Symfony\Component\Validator\Constraints as Assert;
class Task
{
    /**
     * @Assert\NotBlank()
     */
    public $title;
    /**
     * @Assert\Length(max = 140)
     */
    public $content;
    /**
     * @Assert\PositiveOrZero()
     * @Assert\NotBlank()
     */
    public $price;
    public $submit;
}
