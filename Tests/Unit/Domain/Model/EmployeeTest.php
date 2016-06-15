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
 * Test case for class \BDAG\BdagTeamExtension\Domain\Model\Employee.
 *
 * @copyright Copyright belongs to the respective authors
 * @license http://www.gnu.org/licenses/gpl.html GNU General Public License, version 3 or later
 *
 * @author Fehmi Raqipi <raqipi@business-design.ch>
 */
class EmployeeTest extends \TYPO3\CMS\Core\Tests\UnitTestCase {
	/**
	 * @var \BDAG\BdagTeamExtension\Domain\Model\Employee
	 */
	protected $subject = NULL;

	protected function setUp() {
		$this->subject = new \BDAG\BdagTeamExtension\Domain\Model\Employee();
	}

	protected function tearDown() {
		unset($this->subject);
	}

	/**
	 * @test
	 */
	public function getNameReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getName()
		);
	}

	/**
	 * @test
	 */
	public function setNameForStringSetsName() {
		$this->subject->setName('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'name',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getActivityReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getActivity()
		);
	}

	/**
	 * @test
	 */
	public function setActivityForStringSetsActivity() {
		$this->subject->setActivity('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'activity',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmailReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getEmail()
		);
	}

	/**
	 * @test
	 */
	public function setEmailForStringSetsEmail() {
		$this->subject->setEmail('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'email',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTelephoneReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTelephone()
		);
	}

	/**
	 * @test
	 */
	public function setTelephoneForStringSetsTelephone() {
		$this->subject->setTelephone('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'telephone',
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
	public function getMottoReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getMotto()
		);
	}

	/**
	 * @test
	 */
	public function setMottoForStringSetsMotto() {
		$this->subject->setMotto('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'motto',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getEmploymentYearReturnsInitialValueForInteger() {
		$this->assertSame(
			0,
			$this->subject->getEmploymentYear()
		);
	}

	/**
	 * @test
	 */
	public function setEmploymentYearForIntegerSetsEmploymentYear() {
		$this->subject->setEmploymentYear(12);

		$this->assertAttributeEquals(
			12,
			'employmentYear',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getFacebookReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getFacebook()
		);
	}

	/**
	 * @test
	 */
	public function setFacebookForStringSetsFacebook() {
		$this->subject->setFacebook('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'facebook',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getTwitterReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getTwitter()
		);
	}

	/**
	 * @test
	 */
	public function setTwitterForStringSetsTwitter() {
		$this->subject->setTwitter('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'twitter',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getXingReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getXing()
		);
	}

	/**
	 * @test
	 */
	public function setXingForStringSetsXing() {
		$this->subject->setXing('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'xing',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getDescriptionReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getDescription()
		);
	}

	/**
	 * @test
	 */
	public function setDescriptionForStringSetsDescription() {
		$this->subject->setDescription('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'description',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getHobbyReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getHobby()
		);
	}

	/**
	 * @test
	 */
	public function setHobbyForStringSetsHobby() {
		$this->subject->setHobby('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'hobby',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCareerReturnsInitialValueForString() {
		$this->assertSame(
			'',
			$this->subject->getCareer()
		);
	}

	/**
	 * @test
	 */
	public function setCareerForStringSetsCareer() {
		$this->subject->setCareer('Conceived at T3CON10');

		$this->assertAttributeEquals(
			'Conceived at T3CON10',
			'career',
			$this->subject
		);
	}

	/**
	 * @test
	 */
	public function getCategoryReturnsInitialValueForCategory() {
		$this->assertEquals(
			NULL,
			$this->subject->getCategory()
		);
	}

	/**
	 * @test
	 */
	public function setCategoryForCategorySetsCategory() {
		$categoryFixture = new \BDAG\BdagTeamExtension\Domain\Model\Category();
		$this->subject->setCategory($categoryFixture);

		$this->assertAttributeEquals(
			$categoryFixture,
			'category',
			$this->subject
		);
	}
}
