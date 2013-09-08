<?php
/**
 * Application level Controller
 *
 * This file is application-wide controller file. You can put all
 * application-wide controller-related methods here.
 *
 * PHP 5
 *
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.Controller
 * @since         CakePHP(tm) v 0.2.9
 */

App::uses('Controller', 'Controller');

/**
 * Application Controller
 *
 * Add your application-wide methods in the class below, your controllers
 * will inherit them.
 *
 * @package		app.Controller
 * @link		http://book.cakephp.org/2.0/en/controllers.html#the-app-controller
 */
class AppController extends Controller {

var $components = array(
    'FilterResults.Filter' => array(
        'auto' => array(
            'paginate' => false,
            'explode'  => true,  // recommended
        ),
        'explode' => array(
            'character'   => ' ',
            'concatenate' => 'AND',
        )
    ),
	'Session',
    'Auth' => array(
            'loginRedirect' => array('controller' => 'items', 'action' => 'index'),
            'logoutRedirect' => array('controller' => 'items', 'action' => 'index')
		)
	);

    public function beforeFilter() {
        $this->Auth->allow();
    }
var $helpers = array(
    'FilterResults.Search' => array(
        'operators' => array(
            'LIKE'       => 'containing',
            'NOT LIKE'   => 'not containing',
            'LIKE BEGIN' => 'starting with',
            'LIKE END'   => 'ending with',
            '='  => 'equal to',
            '!=' => 'different',
            '>'  => 'greater than',
            '>=' => 'greater or equal to',
            '<'  => 'less than',
            '<=' => 'less or equal to'
        )
    )
);
}
