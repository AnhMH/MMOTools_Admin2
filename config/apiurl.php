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

Configure::write('API.url_links_list', 'links/list');
Configure::write('API.url_links_detail', 'links/detail');
Configure::write('API.url_links_addupdate', 'links/addupdate');
Configure::write('API.url_links_all', 'links/all');

Configure::write('API.url_fbaccounts_list', 'fbaccounts/list');
Configure::write('API.url_fbaccounts_detail', 'fbaccounts/detail');
Configure::write('API.url_fbaccounts_addupdate', 'fbaccounts/addupdate');
Configure::write('API.url_fbaccounts_all', 'fbaccounts/all');
Configure::write('API.url_fbaccounts_addtoken', 'fbaccounts/addtoken');
Configure::write('API.url_fbaccounts_checklive', 'fbaccounts/checklive');
Configure::write('API.url_fbaccounts_gettokenurl', 'fbaccounts/gettokenurl');
Configure::write('API.url_fbaccounts_updatepage', 'fbaccounts/updatepage');
Configure::write('API.url_fbaccounts_reupsearch', 'fbaccounts/reupsearch');

Configure::write('API.url_autocomments_list', 'autocomments/list');
Configure::write('API.url_autocomments_detail', 'autocomments/detail');
Configure::write('API.url_autocomments_addupdate', 'autocomments/addupdate');
Configure::write('API.url_autocomments_addupdatemulti', 'autocomments/addupdatemulti');
Configure::write('API.url_autocomments_all', 'autocomments/all');
Configure::write('API.url_autocomments_addtoken', 'autocomments/addtoken');

Configure::write('API.url_weblinks_list', 'weblinks/list');
Configure::write('API.url_weblinks_detail', 'weblinks/detail');
Configure::write('API.url_weblinks_addupdate', 'weblinks/addupdate');
Configure::write('API.url_weblinks_all', 'weblinks/all');

Configure::write('API.url_fbpages_all', 'fbpages/all');