<!DOCTYPE html>
<html>

<head>
    <link rel="stylesheet" href="style.css">
    <title>Taasta andmed</title>
    <a href="insert.php">
        <p>Lisa isik</p>
    </a>
</head>

<body>
    <table>
        <tr>
            <td>Nimi </td>
            <td>sugu </td>
            <td>pikkus </td>
            <td>kaal </td>
            <td>synniaeg </td>
            <td>Action </td>
            <td>Action </td>
        </tr>

        <?php
        require_once('database.php');

        $sql = "SELECT * FROM isikud";
        $result = $conn->query($sql);

        if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
                echo "<tr>
            <td>" . $row["Nimi"] . "</td>
            <td>" . $row["sugu"] . "</td>
            <td>" . $row["pikkus"] . "</td>
            <td>" . $row["kaal"] . "</td>
            <td>" . $row["synniaeg"] . "</td>
            <td><a href='edit.php?id=" . $row["id"] . "'>Edit</a></td>
            <td><a href='delete.php?id=" . $row["id"] . "'>Delete</a></td>
            </tr>";
            }
        } else {
            echo "<tr><td colspan='7'>No results found</td></tr>";
        }
        $conn->close();
        ?>

    </table>
</body>

</html>