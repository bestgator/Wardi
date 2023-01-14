<option value=""><?php echo e($langg->lang158); ?></option>
<?php if(Auth::check()): ?>
	
	<option value="Riyadh" <?php echo e(Auth::user()->city == 'Riyadh' ? 'selected' : ''); ?>>Riyadh</option>
	<option value="Jeddah" <?php echo e(Auth::user()->city == 'Jeddah' ? 'selected' : ''); ?>>Jeddah</option>	
	<option value="Mecca" <?php echo e(Auth::user()->city == 'Mecca' ? 'selected' : ''); ?>>Mecca</option>	
	<option value="Medina" <?php echo e(Auth::user()->city == 'Medina' ? 'selected' : ''); ?>>Medina</option>	
	<option value="Ad Dammām" <?php echo e(Auth::user()->city == 'Ad Dammām' ? 'selected' : ''); ?>>Ad Dammam</option>	
	<option value="Al Hufuf" <?php echo e(Auth::user()->city == 'Al Hufuf' ? 'selected' : ''); ?>>Al Hufuf</option>	
	<option value="Buraydah" <?php echo e(Auth::user()->city == 'Buraydah' ? 'selected' : ''); ?>>Buraydah</option>	
	<option value="Al Hillah" <?php echo e(Auth::user()->city == 'Al Hillah' ? 'selected' : ''); ?>>Al Al Hillah</option>	
	<option value="At Taif" <?php echo e(Auth::user()->city == 'At Taif' ? 'selected' : ''); ?>>At Taif</option>	
	<option value="Tabuk" <?php echo e(Auth::user()->city == 'Tabuk' ? 'selected' : ''); ?>>Tabuk</option>	
	<option value="Khamis Mushayt" <?php echo e(Auth::user()->city == 'Khamis Mushayt' ? 'selected' : ''); ?>>Khamis Mushayt</option>	
	<option value="Hail" <?php echo e(Auth::user()->city == 'Hail' ? 'selected' : ''); ?>>Hail</option>	
	<option value="Al Qatif" <?php echo e(Auth::user()->city == 'Al Qatif' ? 'selected' : ''); ?>>Al Qatif</option>	
	<option value="Al Mubarraz" <?php echo e(Auth::user()->city == 'Al Mubarraz' ? 'selected' : ''); ?>>Al Mubarraz</option>	
	<option value="Al Kharj" <?php echo e(Auth::user()->city == 'Al Kharj' ? 'selected' : ''); ?>>Al Kharj</option>	
	<option value="Najrān" <?php echo e(Auth::user()->city == 'Najrān' ? 'selected' : ''); ?>>Najran</option>	
	<option value="Abha" <?php echo e(Auth::user()->city == 'Abha' ? 'selected' : ''); ?>>Abha</option>	
	<option value="Arar" <?php echo e(Auth::user()->city == 'Arar' ? 'selected' : ''); ?>>Arar</option>	
	<option value="Sakaka" <?php echo e(Auth::user()->city == 'Sakaka' ? 'selected' : ''); ?>>Sakaka</option>	
	<option value="Jazan" <?php echo e(Auth::user()->city == 'Jazan' ? 'selected' : ''); ?>>Jazan</option>
	<option value="Al Bahah" <?php echo e(Auth::user()->city == 'Al Bahah' ? 'selected' : ''); ?>>Al Bahah</option>			
<?php else: ?>
	<option value="Riyadh" >Riyadh</option>	
	<option value="Jeddah" >Jeddah</option>	
	<option value="Mecca" >Mecca</option>	
	<option value="Medina" >Medina</option>	
	<option value="Ad Dammām" >Ad Dammam</option>	
	<option value="Al Hufuf" >Al Hufuf</option>	
	<option value="Buraydah" >Buraydah</option>	
	<option value="Al Hillah" >Al Hillah</option>	
	<option value="At Taif" >At Taif</option>	
	<option value="Tabuk" >Tabuk</option>	
	<option value="Khamis Mushayt" >Khamis Mushayt</option>	
	<option value="Hail" >Hail</option>	
	<option value="Al Qatif" >Al Qatif</option>	
	<option value="Al Mubarraz" >Al Mubarraz</option>	
	<option value="Al Kharj" >Al Kharj</option>	
	<option value="Najrān" >Najran</option>	
	<option value="Abha" >Abha</option>	
	<option value="Arar" >Arar</option>	
	<option value="Sakaka" >Sakaka</option>	
	<option value="Jazan" >Jazan</option>
	<option value="Al Bahah" >Al Bahah</option>		

<?php endif; ?>



<?php /**PATH /usr/local/var/www/wardi/resources/views/includes/cities.blade.php ENDPATH**/ ?>