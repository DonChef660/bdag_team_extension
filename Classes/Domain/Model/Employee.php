<?php
namespace BDAG\BdagTeamExtension\Domain\Model;


/***************************************************************
 *
 *  Copyright notice
 *
 *  (c) 2015 Fehmi Raqipi <raqipi@business-design.ch>, business+design AG
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 3 of the License, or
 *  (at your option) any later version.
 *
 *  The GNU General Public License can be found at
 *  http://www.gnu.org/copyleft/gpl.html.
 *
 *  This script is distributed in the hope that it will be useful,
 *  but WITHOUT ANY WARRANTY; without even the implied warranty of
 *  MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 *  GNU General Public License for more details.
 *
 *  This copyright notice MUST APPEAR in all copies of the script!
 ***************************************************************/

/**
 * Employee
 */
class Employee extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * name
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $name = '';

	/**
	 * activity
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $activity = '';

	/**
	 * email
	 *
	 * @var string
	 * @validate NotEmpty
	 */
	protected $email = '';

	/**
	 * telephone
	 *
	 * @var string
	 */
	protected $telephone = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * motto
	 *
	 * @var string
	 */
	protected $motto = '';

	/**
	 * employmentYear
	 *
	 * @var integer
	 */
	protected $employmentYear = 0;

	/**
	 * facebook
	 *
	 * @var string
	 */
	protected $facebook = '';

	/**
	 * twitter
	 *
	 * @var string
	 */
	protected $twitter = '';

	/**
	 * xing
	 *
	 * @var string
	 */
	protected $xing = '';

	/**
	 * description
	 *
	 * @var string
	 */
	protected $description = '';

	/**
	 * hobby
	 *
	 * @var string
	 */
	protected $hobby = '';

	/**
	 * career
	 *
	 * @var string
	 */
	protected $career = '';

	/**
	 * category
	 *
	 * @var \BDAG\BdagTeamExtension\Domain\Model\Category
	 */
	protected $category = NULL;

	/**
	 * Returns the name
	 *
	 * @return string $name
	 */
	public function getName() {
		return $this->name;
	}

	/**
	 * Sets the name
	 *
	 * @param string $name
	 * @return void
	 */
	public function setName($name) {
		$this->name = $name;
	}

	/**
	 * Returns the activity
	 *
	 * @return string $activity
	 */
	public function getActivity() {
		return $this->activity;
	}

	/**
	 * Sets the activity
	 *
	 * @param string $activity
	 * @return void
	 */
	public function setActivity($activity) {
		$this->activity = $activity;
	}

	/**
	 * Returns the email
	 *
	 * @return string $email
	 */
	public function getEmail() {
		return $this->email;
	}

	/**
	 * Sets the email
	 *
	 * @param string $email
	 * @return void
	 */
	public function setEmail($email) {
		$this->email = $email;
	}

	/**
	 * Returns the telephone
	 *
	 * @return string $telephone
	 */
	public function getTelephone() {
		return $this->telephone;
	}

	/**
	 * Sets the telephone
	 *
	 * @param string $telephone
	 * @return void
	 */
	public function setTelephone($telephone) {
		$this->telephone = $telephone;
	}

	/**
	 * Returns the image
	 *
	 * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 */
	public function getImage() {
		return $this->image;
	}

	/**
	 * Sets the image
	 *
	 * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $image
	 * @return void
	 */
	public function setImage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $image) {
		$this->image = $image;
	}

	/**
	 * Returns the motto
	 *
	 * @return string $motto
	 */
	public function getMotto() {
		return $this->motto;
	}

	/**
	 * Sets the motto
	 *
	 * @param string $motto
	 * @return void
	 */
	public function setMotto($motto) {
		$this->motto = $motto;
	}

	/**
	 * Returns the employmentYear
	 *
	 * @return integer $employmentYear
	 */
	public function getEmploymentYear() {
		return $this->employmentYear;
	}

	/**
	 * Sets the employmentYear
	 *
	 * @param integer $employmentYear
	 * @return void
	 */
	public function setEmploymentYear($employmentYear) {
		$this->employmentYear = $employmentYear;
	}

	/**
	 * Returns the facebook
	 *
	 * @return string $facebook
	 */
	public function getFacebook() {
		return $this->facebook;
	}

	/**
	 * Sets the facebook
	 *
	 * @param string $facebook
	 * @return void
	 */
	public function setFacebook($facebook) {
		$this->facebook = $facebook;
	}

	/**
	 * Returns the twitter
	 *
	 * @return string $twitter
	 */
	public function getTwitter() {
		return $this->twitter;
	}

	/**
	 * Sets the twitter
	 *
	 * @param string $twitter
	 * @return void
	 */
	public function setTwitter($twitter) {
		$this->twitter = $twitter;
	}

	/**
	 * Returns the xing
	 *
	 * @return string $xing
	 */
	public function getXing() {
		return $this->xing;
	}

	/**
	 * Sets the xing
	 *
	 * @param string $xing
	 * @return void
	 */
	public function setXing($xing) {
		$this->xing = $xing;
	}

	/**
	 * Returns the description
	 *
	 * @return string $description
	 */
	public function getDescription() {
		return $this->description;
	}

	/**
	 * Sets the description
	 *
	 * @param string $description
	 * @return void
	 */
	public function setDescription($description) {
		$this->description = $description;
	}

	/**
	 * Returns the hobby
	 *
	 * @return string $hobby
	 */
	public function getHobby() {
		return $this->hobby;
	}

	/**
	 * Sets the hobby
	 *
	 * @param string $hobby
	 * @return void
	 */
	public function setHobby($hobby) {
		$this->hobby = $hobby;
	}

	/**
	 * Returns the career
	 *
	 * @return string $career
	 */
	public function getCareer() {
		return $this->career;
	}

	/**
	 * Sets the career
	 *
	 * @param string $career
	 * @return void
	 */
	public function setCareer($career) {
		$this->career = $career;
	}

	/**
	 * Returns the category
	 *
	 * @return \BDAG\BdagTeamExtension\Domain\Model\Category $category
	 */
	public function getCategory() {
		return $this->category;
	}

	/**
	 * Sets the category
	 *
	 * @param \BDAG\BdagTeamExtension\Domain\Model\Category $category
	 * @return void
	 */
	public function setCategory(\BDAG\BdagTeamExtension\Domain\Model\Category $category) {
		$this->category = $category;
	}

}