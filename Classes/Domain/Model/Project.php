<?php

declare(strict_types=1);

namespace Hda\Projects\Domain\Model;


/**
 * This file is part of the "Design Projects" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Michael Lang <michael.lang@h-da.de>, h_da
 */

/**
 * Project
 */
class Project extends \TYPO3\CMS\Extbase\DomainObject\AbstractEntity
{

    /**
     * title
     *
     * @var string
     * @TYPO3\CMS\Extbase\Annotation\Validate("NotEmpty")
     */
    protected $title = '';

    /**
     * teaser
     *
     * @var string
     */
    protected $teaser = '';

    /**
     * description
     *
     * @var string
     */
    protected $description = '';

    /**
     * studentsfreetext
     *
     * @var string
     */
    protected $studentsfreetext = '';

    /**
     * lecturersfreetext
     *
     * @var \DateTime
     */
    protected $lecturersfreetext = null;

    /**
     * date
     *
     * @var \DateTime
     */
    protected $date = null;

    /**
     * copartner
     *
     * @var string
     */
    protected $copartner = '';

    /**
     * copartnerlink
     *
     * @var string
     */
    protected $copartnerlink = '';

    /**
     * topimage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $topimage = null;

    /**
     * media
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $media = null;

    /**
     * thumbimage
     *
     * @var \TYPO3\CMS\Extbase\Domain\Model\FileReference
     * @TYPO3\CMS\Extbase\Annotation\ORM\Cascade("remove")
     */
    protected $thumbimage = null;

    /**
     * lightboxstyle
     *
     * @var int
     */
    protected $lightboxstyle = 0;

    /**
     * pathSegment
     *
     * @var string
     */
    protected $pathSegment = '';

    /**
     * category
     *
     * @var \Hda\Projects\Domain\Model\Category
     */
    protected $category = null;

    /**
     * degreecourse
     *
     * @var \Hda\Projects\Domain\Model\Degreecourse
     */
    protected $degreecourse = null;

    /**
     * semester
     *
     * @var \Hda\Projects\Domain\Model\Semester
     */
    protected $semester = null;

    /**
     * students
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Projects\Domain\Model\Students>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $students = null;

    /**
     * lecturers
     *
     * @var \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Projects\Domain\Model\Lecturers>
     * @TYPO3\CMS\Extbase\Annotation\ORM\Lazy
     */
    protected $lecturers = null;

    /**
     * Returns the title
     *
     * @return string
     */
    public function getTitle()
    {
        return $this->title;
    }

    /**
     * Sets the title
     *
     * @param string $title
     * @return void
     */
    public function setTitle(string $title)
    {
        $this->title = $title;
    }

    /**
     * Returns the category
     *
     * @return \Hda\Projects\Domain\Model\Category
     */
    public function getCategory()
    {
        return $this->category;
    }

    /**
     * Sets the category
     *
     * @param \Hda\Projects\Domain\Model\Category $category
     * @return void
     */
    public function setCategory(\Hda\Projects\Domain\Model\Category $category)
    {
        $this->category = $category;
    }

    /**
     * Returns the degreecourse
     *
     * @return \Hda\Projects\Domain\Model\Degreecourse
     */
    public function getDegreecourse()
    {
        return $this->degreecourse;
    }

    /**
     * Sets the degreecourse
     *
     * @param \Hda\Projects\Domain\Model\Degreecourse $degreecourse
     * @return void
     */
    public function setDegreecourse(\Hda\Projects\Domain\Model\Degreecourse $degreecourse)
    {
        $this->degreecourse = $degreecourse;
    }

    /**
     * Returns the semester
     *
     * @return \Hda\Projects\Domain\Model\Semester
     */
    public function getSemester()
    {
        return $this->semester;
    }

    /**
     * Sets the semester
     *
     * @param \Hda\Projects\Domain\Model\Semester $semester
     * @return void
     */
    public function setSemester(\Hda\Projects\Domain\Model\Semester $semester)
    {
        $this->semester = $semester;
    }

    /**
     * Returns the teaser
     *
     * @return string
     */
    public function getTeaser()
    {
        return $this->teaser;
    }

    /**
     * Sets the teaser
     *
     * @param string $teaser
     * @return void
     */
    public function setTeaser(string $teaser)
    {
        $this->teaser = $teaser;
    }

    /**
     * Returns the description
     *
     * @return string
     */
    public function getDescription()
    {
        return $this->description;
    }

    /**
     * Sets the description
     *
     * @param string $description
     * @return void
     */
    public function setDescription(string $description)
    {
        $this->description = $description;
    }

    /**
     * Returns the studentsfreetext
     *
     * @return string
     */
    public function getStudentsfreetext()
    {
        return $this->studentsfreetext;
    }

    /**
     * Sets the studentsfreetext
     *
     * @param string $studentsfreetext
     * @return void
     */
    public function setStudentsfreetext(string $studentsfreetext)
    {
        $this->studentsfreetext = $studentsfreetext;
    }

    /**
     * Returns the lecturersfreetext
     *
     * @return \DateTime
     */
    public function getLecturersfreetext()
    {
        return $this->lecturersfreetext;
    }

    /**
     * Sets the lecturersfreetext
     *
     * @param \DateTime $lecturersfreetext
     * @return void
     */
    public function setLecturersfreetext(\DateTime $lecturersfreetext)
    {
        $this->lecturersfreetext = $lecturersfreetext;
    }

