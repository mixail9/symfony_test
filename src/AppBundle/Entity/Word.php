<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity 
* @ORM\Table(name="word")
*/
class Word
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
	protected $word;
	
	/**
	* @ORM\Column(type="string")
	*/
	protected $translate;
	
	/**
	* @ORM\ManyToMany(targetEntity="Test", mappedBy="Test", cascade={"all"})
	* @ORM\JoinTable(name="test_word", 
	*	joinColumns={@ORM\JoinColumn(name="test_id", referencedColumnName="id")},
	*	inverseJoinColumns={@ORM\JoinColumn(name="word_id", referencedColumnName="id")}
	* )
	*/
	protected $tests;
	
	
	
	public function __construct()
	{
		$this->tests = new \Doctrine\Common\Collections\ArrayCollection();
	}
	

    /**
     * Set id
     *
     * @param integer $id
     *
     * @return Word
     */
    public function setId($id)
    {
        $this->id = $id;

        return $this;
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
     * Set word
     *
     * @param string $word
     *
     * @return Word
     */
    public function setWord($word)
    {
        $this->word = $word;

        return $this;
    }

    /**
     * Get word
     *
     * @return string
     */
    public function getWord()
    {
        return $this->word;
    }

    /**
     * Set translate
     *
     * @param string $translate
     *
     * @return Word
     */
    public function setTranslate($translate)
    {
        $this->translate = $translate;

        return $this;
    }

    /**
     * Get translate
     *
     * @return string
     */
    public function getTranslate()
    {
        return $this->translate;
    }

    /**
     * Add test
     *
     * @param \AppBundle\Entity\Test $test
     *
     * @return Word
     */
    public function addTest(\AppBundle\Entity\Test $test)
    {
        $this->tests[] = $test;

        return $this;
    }

    /**
     * Remove test
     *
     * @param \AppBundle\Entity\Test $test
     */
    public function removeTest(\AppBundle\Entity\Test $test)
    {
        $this->tests->removeElement($test);
    }

    /**
     * Get tests
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getTests()
    {
        return $this->tests;
    }
}
