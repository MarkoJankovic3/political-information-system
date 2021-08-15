<?php if(!empty($party)){ ?>
	<p><?php echo $party['name']?></p>
	<p><?php echo $party['party_organization']?></p>
	<p><?php echo $party['party_organization']?></p>

	<a href="<?php echo base_url() ?>index.php/party/joinParty/<?php echo $party['ppid']; ?>"class="btn btn-warning">Join party</a>

	<?php } else { ?>
		<p><?php echo $party['party_organization']?> not found...</p>
	<?php } ?>