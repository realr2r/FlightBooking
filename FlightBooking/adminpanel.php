<table>
    <thead>
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Password</th>
            <th>Status</th>
            <th>Action</th>
        </tr>
    </thead>r
    <tbody>
        <?php while($row = mysqli_fetch_array($result)): ?>
        <tr>
            <td><?php echo $row['id']; ?></td>
            <td><?php echo $row['name']; ?></td>
            <td><?php echo $row['email']; ?></td>
            <td><?php echo $row['password']; ?></td>
            <td><?php echo $row['status']; ?></td>
            <td>
                <a href="edit.php?id=<?php echo $row['id']; ?>">Edit</a>
                <a href="delete.php?id=<?php echo $row['id']; ?>">Delete</a>
                <a href="disable.php?id=<?php echo $row['id']; ?>">Disable</a>
            </td>
        </tr>
        <?php endwhile; ?>
    </tbody>
</table>
