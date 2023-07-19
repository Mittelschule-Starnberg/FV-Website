<?php

namespace Vendor\Site\DataSources;

use Neos\Flow\Annotations as Flow;
use Neos\Flow\Persistence\PersistenceManagerInterface;
use Neos\Neos\Domain\Service\UserService;
use Neos\Neos\Service\DataSource\AbstractDataSource;
use Neos\ContentRepository\Domain\Model\NodeInterface;

class LinkTypes extends AbstractDataSource {

    /**
     * @Flow\Inject
     * @var Neos\ContentRepository\Domain\Service\ContextFactoryInterface
     */
    protected $contextFactory;

    static protected $identifier = 'fms-link-types';

    /**
     * @Flow\Inject
     * @var UserService
     */
    protected $userService;

    /**
     * @Flow\Inject
     * @var PersistenceManagerInterface
     */
    protected $persistenceManager;

    public function getData(NodeInterface $node = null, array $arguments = []) {
        return array(
            ["value" => 'InternalLink', 'label' => 'Default'],
            ["value" => 'ExternalLink', 'label' => 'Extern'],
            ["value" => 'DownloadLink', 'label' => 'Download'],
        );
    }
}
