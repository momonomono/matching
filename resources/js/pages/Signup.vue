<template>
    <div class="l-form-container">
        <section class="p-form">
            <form method="post">
                <input type="hidden" name="_token" :value="csrf">

                <h2 class="p-form__title">ユーザー登録</h2>

                <div class="p-form__container">
                    <FormLabel 
                        title = "メールアドレス"
                        formName = "email"
                        :errMsg = "errMsg['email']"
                    />

                    <FormLabel 
                        title = "パスワード"
                        formName = "password"
                        :errMsg = "errMsg['password']"
                    />

                    <FormLabel 
                        title = "パスワード(確認)"
                        formName = "password_confirmation"
                    />

                    <button class="p-form__button c-button__form">
                        登録
                    </button>
                </div>
            </form>
        </section>
    </div>
</template>

<script>
    import FormLabel from "../components/FormLabel.vue";

    export default{
        props :{
            csrf : {
                type : String,
                required : true
            },
            errMsg :{
                required : true
            }
        },
        components :{
            FormLabel
        }
    }
</script>