<?php defined('SYSPATH') or die('No direct script access.');

/**
 * Appstore controller class.
 *
 * @author Jean-Nicolas Boulay Desjardins (http://jean-nicolas.name/)
 * @package default
 * @version 0.1
 */

class Controller_Appstore extends Controller_App {

	public function action_index() {

		$this->template->title = 'Store';

	}

	public function action_register() {

		if (Auth::instance()->logged_in()) {

			$this->template->title = 'Register Application';
			$view = $this->template->content = View::factory('app-store/register');
		}

	}

} // End Appstore
