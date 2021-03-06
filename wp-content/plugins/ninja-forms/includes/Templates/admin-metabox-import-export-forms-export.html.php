<div class="wrap">

    <form action="" method="post">

        <table class="form-table">
            <tbody>
                <tr id="row_nf_export_form">
                    <th scope="row">
                        <label for="nf_export_form"><?php echo __( 'Select a form', 'ninja-forms' ); ?></label>
                    </th>
                    <td>
                        <select name="nf_export_form" id="nf_export_form" class="widefat">
                            <?php foreach( $forms as $form ): ?>
                            <option value="<?php echo $form->get_id(); ?>"><?php echo $form->get_setting( 'title' ); ?></option>
                            <?php endforeach; ?>
                        </select>
                    </td>
                </tr>
                <tr id="row_nf_export_form_encoding">
                    <th scope="row">
                        <label for="nf_export_form_turn_off_encoding"><?php
	                        _e( 'Disable UTF-8 Encoding', 'ninja-forms' );
	                        ?></label>
                    </th>
                    <td>
                        <input type="checkbox" name="nf_export_form_turn_off_encoding"
                               id="nf_export_form_turn_off_encoding">
	                    <label style="color:red;font-style: italic;"
			                    for="nf_import_form_turn_off_encoding">
		                    If you are having trouble with form imports, please
		                    click here to disable UTF-8 encoding and try again.
	                    </label>
                    </td>
                </tr>
                <tr id="row_nf_export_form_submit">
	                <th scope="row">
		                <label for="nf_export_form_submit"><?php _e( 'Export Form', 'ninja-forms' ); ?></label>
	                </th>
	                <td>
		                <input type="submit" id="nf_export_form_submit" class="button-secondary" value="<?php echo __( 'Export Form', 'ninja-forms' ) ;?>">
	                </td>
                </tr>
            </tbody>
        </table>

    </form>

</div>