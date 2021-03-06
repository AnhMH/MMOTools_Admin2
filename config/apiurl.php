<?php

/**
 * API's Url
 */
use Cake\Core\Configure;

Configure::write('API.Timeout', 60);
Configure::write('API.secretKey', 'hoanganhonline.com');
Configure::write('API.rewriteUrl', array());

Configure::write('API.url_admins_login', 'admins/login');
Configure::write('API.url_admins_updateprofile', 'admins/updateprofile');

Configure::write('API.url_customers_list', 'customers/list');
Configure::write('API.url_customers_detail', 'customers/detail');
Configure::write('API.url_customers_addupdate', 'customers/addupdate');
Configure::write('API.url_customers_all', 'customers/all');

Configure::write('API.url_suppliers_list', 'suppliers/list');
Configure::write('API.url_suppliers_detail', 'suppliers/detail');
Configure::write('API.url_suppliers_addupdate', 'suppliers/addupdate');
Configure::write('API.url_suppliers_all', 'suppliers/all');

Configure::write('API.url_notices_list', 'notices/list');
Configure::write('API.url_notices_detail', 'notices/detail');
Configure::write('API.url_notices_addupdate', 'notices/addupdate');
Configure::write('API.url_notices_all', 'notices/all');

Configure::write('API.url_cates_list', 'cates/list');
Configure::write('API.url_cates_detail', 'cates/detail');
Configure::write('API.url_cates_addupdate', 'cates/addupdate');
Configure::write('API.url_cates_all', 'cates/all');

Configure::write('API.url_orders_addupdate', 'orders/addupdate');
Configure::write('API.url_orders_list', 'orders/list');
Configure::write('API.url_orders_detail', 'orders/detail');

Configure::write('API.url_reports_general', 'reports/general');

Configure::write('API.url_settings_detail', 'settings/detail');
Configure::write('API.url_settings_addupdate', 'settings/addupdate');

Configure::write('API.url_contacts_list', 'contacts/list');

Configure::write('API.url_weblinks_list', 'weblinks/list');
Configure::write('API.url_weblinks_detail', 'weblinks/detail');
Configure::write('API.url_weblinks_addupdate', 'weblinks/addupdate');
Configure::write('API.url_weblinks_all', 'weblinks/all');

Configure::write('API.url_posts_list', 'posts/list');
Configure::write('API.url_posts_detail', 'posts/detail');
Configure::write('API.url_posts_addupdate', 'posts/addupdate');
Configure::write('API.url_posts_all', 'posts/all');