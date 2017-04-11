<?php

class SiteController
{
    /**
     * @return bool
     */
    public function actionIndex()
    {
        require_once (ROOT.'/views/site/index.php');
        return true;
    }
}