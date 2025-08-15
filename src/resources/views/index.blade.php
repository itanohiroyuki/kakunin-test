@extends('layouts.app')

@section('css')
    <link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection

@section('content')
    <div class="contact-form__content">
        <div class="contact-form__heading">
            <h2>Contact</h2>
        </div>
        <form class="contact-form" action="/contacts/confirm" method="post">
            @csrf
            <div class="contact-form__group">
                <div class="contact-form__title">
                    <span class="contact-form__label">お名前</span>
                    <!-- 注意マーク -->
                </div>
                <div class="contact-form__item">
                    <div class="contact-form__input">
                        <input type="text" name="first_name" placeholder="例:山田" value="{{ old('first_name') }}" />
                        <div class="form__error">
                            @error('first_name')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>
                    <div class="contact-form__input">
                        <input type="text" name="last_name" placeholder="例:太郎" value="{{ old('last_name') }}" />
                        <div class="form__error">
                            @error('last_name')
                                {{ $message }}
                            @enderror
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
                            @if (old('gender') == 1) checked @endif>
                        <label for="gender1">男性</label>

                        <input type="radio" name="gender" value="2" id="gender2"
                            @if (old('gender') == 2) checked @endif>
                        <label for="gender2">女性</label>

                        <input type="radio" name="gender" value="3" id="gender3"
                            @if (old('gender') == 3) checked @endif>
                        <label for="gender3">その他</label>
                    </div>
                </div>
                <div class="form__error">
                    @error('gender')
                        {{ $message }}
                    @enderror
                </div>
            </div>

            <div class="contact-form__group">
                <div class="contact-form__title">
                    <span class="contact-form__label">メールアドレス</span>
                </div>
                <div class="contact-form__item">
                    <div class="contact-form__input">
                        <input type="text" name="email" placeholder="例:test@example.com" value="{{ old('email') }}" />
                    </div>
                    <div class="form__error">
                        @error('email')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="contact-form__group">
                    <div class="contact-form__title">
                        <span class="contact-form__label">電話番号</span>
                    </div>
                    <div class="contact-form__item">
                        <div class="contact-form__input">
                            <input type="text" name="tel1" placeholder="080" value="{{ old('tel1') }}"> -
                            <div class="form__error">
                                @error('tel1')
                                    {{ $message }}
                                @enderror
                            </div>
                            <input type="text" name="tel2" placeholder="1234" value="{{ old('tel2') }}"> -
                            <div class="form__error">
                                @error('tel2')
                                    {{ $message }}
                                @enderror
                            </div>
                            <input type="text" name="tel3" placeholder="5678" value="{{ old('tel3') }}">
                            <div class="form__error">
                                @error('tel3')
                                    {{ $message }}
                                @enderror
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
                                value="{{ old('address') }}">
                        </div>
                        <div class="form__error">
                            @error('address')
                                {{ $message }}
                            @enderror
                        </div>
                    </div>

                    <div class="contact-form__group">
                        <div class="contact-form__title">
                            <span class="contact-form-label">建物名</span>
                        </div>
                        <div class="contact-form__item">
                            <div class="contact-form__input">
                                <input type="text" name="building" placeholder="例:千駄ヶ谷マンション101"
                                    value="{{ old('building') }}">
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
                                    @foreach ($categories as $category)
                                        <option value="{{ $category['id'] }}"
                                            {{ old('category_id') == $category->id ? 'selected' : '' }}>
                                            {{ $category->content }}
                                        </option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="form__error">
                                @error('content')
                                    {{ $message }}
                                @enderror
                            </div>
                        </div>

                        <div class="contact-form__group">
                            <div class="contact-form__title">
                                <span class="contact-form__label">お問い合わせ内容</span>
                            </div>
                            <div class="contact-form__item">
                                <div class="contact-form__input">
                                    <textarea class="contact-form__textarea" name="detail" placeholder="お問い合わせ内容をご記載ください">{{ old('detail') }}</textarea>
                                </div>
                                <div class="form__error">
                                    @error('detail')
                                        {{ $message }}
                                    @enderror
                                </div>
                            </div>

                            <div class="form__button">
                                <button class="form__button-submit" type="submit">
                                    確認画面
                                </button>
                            </div>
        </form>
    </div>
@endsection
