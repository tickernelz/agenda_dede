/*
 *  Document   : tables_datatables.js
 *  Author     : pixelcave
 *  Description: Custom JS code used in Plugin Init Example Page
 */

// DataTables, for more examples you can check out https://www.datatables.net/
class pageTablesDatatables {
	/*
	 * Init DataTables functionality
	 *
	 */
	static initDataTables() {
		// Override a few DataTable defaults
		jQuery.extend(jQuery.fn.dataTable.ext.classes, {
			sWrapper: "dataTables_wrapper dt-bootstrap4"
		});

        // Override a few defaults
        jQuery.extend(true, jQuery.fn.dataTable.defaults, {
            language: {
                lengthMenu: "_MENU_",
                search: "_INPUT_",
                searchPlaceholder: "Cari..",
                emptyTable: "Data Kosong",
                info: "Halaman <strong>_PAGE_</strong> dari <strong>_PAGES_</strong>",
                paginate: {
                    first: '<i class="fa fa-angle-double-left"></i>',
                    previous: '<i class="fa fa-angle-left"></i>',
                    next: '<i class="fa fa-angle-right"></i>',
                    last: '<i class="fa fa-angle-double-right"></i>'
                }
            }
        });

		// Init full DataTable
		jQuery('.js-dataTable-full').dataTable({
			pageLength: 5,
			lengthMenu: [[5, 10, 20], [5, 10, 20]],
			autoWidth: false,
            columnDefs: [
                {type: 'natural', targets: '_all'}
            ]
		});
	}

	/*
	 * Init functionality
	 *
	 */
	static init() {
		this.initDataTables();
	}
}

// Initialize when page loads
jQuery(() => { pageTablesDatatables.init(); });
