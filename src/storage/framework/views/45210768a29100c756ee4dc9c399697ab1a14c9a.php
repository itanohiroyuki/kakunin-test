<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/admin.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <h2>Admin</h2>

    <!-- 検索フォーム -->
    <form class="search-form">
        <input type="text" placeholder="名前やメールアドレスを入力してください">
        <select>
            <option>性別</option>
        </select>
        <select>
            <option>お問い合わせの種類</option>
        </select>
        <select>
            <option>年/月/日</option>
        </select>
        <button type="submit" class="search-btn">検索</button>
        <button type="reset" class="reset-btn">リセット</button>
    </form>

    <!-- エクスポートボタン -->
    <button class="export-btn">エクスポート</button>

    <!-- テーブル -->
    <table class="admin-table">
        <thead>
            <tr>
                <th>お名前</th>
                <th>性別</th>
                <th>メールアドレス</th>
                <th>お問い合わせの種類</th>
                <th></th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>山田 太郎</td>
                <td>男性</td>
                <td>test@example.com</td>
                <td>商品の交換について</td>
                <td><button class="detail-btn">詳細</button></td>
            </tr>
            <!-- 他の行も同じ -->
        </tbody>
    </table>

    <!-- ページネーション -->
    <div class="pagination">
        <button>&lt;</button>
        <button class="active">1</button>
        <button>2</button>
        <button>3</button>
        <button>4</button>
        <button>5</button>
        <button>&gt;</button>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/admin.blade.php ENDPATH**/ ?>