    /**
     * Returns the date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Sets the date
     *
     * @param \DateTime $date
     * @return void
     */
    public function setDate(\DateTime $date)
    {
        $this->date = $date;
    }

    /**
     * Returns the copartner
     *
     * @return string
     */
    public function getCopartner()
    {
        return $this->copartner;
    }

    /**
     * Sets the copartner
     *
     * @param string $copartner
     * @return void
     */
    public function setCopartner(string $copartner)
    {
        $this->copartner = $copartner;
    }

    /**
     * Returns the copartnerlink
     *
     * @return string
     */
    public function getCopartnerlink()
    {
        return $this->copartnerlink;
    }

    /**
     * Sets the copartnerlink
     *
     * @param string $copartnerlink
     * @return void
     */
    public function setCopartnerlink(string $copartnerlink)
    {
        $this->copartnerlink = $copartnerlink;
    }

    /**
     * Returns the topimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getTopimage()
    {
        return $this->topimage;
    }

    /**
     * Sets the topimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage
     * @return void
     */
    public function setTopimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $topimage)
    {
        $this->topimage = $topimage;
    }

    /**
     * Returns the media
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getMedia()
    {
        return $this->media;
    }

    /**
     * Sets the media
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $media
     * @return void
     */
    public function setMedia(\TYPO3\CMS\Extbase\Domain\Model\FileReference $media)
    {
        $this->media = $media;
    }

    /**
     * Returns the thumbimage
     *
     * @return \TYPO3\CMS\Extbase\Domain\Model\FileReference
     */
    public function getThumbimage()
    {
        return $this->thumbimage;
    }

    /**
     * Sets the thumbimage
     *
     * @param \TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbimage
     * @return void
     */
    public function setThumbimage(\TYPO3\CMS\Extbase\Domain\Model\FileReference $thumbimage)
    {
        $this->thumbimage = $thumbimage;
    }

    /**
     * Returns the lightboxstyle
     *
     * @return int
     */
    public function getLightboxstyle()
    {
        return $this->lightboxstyle;
    }

    /**
     * Sets the lightboxstyle
     *
     * @param int $lightboxstyle
     * @return void
     */
    public function setLightboxstyle(int $lightboxstyle)
    {
        $this->lightboxstyle = $lightboxstyle;
    }

    /**
     * Returns the pathSegment
     *
     * @return string
     */
    public function getPathSegment()
    {
        return $this->pathSegment;
    }

    /**
     * Sets the pathSegment
     *
     * @param string $pathSegment
     * @return void
     */
    public function setPathSegment(string $pathSegment)
    {
        $this->pathSegment = $pathSegment;
    }

    /**
     * __construct
     */
    public function __construct()
    {

        // Do not remove the next line: It would break the functionality
        $this->initializeObject();
    }

    /**
     * Initializes all ObjectStorage properties when model is reconstructed from DB (where __construct is not called)
     * Do not modify this method!
     * It will be rewritten on each save in the extension builder
     * You may modify the constructor of this class instead
     *
     * @return void
     */
    public function initializeObject()
    {
        $this->students = $this->students ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
        $this->lecturers = $this->lecturers ?: new \TYPO3\CMS\Extbase\Persistence\ObjectStorage();
    }

    /**
     * Adds a Students
     *
     * @param \Hda\Projects\Domain\Model\Students $student
     * @return void
     */
    public function addStudent(\Hda\Projects\Domain\Model\Students $student)
    {
        $this->students->attach($student);
    }

    /**
     * Removes a Students
     *
     * @param \Hda\Projects\Domain\Model\Students $studentToRemove The Students to be removed
     * @return void
     */
    public function removeStudent(\Hda\Projects\Domain\Model\Students $studentToRemove)
    {
        $this->students->detach($studentToRemove);
    }

    /**
     * Returns the students
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Projects\Domain\Model\Students>
     */
    public function getStudents()
    {
        return $this->students;
    }

    /**
     * Sets the students
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Projects\Domain\Model\Students> $students
     * @return void
     */
    public function setStudents(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $students)
    {
        $this->students = $students;
    }

    /**
     * Adds a Lecturers
     *
     * @param \Hda\Projects\Domain\Model\Lecturers $lecturer
     * @return void
     */
    public function addLecturer(\Hda\Projects\Domain\Model\Lecturers $lecturer)
    {
        $this->lecturers->attach($lecturer);
    }

    /**
     * Removes a Lecturers
     *
     * @param \Hda\Projects\Domain\Model\Lecturers $lecturerToRemove The Lecturers to be removed
     * @return void
     */
    public function removeLecturer(\Hda\Projects\Domain\Model\Lecturers $lecturerToRemove)
    {
        $this->lecturers->detach($lecturerToRemove);
    }

    /**
     * Returns the lecturers
     *
     * @return \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Projects\Domain\Model\Lecturers>
     */
    public function getLecturers()
    {
        return $this->lecturers;
    }

    /**
     * Sets the lecturers
     *
     * @param \TYPO3\CMS\Extbase\Persistence\ObjectStorage<\Hda\Projects\Domain\Model\Lecturers> $lecturers
     * @return void
     */
    public function setLecturers(\TYPO3\CMS\Extbase\Persistence\ObjectStorage $lecturers)
    {
        $this->lecturers = $lecturers;
    }
}
