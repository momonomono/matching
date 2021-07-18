<template>
    <div class="l-header">
        <div class="p-header">
            <img :src="'/img/logo.png'" class="p-header__logo">


            <ul class="p-header__container" v-if="authFlg">
                <HeaderNavItem link="/work" linkName="案件一覧"/>
                <HeaderNavItem link="/work/post" linkName="案件投稿"/>
                <HeaderNavItem link="/mypage" linkName="マイページ"/>
                <HeaderNavItem link="/logout" linkName="ログアウト"/>
            </ul>

            <ul class="p-header__container" v-else>
                <HeaderNavItem link="/login" linkName="ログイン"/>
                <HeaderNavItem link="/signup" linkName="ユーザー登録"/>
            </ul>
        </div>
    </div>
</template>

<script>
    import HeaderNavItem from "./HeaderNavItem.vue";

    export default{
        props :{
            authFlg:{
                type: Boolean,
                required : true
            }
        },
        components:{
            HeaderNavItem
        }
    }
</script>