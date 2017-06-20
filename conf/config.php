<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.3.1';

// Database
$Configuration['Database']['Name'] = 'vanilladb';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = 'root';
$Configuration['Database']['Password'] = '';

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['GettingStarted'] = 'GettingStarted';
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';

// Garden
$Configuration['Garden']['Title'] = 'Vanilla';
$Configuration['Garden']['Cookie']['Salt'] = 'oOBIqQj7lQ9ceahT';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = true;
$Configuration['Garden']['Email']['SupportName'] = 'Vanilla';
$Configuration['Garden']['Email']['Format'] = 'text';
$Configuration['Garden']['SystemUserID'] = '1';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.3.1';
$Configuration['Garden']['Cdns']['Disable'] = false;
$Configuration['Garden']['CanProcessImages'] = true;
$Configuration['Garden']['Installed'] = true;

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';

// Routes
$Configuration['Routes']['DefaultController'] = 'discussions';

// Vanilla
$Configuration['Vanilla']['Version'] = '2.3.1';

// Last edited by gdsa006 (127.0.0.1)2017-06-20 10:06:32