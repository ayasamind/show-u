<?php
/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     3.0.0
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\View;

use Cake\View\View;

/**
 * Application View
 *
 * Your application’s default view class
 *
 * @link https://book.cakephp.org/3.0/en/views.html#the-app-view
 */
class AppView extends View
{

    /**
     * Initialization hook method.
     *
     * Use this method to add common initialization code like loading helpers.
     *
     * e.g. `$this->loadHelper('Html');`
     *
     * @return void
     */
    public function initialize()
    {
        $this->loadHelper('Form', [
            'templates' => 'input',
        ]);
    }

    public function render($view = null, $layout = null)
     {
       $title = 'Show-U';
       $content_header = '';
       if (array_key_exists('title_for_layout', $this->viewVars)) {
           $title = $this->viewVars['title_for_layout'] . ' - ' . $title;
           $content_header = "<h5 class='header center'>". $this->viewVars['title_for_layout'] ."</h5>";
       }
       $this->assign('title', $title);
       $this->assign('content_header', $content_header);
       return parent::render($view, $layout);
     }
}
