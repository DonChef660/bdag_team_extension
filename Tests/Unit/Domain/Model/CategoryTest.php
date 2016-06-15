<?php

namespace BDAG\BdagTeamExtension\Tests\Unit\Domain\Model;

/***************************************************************
 *  Copyright notice
 *
 *  (c) 2015 Fehmi Raqipi <raqipi@business-design.ch>, business+design AG
 *
 *  All rights reserved
 *
 *  This script is part of the TYPO3 project. The TYPO3 project is
 *  free software; you can redistribute it and/or modify
 *  it under the terms of the GNU General Public License as published by
 *  the Free Software Foundation; either version 2 of the License, or
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
 * Test case for class \BDAG\BdagTeamExtension\Domain\Model\Category.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Fehmi Raqipi <raqipi@business-design.ch>
 */
class CategoryTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \BDAG\BdagTeamExtension\Domain\Model\Category
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \BDAG\BdagTeamExtension\Domain\Model\Category();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getTitleReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTitle()
		);
	}

	/**
	 * @test
	 */
	public function setTitleForStringSetsTitle() {
		$this->subject->setTitle('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'title',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getImageReturnsInitialValueForFileReference() {
		$this->assertEquals(
			NULL,
			$this->subject->getImage()
		);
	}

	/**
	 * @test
	 */
	public function setImageForFileReferenceSetsImage() {
		$fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
		$this->subject->setImage($fileReferenceFixture);

		$this->assertAttributeEquals(
			$fileReferenceFixture,
			'image',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmployeeReturnsInitialValueForEmployee() {
		$newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$this->assertEquals(
			$newObjectStorage,
			$this->subject->getEmployee()
		);
	}

	/**
	 * @test
	 */
	public function setEmployeeForObjectStorageContainingEmployeeSetsEmployee() {
		$employee = new \BDAG\BdagTeamExtension\Domain\Model\Employee();
		$objectStorageHoldingExactlyOneEmployee = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
		$objectStorageHoldingExactlyOneEmployee->attach($employee);
		$this->subject->setEmployee($objectStorageHoldingExactlyOneEmployee);

		$this->assertAttributeEquals(
			$objectStorageHoldingExactlyOneEmployee,
			'employee',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function addEmployeeToObjectStorageHoldingEmployee() {
		$employee = new \BDAG\BdagTeamExtension\Domain\Model\Employee();
		$employeeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('attach'), array(), '', FALSE);
		$employeeObjectStorageMock->expects($this->once())->method('attach')->with($this->equalTo($employee));
		$this->inject($this->subject, 'employee', $employeeObjectStorageMock);

		$this->subject->addEmployee($employee);
	}

	/**
	 * @test
	 */
	public function removeEmployeeFromObjectStorageHoldingEmployee() {
		$employee = new \BDAG\BdagTeamExtension\Domain\Model\Employee();
		$employeeObjectStorageMock = $this->getMock('TYPO3\\CMS\\Extbase\\Persistence\\ObjectStorage', array('detach'), array(), '', FALSE);
		$employeeObjectStorageMock->expects($this->once())->method('detach')->with($this->equalTo($employee));
		$this->inject($this->subject, 'employee', $employeeObjectStorageMock);

		$this->subject->removeEmployee($employee);

	}
}
