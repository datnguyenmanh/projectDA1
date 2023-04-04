<div class="relative overflow-x-auto">
  <table class="w-full text-sm text-left text-gray-500 dark:text-gray-400">
    <thead class="text-xs text-gray-700 uppercase bg-gray-50 dark:bg-gray-700 dark:text-gray-400">
      <tr>
        <th scope="col" class="px-6 py-3">
          ID
        </th>
        <th scope="col" class="px-6 py-3">
          Name
        </th>
        <th scope="col" class="px-6 py-3">
          Price
        </th>
        <th scope="col" class="px-6 py-3">
          Actions
        </th>
      </tr>
    </thead>
    <tbody>
      <a href="<?= ADMIN_URL . 'add-product' ?>">
        <button type="button" class="text-white bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:ring-blue-300
         font-medium rounded-lg text-sm px-5 py-2.5 mr-2 mb-2 dark:bg-blue-600 dark:hover:bg-blue-700
          focus:outline-none dark:focus:ring-blue-800">Add</button>
      </a>
      <?php foreach ($list as $key) : ?>
      <tr class="bg-white border-b dark:bg-gray-800 dark:border-gray-700">
        <td class="px-6 py-4"><?= $key['product_name'] ?></td>
        <td class="px-6 py-4"><?= $key['price'] ?></td>
        <td class="px-6 py-4"><?= $key['detail'] ?></td>
        <td class="px-6 py-4"><a href=" <?= ADMIN_URL . 'edit-product?id=' . $key['category_id'] ?>">Sửa</a></td>
        <td><a href="<?= ADMIN_URL . 'delete-product?id=' . $key['category_id'] ?>">Xóa</a></td>
      </tr>
      <?php endforeach; ?>
    </tbody>
  </table>
</div>