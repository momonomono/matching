<template>
    <li class="p-headr__item">
        <p>{{ categoryName}}</p>
        <ul class="p-accordion">
            <li v-for="(index,item) in items" :key="index" class="p-accordion">
                <a class="p-accordion__link" href="">{{ item.linkName }}</a>
            </li>
        </ul>
    </li>
</template>

<script>
    export default {
        props :{
            categoryName :{
                type :String,
                required : true
            },
            items :{
                required :true
            }
        },
    };
</script>