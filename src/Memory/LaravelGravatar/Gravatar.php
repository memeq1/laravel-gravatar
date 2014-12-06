<?php
namespace Memory\LaravelGravatar;

class Gravatar extends \emberlabs\GravatarLib\Gravatar
{

    protected $config;

    public function __construct($config)
    {
        $this->config = $config;
        $this->setAvatarSize($this->config['LaravelGravatar::gravatar.avatarSize']);
        $this->setMaxRating($this->config['LaravelGravatar::gravatar.maxRating']);
        $this->enableSecureImages();
    }

    public function get($email)
    {
        $this->buildGravatarURL($email);
    }

} 