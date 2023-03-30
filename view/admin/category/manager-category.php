<div class="table-responsive">
    <table>
        <thead>
            <tr>
                <th>ID</th>
                <th>Tên Danh Mục</th>
                
            </tr>
        </thead>
        <tbody>
            <?php foreach ($dscategory as $key):?>
               <tr>
                <td><?= $key['category_id'] ?></td>
                <td><?= $key['category_name'] ?></td>
                <td><a href="<?= ADMIN_URL . 'edit-category?id=' . $key['category_id'] ?>">Sửa</a></td>
                <td><a href="<?= ADMIN_URL . 'delete-category?id=' . $key['category_id'] ?>">Xóa</a></td>
                
               </tr>
            

           <?php endforeach; ?>
        </tbody>
    </table>
</div>