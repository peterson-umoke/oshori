<?php 

class Navigation_model extends CI_Model {

	/**
	 * The following syntax should be used for the model
	 * item => array(
	 * 	'name' => 'name_of_menu',
	 * 	'icon_name' => 'fa fa-icon-o',
	 * 	'has_children' => false,
	 * 	'children_items' => array(
	 * 		array(
	 * 			...
	 * 		),
	 * 		array(
	 * 			...
	 * 		),
	 * 	)
	 * )
	 */

	public $nav_items = array();

	public function __construct() {
		parent::__construct();
	}

	public function admin_menu() {
		return $this->nav_items = array(
				"parent_item" => array(
						"name" => "dashboard",
						"icon" => "fa fa-stats",
						"link"	=> "backoffice/dashboard/welcome",
						"has_children" => false,
						"children_items" => array(),
					),
				"parent_item" => array(
						"name" => "pages",
						"icon" => "fa fa-circle-o",
						"link" => "backoffice/pages",
						"has_children" => true,
						"children_items" => array(
							array(
								"name" => "all pages",
								"icon" => "fa fa-write",
								"link" => "backoffice/pages/all",
								"has_children" => false,
								"children_items" => array(),
								),
							array(
								"name" => "add new page",
								"icon" => "fa fa-write",
								"link" => "backoffice/pages/add_new_page",
								"has_children" => false,
								"children_items" => array(),
								),
							),
					),
				"parent_item" => array(
						"name" => "post",
						"icon" => "fa fa-avatar-o",
						"link"	=> "backoffice/posts",
						"has_children" => true,
						"children_items" => array(
								array(
								"name" => "all post",
								"icon" => "fa fa-write",
								"link" => "backoffice/post/all",
								"has_children" => false,
								"children_items" => array(),
								),
								array(
								"name" => "add new page",
								"icon" => "fa fa-write",
								"link" => "backoffice/pages/add_new_post",
								"has_children" => false,
								"children_items" => array(),
								),
								array(
								"name" => "categories",
								"icon" => "fa fa-tags",
								"link" => "backoffice/pages/post_categories",
								"has_children" => false,
								"children_items" => array(),
								),
							),
					),
				"parent_item" => array(
						"name" => "settings",
						"icon" => "fa fa-avatar-o",
						"link"	=> "backoffice/settings",
						"has_children" => true,
						"children_items" => array(
								array(
								"name" => "general",
								"icon" => "fa fa-cog",
								"link" => "backoffice/settings/general",
								"has_children" => false,
								"children_items" => array(),
								),
								array(
								"name" => "add new page",
								"icon" => "fa fa-write",
								"link" => "backoffice/settings/add_new_post",
								"has_children" => false,
								"children_items" => array(),
								),
							),
					),

			);

	}

	public function frontpage_menu() {

	}
}