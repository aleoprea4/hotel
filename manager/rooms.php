<h3>Create a new room</h3>
<form action="" method="post">
    <input type="text" name="room_number" placeholder="Numar camera">
    <input type="text" name="room_class" placeholder="Clasa camera">
    <input type="text" name="room_capacity" placeholder="Capacitate">
    <input type="text" name="room_price" placeholder="Pret">
    <input type="text" name="room_description" placeholder="Descriere">
    <button type="submit" name="create">Create a new room</button>
</form>

<?php
if (isset($_POST['create'])) {
    $room_number = mysqli_real_escape_string($dbconn, $_POST['room_number']);
    $room_class = mysqli_real_escape_string($dbconn, $_POST['room_class']);
    $room_capacity = mysqli_real_escape_string($dbconn, $_POST['room_capacity']);
    $room_price = mysqli_real_escape_string($dbconn, $_POST['room_price']);
    $room_description = mysqli_real_escape_string($dbconn, $_POST['room_description']);

    $sql_insert_room = "INSERT INTO rooms(room_num, room_class, capacity, price, description) 
    VALUES ($room_number, '$room_class', $room_capacity, $room_price, '$room_description')";
    $result_insert_room = mysqli_query($dbconn, $sql_insert_room);
    if ($result_insert_room) {
        echo "Ati adaugat cu success o camera noua";
    } else {
        echo "A aparut o eroare: " . mysqli_error($dbconn);
    }
}
?>

<form action="" method="post">
    <input type="text" name="id_room" placeholder="Id camera">
    <button type="submit" name="delete">Delete a room</button>
</form>

<?php
if (isset($_POST['delete'])) {
    $id_room = mysqli_real_escape_string($dbconn, $_POST['id_room']);
    $sql_delete_room = "DELETE FROM rooms WHERE id_room = $id_room";
    $result_delete_room = mysqli_query($dbconn, $sql_delete_room);
    if ($result_delete_room) {
        echo "Ati sters cu succes o camera.";
    } else {
        echo "A aparut o eroare: " . mysqli_error($dbconn);
    }
}
?>
