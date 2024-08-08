<?php

declare(strict_types=1);

namespace Hda\Projects\Tests\Unit\Controller;

use PHPUnit\Framework\MockObject\MockObject;
use TYPO3\TestingFramework\Core\AccessibleObjectInterface;
use TYPO3\TestingFramework\Core\Unit\UnitTestCase;
use TYPO3Fluid\Fluid\View\ViewInterface;

/**
 * Test case
 *
 * @author Michael Lang <michael.lang@h-da.de>
 */
class ProjectControllerTest extends UnitTestCase
{
    /**
     * @var \Hda\Projects\Controller\ProjectController|MockObject|AccessibleObjectInterface
     */
    protected $subject;

    protected function setUp(): void
    {
        parent::setUp();
        $this->subject = $this->getMockBuilder($this->buildAccessibleProxy(\Hda\Projects\Controller\ProjectController::class))
            ->onlyMethods(['redirect', 'forward', 'addFlashMessage'])
            ->disableOriginalConstructor()
            ->getMock();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

    /**
     * @test
     */
    public function listActionFetchesAllProjectsFromRepositoryAndAssignsThemToView(): void
    {
        $allProjects = $this->getMockBuilder(\TYPO3\CMS\Extbase\Persistence\ObjectStorage::class)
            ->disableOriginalConstructor()
            ->getMock();

        $projectRepository = $this->getMockBuilder(\Hda\Projects\Domain\Repository\ProjectRepository::class)
            ->onlyMethods(['findAll'])
            ->disableOriginalConstructor()
            ->getMock();
        $projectRepository->expects(self::once())->method('findAll')->will(self::returnValue($allProjects));
        $this->subject->_set('projectRepository', $projectRepository);

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $view->expects(self::once())->method('assign')->with('projects', $allProjects);
        $this->subject->_set('view', $view);

        $this->subject->listAction();
    }

    /**
     * @test
     */
    public function showActionAssignsTheGivenProjectToView(): void
    {
        $project = new \Hda\Projects\Domain\Model\Project();

        $view = $this->getMockBuilder(ViewInterface::class)->getMock();
        $this->subject->_set('view', $view);
        $view->expects(self::once())->method('assign')->with('project', $project);

        $this->subject->showAction($project);
    }
}
