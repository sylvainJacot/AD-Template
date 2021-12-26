<?php

add_action('acf/init', 'febecoop_acf_init');
function febecoop_acf_init() {
	acf_update_setting('google_api_key', 'AIzaSyDo77UBqCntbsSfn1gkYyRwuqgjToez-5A');
}