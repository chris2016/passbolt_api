<?php
/**
 * Passbolt ~ Open source password manager for teams
 * Copyright (c) Passbolt SARL (https://www.passbolt.com)
 *
 * Licensed under GNU Affero General Public License version 3 of the or any later version.
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Passbolt SARL (https://www.passbolt.com)
 * @license       https://opensource.org/licenses/AGPL-3.0 AGPL License
 * @link          https://www.passbolt.com Passbolt(tm)
 * @since         2.0.0
 */
namespace App\Controller\Home;

use App\Controller\AppController;
use Cake\Event\Event;

class HomeController extends AppController
{
    /**
     * Password workspace page action
     *
     * @return void
     */
    public function index()
    {
        $this->viewBuilder()
            ->setLayout('default')
            ->setTemplatePath('/Home')
            ->setTemplate('home');

        $this->success();
    }
}