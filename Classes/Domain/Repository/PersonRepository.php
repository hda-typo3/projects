<?php

declare(strict_types=1);

namespace Hda\Projects\Domain\Repository;


/**
 * This file is part of the "Person" Extension for TYPO3 CMS.
 *
 * For the full copyright and license information, please read the
 * LICENSE.txt file that was distributed with this source code.
 *
 * (c) 2022 Michael Lang <info@mediadesign-ffm.de>, Mediadesign
 */
class PersonRepository extends \TYPO3\CMS\Extbase\Persistence\Repository
{
    public function initializeObject()
    {

        /** @var $defaultQuerySettings \TYPO3\CMS\Extbase\Persistence\Generic\Typo3QuerySettings */
        $defaultQuerySettings = $this->objectManager->get('TYPO3\\CMS\\Extbase\\Persistence\\Generic\\Typo3QuerySettings');
        $defaultQuerySettings->setRespectStoragePage(FALSE);
    }

   
    
    public function findLecteurs($groups)
    {
        $query = $this->createQuery();
        $query->getQuerySettings()->setRespectStoragePage(FALSE);
        $query = $query->matching(
            $query->contains('usergroup', $groups)
            );
        $query->setOrderings(array('name' => \TYPO3\CMS\Extbase\Persistence\QueryInterface::ORDER_ASCENDING));
        return $query->execute();
        
    }    
}
