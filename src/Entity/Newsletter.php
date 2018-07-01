<?php

namespace App\Entity;

use Doctrine\ORM\Mapping as ORM;
use JMS\Serializer\Annotation as Serializer;
use Sonata\UserBundle\Entity\BaseUser as BaseUser;

/**
 * @ORM\Entity(repositoryClass="App\Repository\News\PostRepository")
 * @ORM\Table(name="newsletter")
 * @Serializer\ExclusionPolicy("all")
 * @Serializer\XmlRoot(name="_newsletter")
 */
class Newsletter
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     * @Serializer\Groups({"sonata_api_read","sonata_api_write","sonata_search"})
     * @Serializer\Since(version="1.0")
     * @Serializer\Type(name="integer")
     * @Serializer\SerializedName("id")
     * @Serializer\XmlAttributeMap
     * @Serializer\Expose
     */
    protected $id;

    /**
     * @ORM\Column(type="string")
     */
    private $email;

    /**
     * @ORM\Column(type="integer")
     */
    private $enabled;

    /**
     * @ORM\Column(type="datetime")
     */
    private $created_at;


    public function __construct(string $email, bool $enabled = true)
    {
        $this->setEmail($email);
        $this->setEnabled($enabled);
    }

    /**
     * @return int|null
     */
    public function getId() :int
    {
        return $this->id;
    }

    public function setId(int $id) :void
    {
        $this->id = $id;
    }

    public function getEmail() :string
    {
        return $this->email;
    }

    public function setEmail(string $email) :void
    {
        $this->email = $email;
    }

    public function getEnabled() :bool
    {
        return $this->enabled == 1;
    }

    public function setEnabled(bool $enabled) :void
    {
        $this->enabled = $enabled;
    }

    public function getCreated() :\DateTime
    {
        return $this->created_at;
    }
}
