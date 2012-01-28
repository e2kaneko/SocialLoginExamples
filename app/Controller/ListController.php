<?php
class ListController extends AppController {
	public $name = 'list';
	public $helpers = array('Html','Form','Auth');
	public $components = array('Session');

	public function index() {
		$facebookUser = $this->Session->read('user.facebook');
		$this->set('facebookUser', $facebookUser);

		$twitterUser = $this->Session->read('user.twitter');
		$this->set('twitterUser', $twitterUser);

		$githubUser = $this->Session->read('user.github');
		$this->set('githubUser', $githubUser);

		$googleUser = $this->Session->read('user.google-plus');
		$this->set('googlePlusUser', $googleUser);
	}
}