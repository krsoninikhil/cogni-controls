<?php //$c2 = json_decode($c2, true); ?>
<script type="text/javascript" src="public/js/control2.js"></script>
<div class="col-sm-12 c2">
	<div class="login-control"><h2>Control-2: Allotments (Kit, ID and Room)</h2></div>
	<div class="login-control">
		<span class="mdm-font">Pending allotments: <span class="label label-warning"><?= sizeof($c2) ?></span><br />
		</span><span class="btn btn-success">Refresh</span><img src="/public/images/loading.gif" class="loading" />
	</div>
	<div class="login-control" id="info"></div>
	<table class="table table-striped allotments">
		<tr>
			<th>Cogni-ID</th> <!-- Email is also allowed here, but its deprecated. -->
			<th>Check-In ID</th> <!-- Email is also allowed here, but its deprecated. -->
			<th>Kit Issued</th>
			<th>ID Issued</th>
			<th>Bhawan</th>
			<th>Room No.</th>
			<th></th>
		</tr>
		<?php if (sizeof($c2) == 0){ ?>
			<h4 class="login-control" id="info">Grab a cup of coffee or take a nap, no pending allotments for now.</h4>
		<?php } ?>

		<?php foreach ($c2 as $key => $value) { ?>
			<tr id="row_<?= $value['receipt_id'] ?>">
				<td id="cogni_id"><?= $value['cogni_id'] ?></td>
				<td id="cogni_id"><?= $value['receipt_id'] ?></td>
				<td><input type="checkbox" class="form-control" name="kit_<?= $value['receipt_id'] ?>" value="1" id="kit_<?= $value['receipt_id'] ?>" <?php if ($value['kit_issued']) echo 'checked'; ?>></td>
				<td><input type="checkbox" class="form-control" name="id_<?= $value['receipt_id'] ?>" value="1" id="id_<?= $value['receipt_id'] ?>" <?php if ($value['id_issued']) echo 'checked'; ?>></td>
				<td><input type="text" class="form-control" placeholder="Bhawan" name="bhawan_<?= $value['receipt_id'] ?>" id="bhawan_<?= $value['receipt_id'] ?>"></td>
				<td><input type="text" class="form-control" placeholder="Room No." name="room<?= $value['receipt_id'] ?>" id="room_<?= $value['receipt_id'] ?>"></td>
				<td><span class="btn btn-success allot" id="<?= $value['receipt_id'] ?>">Allot</span></td>
			</tr>
		<?php } ?>
	</table>
</div>