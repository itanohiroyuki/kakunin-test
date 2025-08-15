<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/confirm.css')); ?>" />
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="confirm__content">
        <div class="confirm__heading">
            <h2>confirm</h2>
        </div>
        <form class="form" action="/contacts" method="post">
            <?php echo csrf_field(); ?>
            <div class="confirm-table">
                <table class="confirm-table__inner">
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お名前</th>
                        <td class="confirm-table__text">
                            <input type="text" name="first_name" value="<?php echo e($contact['first_name']); ?>" readonly />
                            <input type="text" name="last_name" value="<?php echo e($contact['last_name']); ?>" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">性別</th>
                        <td class="confirm-table__text">
                            <input type="text" name="gender" value="<?php echo e($contact['gender']); ?>" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">メールアドレス</th>
                        <td class="confirm-table__text">
                            <input type="email" name="email" value="<?php echo e($contact['email']); ?>" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">電話番号</th>
                        <td class="confirm-table__text">
                            <input type="tel" name="tel1" value="<?php echo e($contact['tel1']); ?>" readonly />
                            <input type="tel" name="tel2" value="<?php echo e($contact['tel2']); ?>" readonly />
                            <input type="tel" name="tel3" value="<?php echo e($contact['tel3']); ?>" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">住所</th>
                        <td class="confirm-table__text">
                            <input type="text" name="address" value="<?php echo e($contact['address']); ?>" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">建物名</th>
                        <td class="confirm-table__text">
                            <input type="text" name="building" value="<?php echo e($contact['building']); ?>" readonly />
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせの種類</th>
                        <td class="confirm-table__text">
                            <p><?php echo e($categories->find($contact['category_id'])->content); ?></p>
                            <input type="hidden" name="category_id" value="<?php echo e($contact['category_id']); ?>">
                        </td>
                    </tr>
                    <tr class="confirm-table__row">
                        <th class="confirm-table__header">お問い合わせ内容</th>
                        <td class="confirm-table__text">
                            <input type="text" name="detail" value="<?php echo e($contact['detail']); ?>" readonly />
                        </td>
                    </tr>
                </table>
            </div>
            <div class="form__button">
                <button class="form__button-submit" type="submit">送信</button>
                <a class="form__button-edit" href="/">修正</a>
            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/confirm.blade.php ENDPATH**/ ?>