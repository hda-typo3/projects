<?php

declare(strict_types=1);

namespace Hda\Projects\Tests\Unit\Domain\Model;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;

/**
 * Test case
 *
 * @author Michael Lang <michael.lang@h-da.de>
 */
class ProjectTest extends UnitTestCase
{
    /**
     * @var \Hda\Projects\Domain\Model\Project|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();

        $this->subject = $this->getAccessibleMock(
            \Hda\Projects\Domain\Model\Project::class,
            ['dummy']
        );
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function getTitleReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTitle()
        );
    }

    /**
     * @test
     */
    public function setTitleForStringSetsTitle(): void
    {
        $this->subject->setTitle('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('title'));
    }

    /**
     * @test
     */
    public function getTeaserReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getTeaser()
        );
    }

    /**
     * @test
     */
    public function setTeaserForStringSetsTeaser(): void
    {
        $this->subject->setTeaser('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('teaser'));
    }

    /**
     * @test
     */
    public function getDescriptionReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getDescription()
        );
    }

    /**
     * @test
     */
    public function setDescriptionForStringSetsDescription(): void
    {
        $this->subject->setDescription('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('description'));
    }

    /**
     * @test
     */
    public function getStudentsfreetextReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getStudentsfreetext()
        );
    }

    /**
     * @test
     */
    public function setStudentsfreetextForStringSetsStudentsfreetext(): void
    {
        $this->subject->setStudentsfreetext('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('studentsfreetext'));
    }

    /**
     * @test
     */
    public function getLecturersfreetextReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getLecturersfreetext()
        );
    }

    /**
     * @test
     */
    public function setLecturersfreetextForDateTimeSetsLecturersfreetext(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setLecturersfreetext($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('lecturersfreetext'));
    }

    /**
     * @test
     */
    public function getDateReturnsInitialValueForDateTime(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDate()
        );
    }

    /**
     * @test
     */
    public function setDateForDateTimeSetsDate(): void
    {
        $dateTimeFixture = new \DateTime();
        $this->subject->setDate($dateTimeFixture);

        self::assertEquals($dateTimeFixture, $this->subject->_get('date'));
    }

    /**
     * @test
     */
    public function getCopartnerReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCopartner()
        );
    }

    /**
     * @test
     */
    public function setCopartnerForStringSetsCopartner(): void
    {
        $this->subject->setCopartner('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('copartner'));
    }

    /**
     * @test
     */
    public function getCopartnerlinkReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getCopartnerlink()
        );
    }

    /**
     * @test
     */
    public function setCopartnerlinkForStringSetsCopartnerlink(): void
    {
        $this->subject->setCopartnerlink('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('copartnerlink'));
    }

    /**
     * @test
     */
    public function getTopimageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getTopimage()
        );
    }

    /**
     * @test
     */
    public function setTopimageForFileReferenceSetsTopimage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setTopimage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('topimage'));
    }

    /**
     * @test
     */
    public function getMediaReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getMedia()
        );
    }

    /**
     * @test
     */
    public function setMediaForFileReferenceSetsMedia(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setMedia($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('media'));
    }

    /**
     * @test
     */
    public function getThumbimageReturnsInitialValueForFileReference(): void
    {
        self::assertEquals(
            null,
            $this->subject->getThumbimage()
        );
    }

    /**
     * @test
     */
    public function setThumbimageForFileReferenceSetsThumbimage(): void
    {
        $fileReferenceFixture = new \TYPO3\CMS\Extbase\Domain\Model\FileReference();
        $this->subject->setThumbimage($fileReferenceFixture);

        self::assertEquals($fileReferenceFixture, $this->subject->_get('thumbimage'));
    }

    /**
     * @test
     */
    public function getLightboxstyleReturnsInitialValueForInt(): void
    {
        self::assertSame(
            0,
            $this->subject->getLightboxstyle()
        );
    }

    /**
     * @test
     */
    public function setLightboxstyleForIntSetsLightboxstyle(): void
    {
        $this->subject->setLightboxstyle(12);

        self::assertEquals(12, $this->subject->_get('lightboxstyle'));
    }

    /**
     * @test
     */
    public function getPathSegmentReturnsInitialValueForString(): void
    {
        self::assertSame(
            '',
            $this->subject->getPathSegment()
        );
    }

    /**
     * @test
     */
    public function setPathSegmentForStringSetsPathSegment(): void
    {
        $this->subject->setPathSegment('Conceived at T3CON10');

        self::assertEquals('Conceived at T3CON10', $this->subject->_get('pathSegment'));
    }

    /**
     * @test
     */
    public function getCategoryReturnsInitialValueForCategory(): void
    {
        self::assertEquals(
            null,
            $this->subject->getCategory()
        );
    }

    /**
     * @test
     */
    public function setCategoryForCategorySetsCategory(): void
    {
        $categoryFixture = new \Hda\Projects\Domain\Model\Category();
        $this->subject->setCategory($categoryFixture);

        self::assertEquals($categoryFixture, $this->subject->_get('category'));
    }

    /**
     * @test
     */
    public function getDegreecourseReturnsInitialValueForDegreecourse(): void
    {
        self::assertEquals(
            null,
            $this->subject->getDegreecourse()
        );
    }

    /**
     * @test
     */
    public function setDegreecourseForDegreecourseSetsDegreecourse(): void
    {
        $degreecourseFixture = new \Hda\Projects\Domain\Model\Degreecourse();
        $this->subject->setDegreecourse($degreecourseFixture);

        self::assertEquals($degreecourseFixture, $this->subject->_get('degreecourse'));
    }

    /**
     * @test
     */
    public function getSemesterReturnsInitialValueForSemester(): void
    {
        self::assertEquals(
            null,
            $this->subject->getSemester()
        );
    }

    /**
     * @test
     */
    public function setSemesterForSemesterSetsSemester(): void
    {
        $semesterFixture = new \Hda\Projects\Domain\Model\Semester();
        $this->subject->setSemester($semesterFixture);

        self::assertEquals($semesterFixture, $this->subject->_get('semester'));
    }

    /**
     * @test
     */
    public function getStudentsReturnsInitialValueForStudents(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getStudents()
        );
    }

    /**
     * @test
     */
    public function setStudentsForObjectStorageContainingStudentsSetsStudents(): void
    {
        $student = new \Hda\Projects\Domain\Model\Students();
        $objectStorageHoldingExactlyOneStudents = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneStudents->attach($student);
        $this->subject->setStudents($objectStorageHoldingExactlyOneStudents);

        self::assertEquals($objectStorageHoldingExactlyOneStudents, $this->subject->_get('students'));
    }

    /**
     * @test
     */
    public function addStudentToObjectStorageHoldingStudents(): void
    {
        $student = new \Hda\Projects\Domain\Model\Students();
        $studentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentsObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($student));
        $this->subject->_set('students', $studentsObjectStorageMock);

        $this->subject->addStudent($student);
    }

    /**
     * @test
     */
    public function removeStudentFromObjectStorageHoldingStudents(): void
    {
        $student = new \Hda\Projects\Domain\Model\Students();
        $studentsObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $studentsObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($student));
        $this->subject->_set('students', $studentsObjectStorageMock);

        $this->subject->removeStudent($student);
    }

    /**
     * @test
     */
    public function getLecturersReturnsInitialValueForLecturers(): void
    {
        $newObjectStorage = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        self::assertEquals(
            $newObjectStorage,
            $this->subject->getLecturers()
        );
    }

    /**
     * @test
     */
    public function setLecturersForObjectStorageContainingLecturersSetsLecturers(): void
    {
        $lecturer = new \Hda\Projects\Domain\Model\Lecturers();
        $objectStorageHoldingExactlyOneLecturers = new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $objectStorageHoldingExactlyOneLecturers->attach($lecturer);
        $this->subject->setLecturers($objectStorageHoldingExactlyOneLecturers);

        self::assertEquals($objectStorageHoldingExactlyOneLecturers, $this->subject->_get('lecturers'));
    }

    /**
     * @test
     */
    public function addLecturerToObjectStorageHoldingLecturers(): void
    {
        $lecturer = new \Hda\Projects\Domain\Model\Lecturers();
        $lecturersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['attach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lecturersObjectStorageMock->expects(self::once())->method('attach')->with(self::equalTo($lecturer));
        $this->subject->_set('lecturers', $lecturersObjectStorageMock);

        $this->subject->addLecturer($lecturer);
    }

    /**
     * @test
     */
    public function removeLecturerFromObjectStorageHoldingLecturers(): void
    {
        $lecturer = new \Hda\Projects\Domain\Model\Lecturers();
        $lecturersObjectStorageMock = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->onlyMethods(['detach'])
            ->disableOriginalConstructor()
            ->getMock();

        $lecturersObjectStorageMock->expects(self::once())->method('detach')->with(self::equalTo($lecturer));
        $this->subject->_set('lecturers', $lecturersObjectStorageMock);

        $this->subject->removeLecturer($lecturer);
    }
}
