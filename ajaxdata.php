<?php
include_once 'koneksi.php';

if (isset($_POST['id_anggaran'])) {
	$query = "SELECT * FROM riasan where id_jns_rias=" . $_POST['id_anggaran'];
	$result = $db->query($query);
	if ($result->num_rows > 0) {
		echo '<option value="">Jenis Riasan</option>';
		while ($row = $result->fetch_assoc()) {
			echo '<option value=' . $row['id_jns_rias'] . '>' . $row['riasan'] . '</option>';
		}
	} else {

		echo '<option>tidak ada paket</option>';
	}
} elseif (isset($_POST['id_paket'])) {


	$query = "SELECT * FROM city where s_id=" . $_POST['state_id'];
	$result = $db->query($query);
	if ($result->num_rows > 0) {
		echo '<option value="">Select City</option>';
		while ($row = $result->fetch_assoc()) {
			echo '<option value=' . $row['id'] . '>' . $row['city_name'] . '</option>';
		}
	} else {

		echo '<option>No City Found!</option>';
	}
}
