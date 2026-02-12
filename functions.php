<?php
/**
 * Swishfolio functions and definitions.
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package WordPress
 * @subpackage Swishfolio
 * @since Swishfolio 1.0
 */

// Adds theme support for post formats.
if ( ! function_exists( 'swishfolio_post_format_setup' ) ) :
	/**
	 * Adds theme support for post formats.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return void
	 */
	function swishfolio_post_format_setup() {
		add_theme_support( 'post-formats', array( 'aside', 'audio', 'chat', 'gallery', 'image', 'link', 'quote', 'status', 'video' ) );
	}
endif;
add_action( 'after_setup_theme', 'swishfolio_post_format_setup' );

// Enqueues editor-style.css in the editors.
if ( ! function_exists( 'swishfolio_editor_style' ) ) :
	/**
	 * Enqueues editor-style.css in the editors.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return void
	 */
	function swishfolio_editor_style() {
		add_editor_style( 'assets/css/editor-style.css' );
	}
endif;
add_action( 'after_setup_theme', 'swishfolio_editor_style' );

// Enqueues the theme stylesheet on the front.
if ( ! function_exists( 'swishfolio_enqueue_styles' ) ) :
	/**
	 * Enqueues the theme stylesheet on the front.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return void
	 */
	function swishfolio_enqueue_styles() {
		$suffix = SCRIPT_DEBUG ? '' : '.min';
		$src    = 'style' . $suffix . '.css';

		wp_enqueue_style(
			'swishfolio-style',
			get_parent_theme_file_uri( $src ),
			array(),
			wp_get_theme()->get( 'Version' )
		);
		wp_style_add_data(
			'swishfolio-style',
			'path',
			get_parent_theme_file_path( $src )
		);
	}
endif;
add_action( 'wp_enqueue_scripts', 'swishfolio_enqueue_styles' );

