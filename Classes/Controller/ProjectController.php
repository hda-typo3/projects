<?php

declare(strict_types=1);

namespace Hda\Projects\Controller;
use TYPO3\CMS\Core\Utility\GeneralUtility;
use TYPO3\CMS\Extbase\Domain\Repository\FrontendUserRepository;
use TYPO3\CMS\Extbase\Pagination\QueryResultPaginator;
use \GeorgRinger\NumberedPagination\NumberedPagination;
use TYPO3\CMS\Extbase\Utility\DebuggerUtility;

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
     * categoryRepository
     *
     * @var \Hda\Projects\Domain\Repository\CategoryRepository
     */
    protected $categoryRepository;
    
    /**
     * semesterRepository
     *
     * @var \Hda\Projects\Domain\Repository\SemesterRepository
     */
    protected $semesterRepository;
    
    /**
     * degreecourseRepository
     *
     * @var \Hda\Projects\Domain\Repository\DegreecourseRepository
     */
    protected $degreecourseRepository;  
    
    
    /**
     * @param \Hda\Projects\Domain\Repository\ProjectRepository $projectRepository
     */
    public function injectProjectRepository(\Hda\Projects\Domain\Repository\ProjectRepository $projectRepository)
    {
        $this->projectRepository = $projectRepository;
    }

    
    /**
     * @param \Hda\Projects\Domain\Repository\CategoryRepository $categoryRepository
     */
    public function injectCategoryRepository(\Hda\Projects\Domain\Repository\CategoryRepository $categoryRepository)
    {
        $this->categoryRepository = $categoryRepository;
    }
    
    /**
     * @param \Hda\Projects\Domain\Repository\SemesterRepository $semesterRepository
     */
    public function injectSemesterRepository(\Hda\Projects\Domain\Repository\SemesterRepository $semesterRepository)
    {
        $this->semesterRepository = $semesterRepository;
    }
    
    /**
     * @param \Hda\Projects\Domain\Repository\DegreecourseRepository $degreecourseRepository
     */
    public function injectDegreeRepository(\Hda\Projects\Domain\Repository\DegreecourseRepository $degreecourseRepository)
    {
        $this->degreecourseRepository = $degreecourseRepository;
    }
    
    
    public function initializeAction()
    {
        $querySettings = $this->objectManager->get('TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings');
        $querySettings->setRespectStoragePage(FALSE);
        $querySettings->setIgnoreEnableFields(FALSE);
        $querySettings->setIncludeDeleted(FALSE);
        $this->projectRepository->setDefaultQuerySettings($querySettings);
        $this->semesterRepository->setDefaultQuerySettings($querySettings);
        $this->categoryRepository->setDefaultQuerySettings($querySettings);
        $this->degreecourseRepository->setDefaultQuerySettings($querySettings);
    }
    
    /**
     * action all
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function allAction(): \Psr\Http\Message\ResponseInterface
    {
        
        $content = $this->configurationManager->getContentObject();
        $flexFormString = $content->data['pi_flexform'];
        $flexFormRaw = GeneralUtility::xml2array($flexFormString);
        
        $itemsPerPage = intval($flexFormRaw['data']['sDEF']['lDEF']['settings.itemPerPage']['vDEF']);
        $maximumLinks = intval($flexFormRaw['data']['sDEF']['lDEF']['settings.maximumLinks']['vDEF']);
        
        $projects = $this->projectRepository->findAll();        
        
        $currentPage = $this->request->hasArgument('currentPage') ? (int)$this->request->getArgument('currentPage') : 1;
        $paginator = new \TYPO3\CMS\Extbase\Pagination\QueryResultPaginator($projects, $currentPage, $itemsPerPage);
        $pagination = new \GeorgRinger\NumberedPagination\NumberedPagination($paginator, $maximumLinks);
        $this->view->assign('pagination', [
            'paginator' => $paginator,
            'pagination' => $pagination,
        ]);
        
        

        $this->view->assign('projects', $projects);
        return $this->htmlResponse();
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
     * action lecturer
     *
     * @return \Psr\Http\Message\ResponseInterface
     */
    public function lecturerAction(): \Psr\Http\Message\ResponseInterface
    {
        return $this->htmlResponse();
    }
}
