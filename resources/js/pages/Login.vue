<template>
    <div class="l-form-container">
        <section class="p-form">
            <form method="post">
                <input type="hidden" name="_token" :value="csrf">

                <h2 class="p-form__title">ログイン</h2>

                <div class="p-form__errBox">
                    <p class="p-form__errMsg"></p>
                </div>

                <div class="p-form__container">
                    <!-- メールアドレス -->
                    <FormLabel
                        inputType = "text"
                        title = "メールアドレス"
                        formName = "email"
                        :errMsg = "errMsg['email'] "
                        :value = "oldEmail"
                    />

                    <!-- パスワード -->
                    <FormLabelForPassword
                        title = "パスワード"
                        formName = "password"
                        :errMsg = "errMsg['password']"
                    />

                    <div class="p-form__loginSave">
                        <input type="checkbox" name="remember_token" class="p-form__checkBox c-input__checkBox">
                        <p>ログインを保存する</p>
                    </div>

                    <button class="p-form__button c-button__form">
                        ログイン
                    </button>

                </div>
            </form>

        </section>
    </div>
</template>

<script>
    import FormLabel from "../components/FormLabel.vue";
    import FormLabelForPassword from "../components/FormLabelForPassword";

    export default{
        props :{
            errMsg :{
                required : true
            },
            flashMsg :{
                required : false
            },
            old : {
                requied :false
            }
        },
        data :function(){
            return {
                csrf : document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
                oldEmail : this.old.email
            }
        },
        components :{
            FormLabel,
            FormLabelForPassword
        }
    }
</script>