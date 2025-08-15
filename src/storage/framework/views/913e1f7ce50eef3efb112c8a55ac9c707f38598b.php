<?php $__env->startSection('css'); ?>
    <link rel="stylesheet" href="<?php echo e(asset('css/index.css')); ?>">
<?php $__env->stopSection(); ?>

<?php $__env->startSection('content'); ?>
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="contact-form" action="/contacts/confirm" method="post">
            <?php echo csrf_field(); ?>
            <div class="contact-form__group">
                <div class="contact-form__title">
                    <span class="contact-form__label">お名前</span>
                    <!-- 注意マーク -->
                </div>
                <div class="contact-form__item">
                    <div class="contact-form__input">
                        <input type="text" name="first_name" placeholder="例:山田" value="<?php echo e(old('first_name')); ?>" />
                        <div class="form__error">
                            <?php $__errorArgs = ['first_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                    <div class="contact-form__input">
                        <input type="text" name="last_name" placeholder="例:太郎" value="<?php echo e(old('last_name')); ?>" />
                        <div class="form__error">
                            <?php $__errorArgs = ['last_name'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>
                </div>
            </div>

            <div class="contact-form__group">
                <div class="contact-form__title">
                    <span class="contact-form__label">性別</span>
                </div>
                <div class="contact-form__item">
                    <div class="contact-form__input">
                        <input type="radio" name="gender" value="1" id="gender1"
                            <?php if(old('gender') == 1): ?> checked <?php endif; ?>>
                        <label for="gender1">男性</label>

                        <input type="radio" name="gender" value="2" id="gender2"
                            <?php if(old('gender') == 2): ?> checked <?php endif; ?>>
                        <label for="gender2">女性</label>

                        <input type="radio" name="gender" value="3" id="gender3"
                            <?php if(old('gender') == 3): ?> checked <?php endif; ?>>
                        <label for="gender3">その他</label>
                    </div>
                </div>
                <div class="form__error">
                    <?php $__errorArgs = ['gender'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                        <?php echo e($message); ?>

                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                </div>
            </div>

            <div class="contact-form__group">
                <div class="contact-form__title">
                    <span class="contact-form__label">メールアドレス</span>
                </div>
                <div class="contact-form__item">
                    <div class="contact-form__input">
                        <input type="text" name="email" placeholder="例:test@example.com" value="<?php echo e(old('email')); ?>" />
                    </div>
                    <div class="form__error">
                        <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                            <?php echo e($message); ?>

                        <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                    </div>
                </div>

                <div class="contact-form__group">
                    <div class="contact-form__title">
                        <span class="contact-form__label">電話番号</span>
                    </div>
                    <div class="contact-form__item">
                        <div class="contact-form__input">
                            <input type="text" name="tel1" placeholder="080" value="<?php echo e(old('tel1')); ?>"> -
                            <div class="form__error">
                                <?php $__errorArgs = ['tel1'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <input type="text" name="tel2" placeholder="1234" value="<?php echo e(old('tel2')); ?>"> -
                            <div class="form__error">
                                <?php $__errorArgs = ['tel2'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                            <input type="text" name="tel3" placeholder="5678" value="<?php echo e(old('tel3')); ?>">
                            <div class="form__error">
                                <?php $__errorArgs = ['tel3'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="contact-form__group">
                    <div class="contact-form__title">
                        <span class="contact-form__label">住所</span>
                    </div>
                    <div class="contact-form__item">
                        <div class="contact-form__input">
                            <input type="text" name="address" placeholder="例:東京都渋谷区千駄ヶ谷1-2-3"
                                value="<?php echo e(old('address')); ?>">
                        </div>
                        <div class="form__error">
                            <?php $__errorArgs = ['address'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <?php echo e($message); ?>

                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>
                    </div>

                    <div class="contact-form__group">
                        <div class="contact-form__title">
                            <span class="contact-form-label">建物名</span>
                        </div>
                        <div class="contact-form__item">
                            <div class="contact-form__input">
                                <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101"
                                    value="<?php echo e(old('building')); ?>">
                            </div>
                        </div>
                    </div>

                    <div class="contact-form__group">
                        <div class="contact-form__title">
                            <span class="contact-form__label">お問い合わせの種類</span>
                        </div>
                        <div class="contact-form__item">
                            <div class="contact-form__input">
                                <select class="contact-form__select" name="category_id">
                                    <option value="">選択してください</option>
                                    <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <option value="<?php echo e($category['id']); ?>"
                                            <?php echo e(old('category_id') == $category->id ? 'selected' : ''); ?>>
                                            <?php echo e($category->content); ?>

                                        </option>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </select>
                            </div>
                            <div class="form__error">
                                <?php $__errorArgs = ['content'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <?php echo e($message); ?>

                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>
                        </div>

                        <div class="contact-form__group">
                            <div class="contact-form__title">
                                <span class="contact-form__label">お問い合わせ内容</span>
                            </div>
                            <div class="contact-form__item">
                                <div class="contact-form__input">
                                    <textarea class="contact-form__textarea" name="detail" placeholder="お問い合わせ内容をご記載ください"><?php echo e(old('detail')); ?></textarea>
                                </div>
                                <div class="form__error">
                                    <?php $__errorArgs = ['detail'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                        <?php echo e($message); ?>

                                    <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                                </div>
                            </div>

                            <div class="form__button">
                                <button class="form__button-submit" type="submit">
                                    確認画面
                                </button>
                            </div>
        </form>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH /var/www/resources/views/index.blade.php ENDPATH**/ ?>