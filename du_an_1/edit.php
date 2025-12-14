<?php include_once __DIR__ . '/../../layouts/AdminLayout.php'; ?>

<div class="container mt-4">
    <h2 class="mb-3">Sửa danh mục</h2>

    <?php if (!empty($_SESSION['error'])) : ?>
        <div class="alert alert-danger">
            <?= $_SESSION['error']; unset($_SESSION['error']); ?>
        </div>
    <?php endif; ?>

    <form action="<?= BASE_URL ?>categories/update/<?= $category['id'] ?>" method="POST">
        <div class="mb-3">
            <label class="form-label">Tên danh mục</label>
            <input type="text" name="name" class="form-control"
                   value="<?= $category['name'] ?>" required>
        </div>

        <div class="mb-3">
            <label class="form-label">Mô tả</label>
            <textarea name="description" class="form-control" rows="3"><?= $category['description'] ?></textarea>
        </div>

        <div class="mb-3">
            <label class="form-label">Trạng thái</label>
            <select name="status" class="form-select">
                <option value="1" <?= $category['status'] == 1 ? 'selected' : '' ?>>Hiển thị</option>
                <option value="0" <?= $category['status'] == 0 ? 'selected' : '' ?>>Ẩn</option>
            </select>
        </div>

        <button class="btn btn-success">Cập nhật</button>
        <a href="<?= BASE_URL ?>categories" class="btn btn-secondary">Quay lại</a>
    </form>
</div>
