<table class="table table-hover table-bordered border-primary" style="text-align: center;margin:auto; width: 95%;margin-top: 40px" >
    <tr>
        <th>Mã hàng hóa</th>
        <th>Tên hàng hóa</th>
        <th>Loại hàng hóa</th>
        <th>Giá cả</th>
    </tr>
    <?php foreach ($item_list as $key => $item): ?>
        <tr>
            <td>
                <a href="index.php?page=employee-infor&id=<?php echo $item['id']; ?>">
                    <?php echo $item['ten_hang']; ?></a>
            </td>
            <td><?php echo $item['loai_hang'] ?></td>
            <td><?php echo $item['gia_ca'] ?></td>
            <td>
                <button type="submit" class="btn btn-warning"><a
                        onclick="return confirm('Do you want to delete this item <?php echo $item['ten_hang'] ?>')"
                        href="index.php?page=employee-delete&id=<?php echo $item['id'] ?>">Delete</a></button>
            </td>

        </tr>
    <?php endforeach; ?>
</table>