// Registers custom block styles.
if ( ! function_exists( 'swishfolio_block_styles' ) ) :
	/**
	 * Registers custom block styles.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return void
	 */
	function swishfolio_block_styles() {
		register_block_style(
			'core/list',
			array(
				'name'         => 'checkmark-list',
				'label'        => __( 'Checkmark', 'swishfolio' ),
				'inline_style' => '
				ul.is-style-checkmark-list {
					list-style-type: "\2713";
				}

				ul.is-style-checkmark-list li {
					padding-inline-start: 1ch;
				}',
			)
		);

		// Navigation Styles - Using WordPress preset colors for style variation support
		register_block_style(
			'core/navigation',
			array(
				'name'         => 'neo-bordered',
				'label'        => __( 'Neo Bordered', 'swishfolio' ),
				'inline_style' => '
				.wp-block-navigation.is-style-neo-bordered .wp-block-navigation-item__content {
					border: var(--sf-border, 4px solid var(--wp--preset--color--contrast));
					padding: 0.5rem 1rem;
					background: var(--wp--preset--color--accent-5);
					box-shadow: var(--sf-shadow-sm, 4px 4px 0px 0px var(--wp--preset--color--contrast));
					transition: all 0.1s ease-out;
				}
				.wp-block-navigation.is-style-neo-bordered .wp-block-navigation-item__content:hover {
					background: var(--wp--preset--color--accent-1);
					box-shadow: var(--sf-shadow-md, 6px 6px 0px 0px var(--wp--preset--color--contrast));
					transform: var(--sf-hover-transform, translate(-2px, -2px));
				}
				.wp-block-navigation.is-style-neo-bordered .wp-block-navigation-item__content:active {
					box-shadow: none;
					transform: var(--sf-active-transform, translate(2px, 2px));
				}',
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'         => 'neo-pills',
				'label'        => __( 'Neo Pills', 'swishfolio' ),
				'inline_style' => '
				.wp-block-navigation.is-style-neo-pills .wp-block-navigation-item__content {
					border: var(--sf-border, 4px solid var(--wp--preset--color--contrast));
					border-radius: 9999px;
					padding: 0.5rem 1.5rem;
					background: var(--wp--preset--color--accent-2);
					box-shadow: var(--sf-shadow-sm, 4px 4px 0px 0px var(--wp--preset--color--contrast));
					transition: all 0.1s ease-out;
				}
				.wp-block-navigation.is-style-neo-pills .wp-block-navigation-item__content:hover {
					background: var(--wp--preset--color--accent-1);
					box-shadow: var(--sf-shadow-md, 6px 6px 0px 0px var(--wp--preset--color--contrast));
					transform: var(--sf-hover-transform, translate(-2px, -2px));
				}
				.wp-block-navigation.is-style-neo-pills .wp-block-navigation-item__content:active {
					box-shadow: none;
					transform: var(--sf-active-transform, translate(2px, 2px));
				}
				.wp-block-navigation.is-style-neo-pills .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content {
					background: var(--wp--preset--color--accent-3);
				}',
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'         => 'neo-minimal',
				'label'        => __( 'Neo Minimal', 'swishfolio' ),
				'inline_style' => '
				.wp-block-navigation.is-style-neo-minimal .wp-block-navigation-item__content {
					padding: 0.5rem 1rem;
					border-bottom: 4px solid transparent;
					transition: all 0.1s ease-out;
				}
				.wp-block-navigation.is-style-neo-minimal .wp-block-navigation-item__content:hover {
					border-bottom-color: var(--wp--preset--color--contrast);
					background: transparent;
					box-shadow: none;
				}
				.wp-block-navigation.is-style-neo-minimal .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content {
					border-bottom-color: var(--wp--preset--color--accent-1);
				}',
			)
		);

		register_block_style(
			'core/navigation',
			array(
				'name'         => 'neo-stacked',
				'label'        => __( 'Neo Stacked', 'swishfolio' ),
				'inline_style' => '
				.wp-block-navigation.is-style-neo-stacked {
					flex-direction: column;
					align-items: stretch;
				}
				.wp-block-navigation.is-style-neo-stacked .wp-block-navigation__container {
					flex-direction: column;
					gap: 0.5rem;
				}
				.wp-block-navigation.is-style-neo-stacked .wp-block-navigation-item__content {
					display: block;
					border: var(--sf-border, 4px solid var(--wp--preset--color--contrast));
					padding: 1rem 1.5rem;
					background: var(--wp--preset--color--accent-5);
					box-shadow: var(--sf-shadow-sm, 4px 4px 0px 0px var(--wp--preset--color--contrast));
					transition: all 0.1s ease-out;
				}
				.wp-block-navigation.is-style-neo-stacked .wp-block-navigation-item__content:hover {
					background: var(--wp--preset--color--accent-1);
					box-shadow: var(--sf-shadow-md, 6px 6px 0px 0px var(--wp--preset--color--contrast));
					transform: var(--sf-hover-transform, translate(-2px, -2px));
				}
				.wp-block-navigation.is-style-neo-stacked .wp-block-navigation-item__content:active {
					box-shadow: none;
					transform: var(--sf-active-transform, translate(2px, 2px));
				}
				.wp-block-navigation.is-style-neo-stacked .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content {
					background: var(--wp--preset--color--accent-2);
				}',
			)
		);

		// Terminal Navigation Style - CLI-inspired command prompt aesthetic
		register_block_style(
			'core/navigation',
			array(
				'name'         => 'terminal-cli',
				'label'        => __( 'Terminal CLI', 'swishfolio' ),
				'inline_style' => '
				.wp-block-navigation.is-style-terminal-cli {
					font-family: "Fira Code", "Monaco", "Consolas", monospace;
				}
				.wp-block-navigation.is-style-terminal-cli .wp-block-navigation-item__content {
					padding: 0.5rem 1rem;
					color: var(--wp--preset--color--contrast, #33ff00);
					background: transparent;
					border: none;
					box-shadow: none;
					text-transform: uppercase;
					letter-spacing: 0.05em;
					transition: all 0.15s ease-out;
					position: relative;
				}
				.wp-block-navigation.is-style-terminal-cli .wp-block-navigation-item__content::before {
					content: "";
					opacity: 0;
					transition: opacity 0.15s ease-out;
				}
				.wp-block-navigation.is-style-terminal-cli .wp-block-navigation-item__content:hover {
					color: var(--wp--preset--color--accent-2, #ffb000);
					text-shadow: 0 0 8px currentColor;
				}
				.wp-block-navigation.is-style-terminal-cli .wp-block-navigation-item__content:hover::before {
					content: "> ";
					opacity: 1;
				}
				.wp-block-navigation.is-style-terminal-cli .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content {
					color: var(--wp--preset--color--accent-2, #ffb000);
				}
				.wp-block-navigation.is-style-terminal-cli .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content::before {
					content: "> ";
					opacity: 1;
				}',
			)
		);

		// Terminal Bordered Navigation - with glowing borders
		register_block_style(
			'core/navigation',
			array(
				'name'         => 'terminal-bordered',
				'label'        => __( 'Terminal Bordered', 'swishfolio' ),
				'inline_style' => '
				.wp-block-navigation.is-style-terminal-bordered {
					font-family: "Fira Code", "Monaco", "Consolas", monospace;
				}
				.wp-block-navigation.is-style-terminal-bordered .wp-block-navigation-item__content {
					padding: 0.5rem 1rem;
					color: var(--wp--preset--color--contrast, #33ff00);
					background: var(--wp--preset--color--base, #0a0a0a);
					border: 1px solid var(--wp--preset--color--contrast, #33ff00);
					box-shadow: 0 0 5px color-mix(in srgb, var(--wp--preset--color--contrast, #33ff00) 30%, transparent);
					text-transform: uppercase;
					letter-spacing: 0.05em;
					transition: all 0.15s ease-out;
				}
				.wp-block-navigation.is-style-terminal-bordered .wp-block-navigation-item__content:hover {
					background: var(--wp--preset--color--contrast, #33ff00);
					color: var(--wp--preset--color--base, #0a0a0a);
					box-shadow: 0 0 15px color-mix(in srgb, var(--wp--preset--color--contrast, #33ff00) 50%, transparent);
				}
				.wp-block-navigation.is-style-terminal-bordered .wp-block-navigation-item.current-menu-item > .wp-block-navigation-item__content {
					background: var(--wp--preset--color--contrast, #33ff00);
					color: var(--wp--preset--color--base, #0a0a0a);
				}',
			)
		);
	}
endif;
add_action( 'init', 'swishfolio_block_styles' );

// Registers pattern categories.
if ( ! function_exists( 'swishfolio_pattern_categories' ) ) :
	/**
	 * Registers pattern categories.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return void
	 */
	function swishfolio_pattern_categories() {

		register_block_pattern_category(
			'swishfolio_page',
			array(
				'label'       => __( 'Pages', 'swishfolio' ),
				'description' => __( 'A collection of full page layouts.', 'swishfolio' ),
			)
		);

		register_block_pattern_category(
			'swishfolio_post-format',
			array(
				'label'       => __( 'Post formats', 'swishfolio' ),
				'description' => __( 'A collection of post format patterns.', 'swishfolio' ),
			)
		);
	}
endif;
add_action( 'init', 'swishfolio_pattern_categories' );

// Registers block binding sources.
if ( ! function_exists( 'swishfolio_register_block_bindings' ) ) :
	/**
	 * Registers the post format block binding source.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return void
	 */
	function swishfolio_register_block_bindings() {
		register_block_bindings_source(
			'swishfolio/format',
			array(
				'label'              => _x( 'Post format name', 'Label for the block binding placeholder in the editor', 'swishfolio' ),
				'get_value_callback' => 'swishfolio_format_binding',
			)
		);
	}
endif;
add_action( 'init', 'swishfolio_register_block_bindings' );

// Registers block binding callback function for the post format name.
if ( ! function_exists( 'swishfolio_format_binding' ) ) :
	/**
	 * Callback function for the post format name block binding source.
	 *
	 * @since Swishfolio 1.0
	 *
	 * @return string|void Post format name, or nothing if the format is 'standard'.
	 */
	function swishfolio_format_binding() {
		$post_format_slug = get_post_format();

		if ( $post_format_slug && 'standard' !== $post_format_slug ) {
			return get_post_format_string( $post_format_slug );
		}
	}
endif;
