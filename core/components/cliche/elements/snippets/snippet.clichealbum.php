<?php/** * Snippet ClicheAlbum * * @package cliche *//** * Cliche * * A Gallery manager components for MODx Revolution * * @author Stephane Boulard <lossendae@gmail.com> * @package cliche */$Cliche = $modx->getService('cliche','Cliche',$modx->getOption('cliche.core_path',null,$modx->getOption('core_path').'components/cliche/').'model/cliche/',$scriptProperties);if (!($Cliche instanceof Cliche)) return 'Cliche could not be loaded';$controller = $Cliche->loadController('Items');$output = $controller->run($scriptProperties);return $output;