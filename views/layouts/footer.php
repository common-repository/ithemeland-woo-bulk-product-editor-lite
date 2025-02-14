<?php
if (!defined('ABSPATH')) exit; // Exit if accessed directly
?>

<input type="hidden" id="wcbel-last-modal-opened" value="">

<div class='wcbel-thumbnail-hover-box'></div>
</div>

<?php
include_once WCBEL_VIEWS_DIR . "bulk_edit/bulk_edit_form.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/filter_form.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/variations.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/columns_modals/select_products.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/columns_modals/gallery.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/columns_modals/new_product_taxonomy.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/columns_modals/new_product_attribute.php";
include_once WCBEL_VIEWS_DIR . "bulk_edit/columns_modals/select_files.php";
include_once WCBEL_VIEWS_DIR . "column_manager/main.php";
include_once WCBEL_VIEWS_DIR . "column_manager/edit_preset.php";
include_once WCBEL_VIEWS_DIR . "import_export/main.php";
include_once WCBEL_VIEWS_DIR . "meta_field/main.php";
include_once WCBEL_VIEWS_DIR . "settings/main.php";
include_once WCBEL_VIEWS_DIR . "history/main.php";
include_once WCBEL_VIEWS_DIR . "modals/text_editor.php";
include_once WCBEL_VIEWS_DIR . "modals/image.php";
include_once WCBEL_VIEWS_DIR . "modals/file.php";
include_once WCBEL_VIEWS_DIR . "modals/numeric_calculator.php";
include_once WCBEL_VIEWS_DIR . "modals/duplicate_item.php";
include_once WCBEL_VIEWS_DIR . "modals/new_item.php";
include_once WCBEL_VIEWS_DIR . "modals/filter_profiles.php";
include_once WCBEL_VIEWS_DIR . "modals/column_profiles.php";
