<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;


/**
* @ORM\Entity
* @ORM\Table(name="test")
*/
class Test
{
	
	/**
	* @ORM\Column(type="integer")
	* @ORM\Id
	* @ORM\GeneratedValue(strategy="AUTO")
	*/
	protected $id;
	
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $name;
	
	
	/**
	* @ORM\ManyToMany(targetEntity="Word", inversedBy="Word", cascade={"all"})
	* @ORM\JoinTable(name="test_word", 
	* 	joinColumns={@ORM\JoinColumn(name="word_id", referencedColumnName="id")}, 
	*	inverseJoinColumns={@ORM\JoinColumn(name="test_id", referencedColumnName="id")}
	* )
	*/
	protected $words;
	
	public function __construct()
	{
		$this->words = new \Doctrine\Common\Collections\ArrayCollection();
	}

    /**
     * Get id
     *
     * @return integer
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * Set name
     *
     * @param string $name
     *
     * @return Test
     */
    public function setName($name)
    {
        $this->name = $name;

        return $this;
    }

    /**
     * Get name
     *
     * @return string
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * Add word
     *
     * @param \AppBundle\Entity\Word $word
     *
     * @return Test
     */
    public function addWord(\AppBundle\Entity\Word $word)
    {
        $this->words[] = $word;

        return $this;
    }

    /**
     * Remove word
     *
     * @param \AppBundle\Entity\Word $word
     */
    public function removeWord(\AppBundle\Entity\Word $word)
    {
        $this->words->removeElement($word);
    }

    /**
     * Get words
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getWords()
    {
        return $this->words;
    }
}
