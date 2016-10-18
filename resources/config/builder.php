<?php

return [

  /*
  |                                ))))
  |   _________ _______     __ooO_(O o)_Ooo____
  |  |          \      \   /     | (_)         \\===========\===========\
  |  |     __    \      \ /      |     __      |            |           |
  |  |    |__)    \      V      /|    |__)     |            |           |
  |  |            |\           / |            <            ┌┴┐         ┌┴┐
  |  |        ___/  |         |  |             \          _ \ \       /  |
  |  |       |      |         |  |      |\      \        | \_| |     |    \_
  |  |       |      |         |  |      | \      \        \___/  __  \      `-_
  |  |_______|      |_________|  |______|  |______|             /   \  ''-.    \
  |   ____   __ __  ____  _     ___      ___  ____             /    /      \    \
  |  |    \ |  |  ||    || |   |   \    /  _||    \            |   |        |   |
  |  | ()  )|  |  | |  | | |\\\\    \  /  |_ | ()  )           \    \      /    /
  |  |     ||  |  | |  | |  ( oo) () ||    _||    /             \    `-..-'    /
  |  | ()  ||  :  | |  | |   (_)     ||   |_ |    \       - --   '-_        _-'
  |  |_____| \__,_||____||____||_____||_____||__|\_|                `------'
  |  Addons scaffolder for maximum coding pleasure            - -- --------- -- -
  |
  |  Github: https://github.com/websemantics/builder-extension
  |
  */

	/*
	|--------------------------------------------------------------------------
	| Namespace
	|--------------------------------------------------------------------------
  |
	| A list of all stream namespaces used in this module.
	|
	| More control over code generated can be established per assignment,
	| for example, hide / show table columns and form fields per stream assignment,
	| also table column field view / template.
	|
	|	'namespaces' => [
	|		'namespace' => [
	|			'field_slug' => [
	|				'hide_column' => true,  *optional, (false by default)
	|				'hide_field'  => false,  *optional, (false by default)
	|				'column_template' => '<span class="label label-default">{value}</span>' *optional
	|			]
	|		]
	| ]
	|
	| Boolean Field Type:
	| ------------------
	| For boolean type there's a default column_template if it's value is set to,
	|  			'column_template'    =>  'default'
	| You can also have your own markup, for that there's two variables {class} & {value}
	| For example, '<span class="label label-{class}">{value}</span>'
	|
	|	*/

	'namespaces' => [
		'calendar' => [
			// 'field_slug_1' => [
			// 	'column_template'    => '<span class="label label-info">{value}</span>'
			// ],
			// 'field_slug_2' => [
			// 	'hide_column'        => true
			// ]
		]
	],

	/*
	|--------------------------------------------------------------------------
	| Seeder
	|--------------------------------------------------------------------------
  |
	| Trigger the module's seeder after a successful installation.
	|
	*/

	'seed' => false,

	/*
	|--------------------------------------------------------------------------
	| Relationship
	|--------------------------------------------------------------------------
  |
	| A default view template for a null relationship entry value.
	|
	*/

	'null_relationship_entry' => '<span class="label label-default">null</span>',

  /*
	|--------------------------------------------------------------------------
	| Entity
	|--------------------------------------------------------------------------
  |
	| Group stream entities from the same namespace in a single folder.
	|
	*/

	'group' => true,

  /*
	|--------------------------------------------------------------------------
	| Permissions
	|--------------------------------------------------------------------------
  |
	| Generate fields and streams permissions.
	|
	*/

	'permissions' => true,

  /*
	|--------------------------------------------------------------------------
	| Sitemap
	|--------------------------------------------------------------------------
  |
	| Generate sitemap from stream entries.
  |
  | Set the `stream_slug` to activate.
  |
	*/

	'sitemap' => [ 'stream_slug' => null,
                 'url_method' => '->path()',
                 'entries_method' => '->all()',
                 'priority' => 0.5,
                 'frequency' => 'monthly',
                 'images' => '[]',
                 'title' => 'null'
               ],

  /*
	|--------------------------------------------------------------------------
	| Module
	|--------------------------------------------------------------------------
  |
	| Set the module icon, http://fontawesome.io/icons.
	|
	*/

	'icon' => 'fa fa-calendar',

  /*
	|--------------------------------------------------------------------------
	| Home Page (WORK IN PROGRESS)
	|--------------------------------------------------------------------------
  |
	| Setup a landing page ('yes' / 'no').
  |
	*/

	'landing_page' => false,

	/*
	|--------------------------------------------------------------------------
	| Repository
	|--------------------------------------------------------------------------
  |
	| Extend all generated repositories to a common super class,
  | '\Anomaly\Streams\Platform\Entry\EntryRepository' by default.
  |
	*/

	'extends_repository' => 'Anomaly\Streams\Platform\Entry\EntryRepository',

	/*
	|--------------------------------------------------------------------------
	| Development
	|--------------------------------------------------------------------------
  |
  | To aid development alongside code generation, this setting will help
  | to protect all classes that you might change / have changed and want
  | the builder to skip when re-scaffolding the module.
  |
	| The builder expects the last part of a filename so that it can be
  | observed globally.
	|
	*/

	'avoid_overwrite' => [
		'Model.php',
		'Repository.php',
    'TableBuilder.php'/* ,
    'FormBuilder.php'
    'ModuleSeeder.php' */
	],

	/*
	|--------------------------------------------------------------------------
	| Docblock
	|--------------------------------------------------------------------------
	|	Docblock text to include with generated code.
	|
	*/

	'docblock' =>
' * @link      http://websemantics.ca
 * @link      http://ibuild.io
 * @author    WebSemantics, Inc. <info@websemantics.ca>
 * @author    Adnan M.Sagar, PhD. <adnan@websemantics.ca>'
];
