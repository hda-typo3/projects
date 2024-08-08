<?php

declare(strict_types=1);

namespace Hda\Projects\Controller;


/**
 * This file is part of the "Design Projects" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2024 Michael Lang <michael.lang@h-da.de>, h_da
 */

/**
 * ProjectController
 */
class ProjectController extends \TYPO3\CMS\Extbase\Mvc\Controller\ActionController
{

    /**
     * projectRepository
     *
     * @var \Hda\Projects\Domain\Repository\ProjectRepository
     */
    protected $projectRepository = null;

    /**
     * @param \Hda\Projects\Domain\Repository\ProjectRepository $projectRepository
     */
    public function injectProjectRepository(\Hda\Projects\Domain\Repository\ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    /**
     * action list
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function listAction(): \Psr\Http\Message\ResponseInterface
    {
        $projects = $this->projectRepository->findAll();
        $this->view->assign('projects', $projects);
        return $this->htmlResponse();
    }

    /**
     * action show
     *
     * @param \Hda\Projects\Domain\Model\Project $project
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function showAction(\Hda\Projects\Domain\Model\Project $project): \Psr\Http\Message\ResponseInterface
    {
        $this->view->assign('project', $project);
        return $this->htmlResponse();
    }

    /**
     * action all
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function allAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }

    /**
     * action lecturer
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function lecturerAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
