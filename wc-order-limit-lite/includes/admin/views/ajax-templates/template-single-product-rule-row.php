<div class="wc-metabox wcol-new open">
	<input type="hidden" name="wcol_rules[rule-id][<?php echo esc_html($_POST['wcol_spid']); ?>]" value="<?php echo uniqid(); ?>"/>
	<input type="hidden" name="wcol_rules[wcol_rule_key][<?php echo esc_html($_POST['wcol_spid']); ?>]"/>
	<h3><?php esc_html_e('New Rule(Not Saved)', 'xsollwc-domain') ?><span class="wcol-delete"><?php esc_html_e('Delete', 'xsollwc-domain') ?></span></h3>
	<div class="wc-metabox-content">
		<div class="options_group">
			<p class="form-field">
				<label><?php esc_html_e('Minimum Order', 'xsollwc-domain') ?>:</label>
				<input type="number" min="0"  name="wcol_rules[wcol_min_order_limit][<?php echo esc_html($_POST['wcol_spid']); ?>]" class="wcol-rule-min-limit" value="" placeholder="<?php esc_html_e('Enter Minimum Order Limit', 'xsollwc-domain') ?>" />
			</p>
			<p class="wcol-description"><?php esc_html_e('Leave blank for no limit.', 'xsollwc-domain') ?></p>
		</div>
							
		<div class="options_group">
			<p class="form-field">
				<label><?php esc_html_e('Enable Maximum Limit', 'xsollwc-domain') ?>:</label>
				<input type="hidden" class="wcol-loop-checkbox-hidden" name="wcol_rules[enable-max-rule-limit][<?php echo esc_html($_POST['wcol_spid']); ?>]" />
				<input type="checkbox" class="wcol-loop-checkbox enable-max-rule-limit" min="0"/>
			</p>
			<p class="form-field wcol-hidden">
				<label><?php esc_html_e('Maximum Order', 'xsollwc-domain') ?>:</label>
				<input type="number" class="wcol-rule-max-limit" min="0"  name="wcol_rules[wcol_max_order_limit][<?php echo esc_html($_POST['wcol_spid']); ?>]" placeholder="<?php esc_html_e('Enter Maximum Order Limit', 'xsollwc-domain') ?>" />
			</p>
		</div>
		<div class="options_group">
			<p class="form-field">
				<label><?php esc_html_e('Applied on', 'xsollwc-domain') ?>:</label>
				<?php 
				$applied_on_ajax_options = '<option value="amount" >'. __('Amount', 'xsollwc-domain').'</option>';
				$applied_on_ajax_options .= '<option value="quantity" >'. __('Quantity', 'xsollwc-domain') .'</option>';
				$applied_on_ajax_options = apply_filters('wcol_applied_on_ajax_option' , $applied_on_ajax_options );
				?>
				<select name="wcol_rules[wcol_applied_on][<?php echo esc_html($_POST['wcol_spid']); ?>]" >
					<?php echo $applied_on_ajax_options; ?>
				</select>
			</p>
			<p class="wcol-description"><?php esc_html_e('Select if limit will be applied on quantity or amount.', 'xsollwc-domain') ?></p>
		</div>
	</div>
</div>