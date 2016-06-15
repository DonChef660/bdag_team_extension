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
 * Category
 */
class Category extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity {

	/**
	 * title
	 *
	 * @var string
	 */
	protected $title = '';

	/**
	 * image
	 *
	 * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
	 */
	protected $image = NULL;

	/**
	 * employee
	 *
	 * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BDAG\BdagTeamExtension\Domain\Model\Employee>
	 * @cascade remove
	 */
	protected $employee = NULL;

	/**
	 * __construct
	 */
	public function __construct() {
		//Do not remove the next line: It would break the functionality
		$this->initStorageObjects();
	}

	/**
	 * Initializes all ObjectStorage properties
	 * Do not modify this method!
	 * It will be rewritten on each save in the extension builder
	 * You may modify the constructor of this class instead
	 *
	 * @return void
	 */
	protected function initStorageObjects() {
		$this->employee = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
	}

	/**
	 * Returns the title
	 *
	 * @return string $title
	 */
	public function getTitle() {
		return $this->title;
	}

	/**
	 * Sets the title
	 *
	 * @param string $title
	 * @return void
	 */
	public function setTitle($title) {
		$this->title = $title;
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
	 * Adds a Employee
	 *
	 * @param \BDAG\BdagTeamExtension\Domain\Model\Employee $employee
	 * @return void
	 */
	public function addEmployee(\BDAG\BdagTeamExtension\Domain\Model\Employee $employee) {
		$this->employee->attach($employee);
	}

	/**
	 * Removes a Employee
	 *
	 * @param \BDAG\BdagTeamExtension\Domain\Model\Employee $employeeToRemove The Employee to be removed
	 * @return void
	 */
	public function removeEmployee(\BDAG\BdagTeamExtension\Domain\Model\Employee $employeeToRemove) {
		$this->employee->detach($employeeToRemove);
	}

	/**
	 * Returns the employee
	 *
	 * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BDAG\BdagTeamExtension\Domain\Model\Employee> $employee
	 */
	public function getEmployee() {
		return $this->employee;
	}

	/**
	 * Sets the employee
	 *
	 * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\BDAG\BdagTeamExtension\Domain\Model\Employee> $employee
	 * @return void
	 */
	public function setEmployee(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $employee) {
		$this->employee = $employee;
	}

}